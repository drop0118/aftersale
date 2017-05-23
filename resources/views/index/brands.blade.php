@extends('layout')
@section('title', '品牌大全 -')
@section('extra_title', '品牌大全')
@section('keyword', '官方售后服务,官方授权维修,售后,客服热线,维修电话,维修网点地址,门店,保修,全国联保')
@section('description', '官方售后服务信息：官方网站、客服热线、维修网点电话和地址信息等。数据真实、安全、可靠，供消费者免费参考。我们支持保护消费者权益，避免消费者在售后服务过程中遇见李鬼。')
@section('content')
	@foreach ($brands as $k => $_brand)
		<?php 
		if($k == '')
			continue;		
		?>
	<div class="col-xs-12 col-sm-9 media_block">
		<div class="_title">{{$k}}</div>
		<div class="_content">
			@foreach ($_brand as $_name)
			<a href="{{url($_name)}}" class="col-xs-4 col-sm-2">{{$_name}}</a>
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div>
	@endforeach
@endsection