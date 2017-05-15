@extends('layout')
@section('title', '官方售后服务、维修 - 电话、网点地址大全 -')
@section('keyword', '官方售后服务,官方授权维修,售后,客服热线,维修电话,维修网点地址,门店,保修,全国联保')
@section('description', 'e售后网收录了数千个品牌产品的官方售后服务维修的电话、网点信息。数据真实、安全、可靠，供消费者免费参考。我们支持保护消费者权益，避免消费者在售后服务过程中遇见李鬼。')
@section('content')

<div class="col-sm-12 col-md-9">
	<div class="row">
		<div class="index-header">
			<div class="col-xs-6">
				<h1 class="pull-left" style="margin-right: 20px;">售后网</h1>
				{{$city}} <a href="{{url('/cities')}}" style="font-size: 14px;">[切换城市]</a>
			</div>
	        <div class="col-xs-6 text-right">
	        	品牌产品官方售后服务信息查询
	        </div>
	    </div>
	</div>

	<div class="row">
	    <div class="col-xs-12">
			<form class="" action="<?php echo url('brand-search');?>">
				<div class="input-group">
					<input type="text" name="keyword" class="form-control input-lg" placeholder="输入您想搜索的品牌名称">
					<span class="input-group-btn">
						<button class="btn btn-success btn-lg">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							搜索
						</button>
					</span>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt20">
		<div class="col-xs-12">
			<table class="col-xs-12 hot-brand">
				<tr>
					<td rowspan=2 class="text-center title">热<br />门<br />品<br />牌</td>
					<td class="text-center"><a class="btn btn-link" href="{{url('苹果/'.$city)}}" title="苹果/Apple官方售后">苹果</a></td>
					<td class="text-center"><a class="btn btn-link" href="{{url('华为/'.$city)}}" title="华为/Huawei官方售后">华为</a></td>
					<td class="text-center"><a class="btn btn-link" href="{{url('小米/'.$city)}}" title="小米/Xiaomi官方售后">小米</a></td>
					<td class="text-center"><a class="btn btn-link" href="{{url('三星/'.$city)}}" title="三星/Sumsung官方售后">三星</a></td>
					<td class="text-center"><a class="btn btn-link" href="{{url('魅族/'.$city)}}" title="魅族/Meizu官方售后">魅族</a></td>
					<td class="text-center"><a class="btn btn-link" href="{{url('联想/'.$city)}}" title="联想/Lenovo官方售后">联想</a></td>
				</tr>
				<tr>
					<td class="text-center"><a class="btn btn-link" href="{{url('乐视/'.$city)}}" title="乐视官方售后">乐视</a></td>
					<td class="text-center"><a class="btn btn-link" href="{{url('金立/'.$city)}}" title="金立官方售后">金立</a></td>
					<td class="text-center"><a class="btn btn-link" href="{{url('vivo/'.$city)}}" title="vivo官方售后">vivo</a></td>
					<td class="text-center"><a class="btn btn-link" href="{{url('OPPO/'.$city)}}" title="OPPO官方售后">OPPO</a></td>
					<td class="text-center"><a class="btn btn-link" href="{{url('美图/'.$city)}}" title="美图官方售后">美图</a></td>
					<td class="text-center"><a class="btn btn-link" href="{{url('LG/'.$city)}}" title="LG官方售后">LG</a></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row mt20">
		<div class="col-xs-12">
			<div class="common-title">
				<span>所有品牌</span>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="number_content">
				<div class="row">
					<div class="number_index col-xs-2">
						<a href="javascript:void(0);" data='1' class="show_brands hover">A - D</a>
						<a href="javascript:void(0);" data='2' class="show_brands">E - H</a>
						<a href="javascript:void(0);" data='3' class="show_brands">I - L</a>
						<a href="javascript:void(0);" data='4' class="show_brands">M - P</a>
						<a href="javascript:void(0);" data='5' class="show_brands">Q - T</a>
						<a href="javascript:void(0);" data='6' class="show_brands">U - Z</a>
					</div>
					<div class="brand_content col-xs-10">
						<div class="content_1">
						@foreach ($brand_list[1] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_2" style="display:none;">
						@foreach ($brand_list[2] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_3" style="display:none;">
						@foreach ($brand_list[3] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_4" style="display:none;">
						@foreach ($brand_list[4] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_5" style="display:none;">
						@foreach ($brand_list[5] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_6" style="display:none;">
						@foreach ($brand_list[6] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2">{{$_brand->name}}</a>
						@endforeach
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class="row mt20">
		<div class="col-xs-12">
			<div class="common-title">
				<span>最近/常用搜索</span>
			</div>
			<table class="table table-striped">
			@foreach( $last_search_list as $_k => $_search_item )
				<tr>
					<td>
						<?php 
						if( $_search_item['time'] < 60 ) {
							echo $_search_item['time'].'分钟前';
						} elseif( $_search_item['time'] ) {
							echo floor($_search_item['time']/60) . '小时' . ($_search_item['time'] - 60*floor($_search_item['time']/60)) . '分钟前';
						}
						?>
					</td>
					@if( $_k % 2 == 0 )
					<td class="text-right">
						<a href='<?php echo url("/{$_search_item['brand']}/{$_search_item['city']}")?>'>{{$_search_item['brand'] . $_search_item['city'] . $_search_item['keyword']}}</a>
					</td>
					@else
					<td class="text-right">
						<a href='<?php echo url("/{$_search_item['brand']}/{$_search_item['city']}")?>'>{{$_search_item['city'] . $_search_item['brand'] . $_search_item['keyword']}}</a>
					</td>
					@endif
				</tr>
			@endforeach
			</table>
		</div>
	</div>
	
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('.show_brands').hover(function(){
		$('.show_brands').removeClass('hover');
		$(this).addClass("hover");
		var data = $(this).attr('data');
		$('div[class^="content_"]').hide();
		$('.content_'+data).show();
	});
});
</script>
@endsection
