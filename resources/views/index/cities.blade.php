@extends('layout')
@section('title', '城市列表 -')
@section('keyword', '官方售后服务,官方授权维修,售后,客服热线,维修电话,维修网点地址,门店,保修,全国联保')
@section('description', '官方售后服务信息：官方网站、客服热线、维修网点电话和地址信息等。数据真实、安全、可靠，供消费者免费参考。我们支持保护消费者权益，避免消费者在售后服务过程中遇见李鬼。')
@section('content')
<?php 
use App\Store;
?>

<div class="row">
	<div class="col-xs-12">
		<div class="index-header">
			<h1 class="pull-left" style="margin-right: 20px;">售后网</h1>
			城市列表
	    </div>
	</div>
	<div class=" col-xs-12">
		<div class="alert alert-info" role="alert">
			猜您当前在 <a href="{{url('/'.$current_city)}}"><b>{{$current_city}}市</b></a>
		</div>
	</div>
	<div class="col-xs-12 cities_area">
		@foreach (Store::$city_map as $_city)
			<a href="{{url('/'.$_city)}}">{{$_city}}</a>
		@endforeach
	</div>
</div>

@endsection