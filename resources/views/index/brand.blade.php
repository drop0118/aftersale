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
	<div class="col-xs-3 mt20">
		logo
	</div>
	<div class="col-xs-9 mt20">
		<p>官方网站：<a href="{{$brand->site_1}}" target="_blank" title="{{$brand->name}}官方网站">{{$brand->site_1}}</a></p>
		<p>官方微信：</p>
		<p>官方微博：</p>
	</div>
	<!-- <div class="col-xs-12 mt30">
		<div class="common-title">
			<span>官方售后维修服务电话</span>
		</div>
	</div> -->
	<div class="col-xs-12 mt20">
		<div class="panel panel-info">
			<div class="panel-heading">
			<h3 class="panel-title">官方售后维修服务电话</h3>
			</div>
			<div class="panel-body" style="font-size: 24px;">
				{{$brand->phone_1}}
			</div>
		</div>
		<!-- <div class="alert alert-info" style="font-size: ">客服热线：{{$brand->phone_1}}</div> -->
	</div>
	<div class="col-xs-12 mt30">
		<div class="common-title">
			<span>官方售后服务网点</span>
		</div>
	</div>
	<div class="col-xs-12">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th class="col-xs-4">网点</th>
					<th class="col-xs-4">服务时间</th>
					<th class="col-xs-4">联系电话</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($brand->stores as $store)
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
			</tbody>
		</table>
	</div>
</div>

@endsection