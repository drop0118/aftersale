@extends('layout')
@section('title', $brand->name.$current_city.'官方售后服务热线、维修网点 - ')
@section('keyword', $brand->name.'官方售后服务,官方授权维修,售后,客服热线,维修电话,维修网点地址,门店,保修,全国联保')
@section('description', $brand->name.'官方售后服务信息：官方网站、客服热线、维修网点电话和地址信息等。数据真实、安全、可靠，供消费者免费参考。我们支持保护消费者权益，避免消费者在售后服务过程中遇见李鬼。')
@section('content')

<div class="row mt20">
	<h1 class="col-xs-12">{{$brand->name}}官方售后维修服务</h1>
</div>
<div class="row mt20">
	<div class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="{{url('/')}}">首页</a></li>
			<li class="active">{{$brand->name.$current_city}}</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="common-title">
			<span>品牌简介</span>
		</div>
	</div>
	<div class="col-xs-9">
		<div class="row">
			@if ($brand->logo_url)
			<div class="col-xs-3 mt20">
				<img style="height: 90px;" alt="{{$brand->name}}品牌LOGO" src="{{$brand->logo_url}}">
			</div>
			<div class="col-xs-9 mt20">
				<p>官方网站：<a href="{{$brand->site_1}}" target="_blank" title="{{$brand->name}}官方网站">{{$brand->site_1}}</a></p>
				<p>官方微信：</p>
				<p>官方微博：</p>
			</div>
			@else
			<div class="col-xs-12 mt20">
				<p>官方网站：<a href="{{$brand->site_1}}" target="_blank" title="{{$brand->name}}官方网站">{{$brand->site_1}}</a></p>
				<p>官方微信：</p>
				<p>官方微博：</p>
			</div>
			@endif
			<div class="col-xs-12 mt20">
				<div class="panel panel-info">
					<div class="panel-heading">
					<h3 class="panel-title">官方售后维修服务电话</h3>
					</div>
					<div class="panel-body" style="font-size: 24px;">
						{{$brand->phone_1}}
					</div>
				</div>
			</div>
			<div class="col-xs-12 mt20">
				<div class="common-title">
					<span>{{$brand->name}}官方售后服务网点</span>
				</div>
			</div>
			<div class="col-xs-12 ">
				<div class="city_area">
				@foreach ($city_map as $city)
					<a href="{{url('brand/'.$brand->name.'/'.$city)}}" class="{{$city == $current_city ? 'active' : ''}}">{{$city}}</a>
				@endforeach
				</div>
			</div>
			<div class="col-xs-12">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th class="col-xs-6">网点</th>
							<th class="col-xs-3">服务时间</th>
							<th class="col-xs-3">联系电话</th>
						</tr>
					</thead>
					<tbody>
					@if ($stores->total())
						@foreach ($stores as $store)
						<tr>
							<td style="line-height: 30px;">
								{{$store->address}}<br />
								<span class="black-level3">{{$store->name}}</span>
							</td>
							<td>
								-
							</td>
							<td>
								{{$store->phone}}
							</td>
						</tr>
						@endforeach
					@else
						<tr>
							<td colspan="3" class="text-center black-level3" style="line-height: 100px;">
								<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> 您所在的地区未查询到服务网点
							</td>
						</tr>
					@endif
					</tbody>
				</table>
			</div>
			<div class="col-xs-12">{{$stores->links()}}</div>
		</div>
	</div>
	<div class="col-xs-3 mt20">
		<!-- taobao ad. -->
		<a data-type="2" biz-keyword="{{$brand->name}}" data-tmpl="220x290" data-tmplid="9" data-rd="2" data-style="2" data-border="1" href="#">{{$brand->name}}</a>
	</div>
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
            pid: "mm_11563586_22442205_74604442",/*推广单元ID，用于区分不同的推广渠道*/
            appkey: "",/*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/
            unid: "",/*自定义统计字段*/
            type: "click" /* click 组件的入口标志 （使用click组件必设）*/
        };
        win.alimamatk_onload = win.alimamatk_onload || [];
        win.alimamatk_onload.push(o);
    })(window,document);
</script>



@endsection