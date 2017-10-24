@extends('layout')
@section('title', '[官方]'.$brand->name.$current_city.'售后服务维修电话 & 网点信息')
@section('keyword', $brand->name.$current_city.'售后,'.$brand->name.$current_city.'客服电话,'.$brand->name.$current_city.'售后电话,'.$brand->name.$current_city.'售后服务电话,'.$brand->name.$current_city.'官方客服电话,'.$brand->name.$current_city.'售后服务网点,'.$brand->name.$current_city.'维修点,'.$brand->name.$current_city.'售后维修,'.$brand->name.$current_city.'维修电话,'.$brand->name.$current_city.'售后网点,'.$brand->name.$current_city.'官方售后,'.$brand->name.$current_city.'保修,'.$brand->name.$current_city.'全国联保')
@section('description', $brand->name.$current_city.'的官方售后服务维修电话、售后服务网点地址，以及官网、官博、官方微信号等。信息真实、安全、可靠，供消费者免费参考。')
@section('content')

<div class="col-sm-12 col-md-9">
	<div class="row">
		<div class="col-xs-12">
			<h3><a href="{{url($brand->name)}}" >{{$brand->name}}</a> {{$current_city}} 官方售后服务信息查询</h3>
	    </div>
	</div>
	<div class="row mt20">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="{{url('/'.$current_city)}}">首页</a></li>
				@if ($current_city)
				<li><a href="{{url($brand->name)}}">{{$brand->name}}</a></li>
				<li class="active">{{$brand->name.$current_city}}</li>
				@else 
				<li class="active">{{$brand->name.$current_city}}</li>
				@endif
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="common-title">
				<span>品牌简介</span>
			</div>
		</div>
		<div class="col-xs-12">
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
				<div class="col-xs-12 ">
					<div class="common-title">
						<span>{{$current_city ? $stores->total() : count($stores)}}个{{$current_city}}{{$brand->name}}官方售后服务网点</span>
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
						@if (count($stores))
							@foreach ($stores as $store)
							<tr>
								<td style="line-height: 30px;">
									<a href="{{$store->getCity() ? url($brand->name.'/'.$store->getCity().'/'.$store->id) : url($brand->name)}}">
										{{$store->address}}<br />
										<span class="black-level3">{{$store->name}}</span>
									</a>
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
				<div class="col-xs-12">{{$current_city ? $stores->links() : ''}}</div>
			</div>
		</div>
		
	</div>
</div>
<div class="col-md-3 hidden-xs hidden-sm mt20">
	<!-- taobao ad. -->
	<a data-type="2" biz-keyword="{{$brand->name}}维修" data-tmpl="220x290" data-tmplid="9" data-rd="2" data-style="2" data-border="1" href="#">{{$brand->name}}维修</a>
	<a data-type="2" biz-keyword="{{$brand->name}}" data-tmpl="220x290" data-tmplid="9" data-rd="2" data-style="2" data-border="1" href="#">{{$brand->name}}</a>
	@if ($current_city)
	<a data-type="2" biz-keyword="{{$current_city}}" data-tmpl="220x290" data-tmplid="9" data-rd="2" data-style="2" data-border="1" href="#">{{$current_city}}</a>
	@endif
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

@endsection