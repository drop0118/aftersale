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

    public function __construct(Request $request)
    {
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

}
