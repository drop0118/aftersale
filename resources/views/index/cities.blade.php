@extends('layout')
@section('title', '[官方]售后服务维修电话 & 网点信息 - 城市大全')
@section('extra_title', '城市列表')
@section('keyword', '售后,客服电话,售后电话,售后服务电话,官方客服电话,售后服务网点,维修点,售后维修,维修电话,售后网点,官方售后,保修,全国联保,手机维修,电视维修')
@section('description', '数千品牌的官方售后服务维修电话、网点地址、官网、官博、官微信息。数据真实、安全、可靠，供消费者免费参考。')
@section('content')
<?php 
use App\Store;
?>

	<div class=" col-xs-12 col-sm-9">
		<div class="alert alert-info" role="alert">
			猜您当前在 <a href="{{url('/'.$current_city)}}"><b>{{$current_city}}市</b></a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 cities_area">
		@foreach (Store::$city_map as $_city)
			<a href="{{url('/'.$_city)}}">{{$_city}}</a>
		@endforeach
	</div>

@endsection