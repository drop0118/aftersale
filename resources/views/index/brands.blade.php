@extends('layout')
@section('title', '[官方]售后服务维修电话 & 网点信息 - 品牌大全')
@section('extra_title', '品牌大全')
@section('keyword', '售后,客服电话,售后电话,售后服务电话,官方客服电话,售后服务网点,维修点,售后维修,维修电话,售后网点,官方售后,保修,全国联保,手机维修,电视维修')
@section('description', '数千品牌的官方售后服务维修电话、售后服务网点地址，以及官网、官博、官方微信号等。信息真实、安全、可靠，供消费者免费参考。')
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