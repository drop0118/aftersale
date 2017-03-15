<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Brand;
use App\CatchContent;
use App\Store;
use App\StoreBrandMap;
use GuzzleHttp\Client;

class YeskyCatcher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yesky_catcher';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '天极网内容爬虫';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Client $client)
    {
        echo "start\n";
        // $this->catchBrands($client);
        $this->catchStores($client);
        echo "finish";
    }

    public function catchStores($client)
    {
        $brand_list = CatchContent::where('url', 'like', '%/brand%')->get();
        $total_count = count($brand_list);
        foreach ($brand_list as $k => $_brand) {
            if($k <= 2163)
                continue;
            $brand_content = $this->_getContent($_brand->url, $client);
            preg_match('/关于(.+?)<\/h2>/ius', $brand_content, $match_brand_title);
            if(!@$match_brand_title[1])
                continue;
            $brand = Brand::where('name', $match_brand_title[1])->first();
            preg_match('/brand\/\d+\/(\d+?)\//i', $_brand->url, $match_brand_code);
            if(!@$match_brand_code[1])
                continue;
            # 获得总页数
            $start_page_content = $this->_getContent('http://product.yesky.com/front/maintaincenter/maintainbrand.do?brandId='.$match_brand_code[1].'&productId=0&regionId=0&cityId=0&pageNo=1&pageSize=10&fromPage=1', $client);
            preg_match('/显示(\d+)条，共(\d+)条/is', $start_page_content, $match_pager);
            if(!@$match_pager[1])
                continue;
            $total_page = ceil($match_pager[2] / $match_pager[1]);
            for ($i=1; $i < $total_page; $i++) { 
                $per_page_content = $this->_getContent('http://product.yesky.com/front/maintaincenter/maintainbrand.do?brandId='.$match_brand_code[1].'&productId=0&regionId=0&cityId=0&pageNo='.$i.'&pageSize=10&fromPage=1', $client);
                preg_match_all('/xxdz\"\>(.+?)\<p\>.+?dianhua\"\>(.+?)\&.+?公司名称：(.+?)<\/em/is', $per_page_content, $match_store, PREG_SET_ORDER);
                foreach ($match_store as $_store) {
                    $store_exists = Store::where('name', $_store[3])->count();
                    if($store_exists)
                        continue;
                    $new_store = new Store();
                    $new_store->name = $_store[3];
                    $new_store->phone = $_store[2];
                    $new_store->address = $_store[1];
                    $new_store->longitude = 0;
                    $new_store->latitude = 0;
                    $new_store->company_name = '';
                    $new_store->save();
                    $new_map = new StoreBrandMap();
                    $new_map->brand_id = $brand->id;
                    $new_map->store_id = $new_store->id;
                    $new_map->save();
                }
            }
            echo "[$k/$total_count]\n";
        }
    }

    public function catchBrands($client)
    {
        $data = $this->_getContent('http://product.yesky.com/maintain/', $client);
        preg_match_all('/(http\:\/\/product\.yesky\.com\/catalog\/\d*\/\d*\/maintain\.shtml)/is', $data, $matches);
        foreach ($matches[0] as $catalog_url) {
            
            $category_content = $this->_getContent($catalog_url, $client);
            preg_match_all('/<li><a\shref=\"(http\:\/\/product\.yesky\.com\/brand\/\d*\/\d*\/maintain\.shtml)">.+?\(\d*\)<\/a><\/li>/is', $category_content, $match_list_brand, PREG_SET_ORDER); 
            foreach ($match_list_brand as $_brand_list) {
                
                $brand_content = $this->_getContent(@$_brand_list[1], $client);
                // $brand_content = iconv('gbk', 'utf-8', $brand_content);
                preg_match('/title\">关于(.+?)<\/h2>/is', $brand_content, $match_brand_title);
                preg_match('/官方网站：<a\shref=\"(.+?)\"/is', $brand_content, $match_brand_site);
                preg_match('/售后电话.+?<dt>(.+?)</is', $brand_content, $match_brand_phone);

                $brand_exists = Brand::where('name', @$match_brand_title[1])->count();
                if($brand_exists)
                    continue;
                $new_brand = new Brand();
                $new_brand->name = @$match_brand_title[1];
                $new_brand->site_1 = @$match_brand_site[1];
                $new_brand->phone_1 = @$match_brand_phone[1];
                $new_brand->save();

                echo $new_brand->name." Saved.\n";

            }
        }
    }

    public function _getContent($url, $client)
    {
        $content = CatchContent::where('url', $url)->first();
        if($content && $content->content) {
            $content = $content->content;
        } else {
            $request = $client->request('get', $url, [
                'verify' => false
            ]);
            $content = $request->getBody()->getContents();
            if( $content ) {
                if(json_encode($content) == null)
                    $content = iconv('gbk//IGNORE', 'utf-8//IGNORE', $content);
                $catch_content = new CatchContent();
                $catch_content->url = $url;
                $catch_content->content = $content;
                $catch_content->save();
            }
        }
        return $content;
    }

}
