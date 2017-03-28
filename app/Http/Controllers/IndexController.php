<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cache;
use App\Brand;
use App\Store;
use App\Http\Requests;
use App\Infrastructure\Helper;

class IndexController extends Controller
{

	public function index(Request $request, Helper $helper)
	{
		# 获取品牌表
		if( !$brands = Cache::get('index-brands') ){
			$brands = Brand::orderByRaw('RAND()')->take(300)->get();
			Cache::put('index-brands', $brands, 60);
		}
		$brand_list = [];
		foreach ($brands as $_brand) {
			if(in_array($helper->getFirstCharter($_brand->name), ['A','B','C','D'])) {
				count(@$brand_list[1]) < 36 && ($brand_list[1][] = $_brand);
			} elseif(in_array($helper->getFirstCharter($_brand->name), ['E','F','G','H'])) {
				count(@$brand_list[2]) < 36 && ($brand_list[2][] = $_brand);
			} elseif(in_array($helper->getFirstCharter($_brand->name), ['I','J','K','L'])) {
				count(@$brand_list[3]) < 36 && ($brand_list[3][] = $_brand);
			} elseif(in_array($helper->getFirstCharter($_brand->name), ['M','N','O','P'])) {
				count(@$brand_list[4]) < 36 && ($brand_list[4][] = $_brand);
			} elseif(in_array($helper->getFirstCharter($_brand->name), ['Q','R','S','T'])) {
				count(@$brand_list[5]) < 36 && ($brand_list[5][] = $_brand);
			} elseif(in_array($helper->getFirstCharter($_brand->name), ['U','V','W','X','Y','Z'])) {
				count(@$brand_list[6]) < 36 && ($brand_list[6][] = $_brand);
			}
		}

		# 静态内容
		$city_config = ['北京','上海','广州','深圳','南京','武汉','沈阳','西安','成都','重庆','杭州','青岛','大连','宁波','济南','哈尔滨','长春','厦门','郑州','长沙','福州','乌鲁木齐','昆明','兰州','苏州','无锡','南昌','贵阳','南宁','合肥','太原','石家庄','呼和浩特','佛山','东莞','唐山','烟台','泉州','包头'];
		shuffle( $city_config );
		$brand_config = ['小米','vivo','华为','苹果','OPPO','魅族','长城','三星','诺基亚','联想','索尼','海尔','卡西欧','中兴','美的','佳能','步步高','飞利浦','格力','TCL','金立','摩托罗拉','LG','奥克斯','先锋','奔腾','海信','苏泊尔','松下','春兰','四季沐歌','东芝','爱普生','日立','神舟','方太','九阳','清华同方','康佳'];
		shuffle( $brand_config );
		$keyword_config = ['售后服务','售后维续','售后服务电话','售后维修电话','官方客服电话','客服热线','售后服务热线','官方维修点','售后维修点','售后维修服务电话','售后服务点','售后服务门店地址','售后保修地址','售后服务联系方式','维修点地址','保修门店地址','授权维修服务网店','授权维修网点','授权售后服务中心','维修服务中心','售后服务网点','客服服务电话'];

		if( !$last_search_list = Cache::get('index-search-list') ){
			$last_search_list = [];
			foreach ($city_config as $k => $_city) {
				$rand_keyword_config = array_rand($keyword_config);
				$last_search_list[]  = [
					'time' 	  => rand(pow($k + 1, 2), pow($k + 2, 2)),
					'city' 	  => $_city,
					'brand'   => $brand_config[ $k ],
					'keyword' => $keyword_config[ $rand_keyword_config ] 
				];
			}
			Cache::forever('index-search-list', $last_search_list);
		}

		return view('index.index', [
			'brand_list' 	   => $brand_list,
			'last_search_list' => $last_search_list
		]);
	}

	public function brandSearch(Request $request)
	{
		$id = $request->get('keyword');

		$brand = Brand::where('name', $id)->first();
		if(!$brand) {
			return redirect('/');
		} else {
			return redirect('brand/'.$brand->name);
		}
	}

	public function brand(Request $request, Helper $helper, $name, $city = false, $page = 1)
	{
		$brand = Brand::where('name', $name)->first();
		if(!$brand) {
			return redirect('/');
		}
		$query = $brand->stores();
		$area_info = $helper->getIpInfo($request->getClientIp());
		$current_city = $area_info ? $area_info['city'] : Store::$city_map[0];
		if( $city ) {
			$current_city = $city;
		}
		$query = $query->where('address', 'like', '%'.$current_city.'市%');
		$limit = 10;
		$offset = max($page - 1, 0) * $limit;
		$stores = $query->paginate(10);

		return view('index.brand', [
			'brand' 	   => $brand,
			'stores'	   => $stores,
			'city_map' 	   => Store::$city_map,
			'current_city' => $current_city
		]);
	}



}
