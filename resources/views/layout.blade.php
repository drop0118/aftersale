<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>@yield('title') 官方售后信息</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="@yield('keyword')" />
        <meta name="description" content="@yield('description')" />
        <link rel="shortcut icon" href=" /favicon.ico" /> 
        <link rel="stylesheet" type="text/css" href="/resource/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/resource/css/main.css">
        <script type="text/javascript" src="/resource/js/jquery-3.1.1.js"></script>
        <script src="/resource/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header class="container-fluid">
            <div class="index-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-11 col-sm-7" style="white-space: nowrap;">
                                    <h2 class="pull-left" style="margin-right: 20px;margin-top: 14px;"><a href="{{isset($city) ? url('/'.$city) : url('/')}}" style="color: white;text-decoration: none;font-weight: 100;">官方售后信息</a></h2>
                                    @yield('extra_title')

                                    @if (isset($city))
                                    {{$city}} <a href="{{url('/cities')}}" style="font-size: 14px;color: rgba(255,255,255, 0.6);">[切换城市]</a>
                                    @endif
                                </div>
                                <div class="col-xs-1 col-sm-5 text-right hidden-xs">
                                    品牌产品官方售后服务信息查询
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            
            <div class="row">
            @yield('content')
            </div>
            <div class="row">
                <div class="col-xs-12 bottom-link">
                    <a href="{{url('brands')}}">品牌大全</a>
                    <a href="{{url('/cities')}}">城市大全</a>
                </div>
            </div>
            <footer class="row">
                <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9">
                    <a class="pull-left" role="button" data-toggle="collapse" href="#friendly-link" aria-expanded="false" aria-controls="friendly-link"><span class="caret"></span></a>
                    <a target="_blank" href="http://www.miitbeian.gov.cn/" class="pull-right">沪ICP备17010071号</a>
                </div>
                <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9 collapse" id="friendly-link">
                    <div class="well well-sm">
                        <a href="http://www.ygdai.com" target="_blank" title="阳光贷">互联网理财</a>
                        <a href="http://www.eshouhou.com.cn" target="_blank" title="e售后服务">售后服务信息大全</a>
                        <a href="http://shouhou.me" target="_blank" title="售后服务">售后服务信息大全</a>
                        <a href="http://fankan.me" target="_blank" title="微信微博今日头条等文章大集合">翻看</a>
                    </div>
                </div>
            </footer>
        </div>
        <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?72962872148add9fd8443c768c0fd594";
            var s = document.getElementsByTagName("script")[0]; 
            s.parentNode.insertBefore(hm, s);
        })();
        </script>
        <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?54e7b184b0ea3a44f4da1d9251802410";
            var s = document.getElementsByTagName("script")[0]; 
            s.parentNode.insertBefore(hm, s);
        })();
        </script>

    </body>
</html>