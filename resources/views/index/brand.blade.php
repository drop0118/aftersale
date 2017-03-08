@extends('layout')
@section('title', $brand->name.'-')
@section('content')

<div class="row mt20">
	<h1 class="col-xs-12">{{$brand->name}}官方售后维修服务</h1>
</div>
<div class="row mt20">
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
								{{$store->name}}<br />
								{{$store->address}}
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
		<a data-type="3" data-tmpl="220x290" data-tmplid="29" data-rd="2" data-style="2" data-border="1" href="#"></a>
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
            pid: "mm_11563586_22068569_73592343",/*推广单元ID，用于区分不同的推广渠道*/
            appkey: "",/*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/
            unid: "",/*自定义统计字段*/
            type: "click" /* click 组件的入口标志 （使用click组件必设）*/
        };
        win.alimamatk_onload = win.alimamatk_onload || [];
        win.alimamatk_onload.push(o);
    })(window,document);
</script>


@endsection