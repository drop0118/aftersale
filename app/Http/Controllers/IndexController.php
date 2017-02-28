<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;
use App\Http\Requests;

class IndexController extends Controller
{

	public function index(Request $request)
	{
		return view('index.index', [
			'name' => ''
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

	public function brand(Request $request, $name)
	{
		$brand = Brand::where('name', $name)->first();
		if(!$brand) {
			return redirect('/');
		}
		return view('index.brand', [
			'brand' => $brand
		]);
	}

}
