@extends('layout')
@section('title', '城市列表 -')
@section('extra_title', $brand->name)
@section('keyword', '官方售后服务,官方授权维修,售后,客服热线,维修电话,维修网点地址,门店,保修,全国联保')
@section('description', '官方售后服务信息：官方网站、客服热线、维修网点电话和地址信息等。数据真实、安全、可靠，供消费者免费参考。我们支持保护消费者权益，避免消费者在售后服务过程中遇见李鬼。')
@section('content')
<?php 
use App\Store;
?>

	<div class="col-xs-12 col-sm-9 cities_area">
		@foreach (Store::$city_map as $_city)
			<a href="{{url('/'.$brand->name.'/'.$_city)}}">{{$_city}}</a>
		@endforeach
	</div>

@endsection