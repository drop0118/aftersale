<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Config;

use Illuminate\Http\Request;
use App\RequestLog;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        if( !Config::get('app.debug') ) {
            // $request_log = new RequestLog();
            // $request_log->request_ip = $_SERVER['REMOTE_ADDR'];
            // $request_log->request_header = $_SERVER['HTTP_USER_AGENT'];
            // $request_log->request_uri = $request->fullUrl();
            // if($request->get('keyword')) {
            //     $request_log->keyword = $request->get('keyword');
            // }
            // $request_log->save(); 
        }
    }

    public function checkIsRobot()
    {
        $_spider_maps = [
			"TencentTraveler", 
			"Baiduspider+", 
			"BaiduGame", 
			"Googlebot", 
			"msnbot", 
			"Sosospider+", 
			"Sogou web spider", 
			"ia_archiver", 
			"Yahoo! Slurp", 
			"YoudaoBot", 
			"Yahoo Slurp", 
			"MSNBot", 
			"Java (Often spam bot)", 
			"BaiDuSpider", 
			"Voila", 
			"Yandex bot", 
			"BSpider", 
			"twiceler", 
			"Sogou Spider", 
			"Speedy Spider", 
			"Google AdSense", 
			"Heritrix", 
			"Python-urllib", 
			"Alexa (IA Archiver)", 
			"Ask", 
			"Exabot", 
			"Custo", 
			"OutfoxBot/YodaoBot", 
			"yacy", 
			"SurveyBot", 
			"legs", 
			"lwp-trivial", 
			"Nutch", 
			"StackRambler", 
			"The web archive (IA Archiver)", 
			"Perl tool", 
			"MJ12bot", 
			"Netcraft", 
			"MSIECrawler", 
			"WGet tools", 
			"larbin", 
			"Fish search", 
		]; 
		$result = false;
		foreach ($_spider_maps as $_site) {
			if( strpos($this->request->server->getHeaders()['USER_AGENT'], strtolower($_site) !== false) ) {
				$result = true;
				break;
			}
		}
		return $result;
    }

}
