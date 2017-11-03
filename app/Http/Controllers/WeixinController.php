<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cache;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests;
use App\Infrastructure\Helper;
use GuzzleHttp\Client;

class WeixinController extends Controller
{

	public function getWeixinOpenId(Request $request, Helper $helper, Client $request_client)
	{
		$res = $request_client->request('GET', 'https://api.weixin.qq.com/sns/jscode2session', [
			'appid' 	 => 'wx686ee2a0dea3569e',
			'secret' 	 => 'ce06e6f937c350855476eb8410c62338',
			'js_code' 	 => $request->code,
			'grant_type' => 'authorization_code'
		]);
		echo $res->getBody();
	}

	public function postWeixinPay(Request $request, Helper $helper, Client $request_client)
	{
		# code...
	}

}
