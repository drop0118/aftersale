<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cache;
use App\Brand;
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

		return view('index.index', [
			'brand_list' => $brand_list
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

	public function brand(Request $request, Helper $helper, $name, $page = 1)
	{
		$brand = Brand::where('name', $name)->first();
		if(!$brand) {
			return redirect('/');
		}
		$query = $brand->stores();
		if($area_info = $helper->getIpInfo($request->getClientIp())) {
			$query = $query->where('address', 'like', '%'.$area_info['city'].'%');
		} else {
			$query = $query->orderByRaw('RAND()');
		}
		$limit = 10;
		$offset = max($page - 1, 0) * $limit;
		$stores = $query->paginate(10);

		return view('index.brand', [
			'brand' => $brand,
			'stores' => $stores,
		]);
	}



}
