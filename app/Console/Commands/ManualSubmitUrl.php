<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Store;
use App\Brand;

class ManualSubmitUrl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manual-submit-url';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Submit url to baidu';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $urls = $this->getAllUrls();
		$api = 'http://data.zz.baidu.com/urls?site=www.shouhou.me&token=2iGHTQ2OTNOfQ5um';
		$ch = curl_init();
		$options =  array(
			CURLOPT_URL => $api,
			CURLOPT_POST => true,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => implode("\n", $urls),
			CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
		);
		curl_setopt_array($ch, $options);
		$result = curl_exec($ch);
		echo "DONE";
    }

    public function getAllUrls()
    {
    	$domain = 'http://www.shouhou.me';
    	$stores = Store::get();
    	$result = "";
    	// foreach (Store::$city_map as $_city) {
    	// 	$result[] = $domain.'/'.$_city;
    	// }
        $j = 1;
        Store::with('brands')->chunk(10000, function($stores) use ($domain, &$result, &$j) {
            foreach ($stores as $_store) {
                if( $_city = $_store->getCity() ) {
                    $result .= $domain.'/'.$_store->brands[0]->name.'/'.$_city.'/'.$_store->id."\n";
                }
            }
            echo $j."\n";
            Storage::disk('local')->put('store-'.$j.'.txt', $result);
            $j++;
            $result = "";
        });
        echo 'done';exit;
        
    	return $result;
    }
}
