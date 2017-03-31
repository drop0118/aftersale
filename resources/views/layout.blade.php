<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>@yield('title') e售后</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="@yield('keyword')" />
        <meta name="description" content="@yield('description')" />
        <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/resource/css/main.css">
        <script type="text/javascript" src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="row"></header>
            @yield('content')
            <footer class="row">
                <div class="col-xs-12">
                    <a target="_blank" href="http://www.miitbeian.gov.cn/">沪ICP备17010071号</a>
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

    </body>
</html>