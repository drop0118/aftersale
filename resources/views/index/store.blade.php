@extends('layout')
@section('title', $store->name.' '.$brand->name.'官方售后服务热线、维修网点 - ')
@section('extra_title', $store->name)
@section('keyword', $brand->name.'官方售后服务,官方授权维修,售后,客服热线,维修电话,维修网点地址,门店,保修,全国联保')
@section('description', $brand->name.'官方售后服务信息：官方网站、客服热线、维修网点电话和地址信息等。数据真实、安全、可靠，供消费者免费参考。我们支持保护消费者权益，避免消费者在售后服务过程中遇见李鬼。')
@section('content')

<div class="col-sm-12 col-md-9">
	<div class="row ">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="{{url('/'.$current_city)}}">首页</a></li>
				<li><a href="{{url($brand->name)}}">{{$brand->name}}</a></li>
				<li><a href="{{url($brand->name.'/'.$current_city)}}">{{$current_city}}</a></li>
				<li class="active">{{$brand->name.$current_city}}</li>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h4>{{$brand->name}}官方售后维修服务网点</h4>
		</div>
		<div class="col-xs-12">
			<h2>{{$store->name}}</h2>
		</div>
		<div class="col-xs-12 mt20">
			<p>
			地址：{{$store->address}} <!-- <a href="javascript:void(0);" class="btn btn-sm btn-success" style="margin-left: 15px;"><span class="glyphicon glyphicon-share-alt"></span> 到这去</a> -->
			</p>
			<p>
			电话：{{$store->phone}}
			</p>
		</div>
		<div class="col-xs-12">
			<a href="{{url($brand->name.'/'.$current_city)}}" class="btn btn-block btn-default mt20">查看{{$current_city}}市其他{{$brand->name}}官方售后维修服务网点</a>
		</div>
		<div class="col-xs-12 mt20">
			<div id="BDmap">
				
			</div>
			<!-- <a href="javascript:void(0);" class="btn btn-sm btn-success pull-right mt20" ><span class="glyphicon glyphicon-share-alt"></span> 到这去</a> -->
		</div>
	</div>
</div>
<div class="col-md-3 hidden-xs hidden-sm mt20">
	<!-- taobao ad. -->
	<a data-type="2" biz-keyword="{{$current_city}}" data-tmpl="220x290" data-tmplid="9" data-rd="2" data-style="2" data-border="1" href="#">{{$current_city}}</a>
	<a data-type="2" biz-keyword="{{$brand->name}}" data-tmpl="220x290" data-tmplid="9" data-rd="2" data-style="2" data-border="1" href="#">{{$brand->name}}</a>
</div>
<script type="text/javascript">
    (function(win,doc){
        var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0];
        if (!win.alimamatk_show) {
            s.charset = "gbk";
            s.async = true;
            s.src = "http://a.alimama.cn/tkapi.js";
            h.insertBefore(s, h.firstChild);
        };
        var o = {
            pid: "mm_11563586_25266816_96526329",/*推广单元ID，用于区分不同的推广渠道*/
            appkey: "",/*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/
            unid: "",/*自定义统计字段*/
            type: "click" /* click 组件的入口标志 （使用click组件必设）*/
        };
        win.alimamatk_onload = win.alimamatk_onload || [];
        win.alimamatk_onload.push(o);
    })(window,document);
</script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=iZ2N0CeS5TyPMTyiwo17kDClHUVPfo3V"></script>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("BDmap");
	var opts = {type: BMAP_NAVIGATION_CONTROL_ZOOM}
	map.addControl(new BMap.NavigationControl(opts));
	map.enableScrollWheelZoom(true);
	map.setCurrentCity("{{$current_city}}");
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
	var local = new BMap.LocalSearch(map, {
		renderOptions:{map: map}
	});
	local.search("{{$store->address}}");
</script>

@endsection