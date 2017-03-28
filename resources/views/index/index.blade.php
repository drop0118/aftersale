@extends('layout')
@section('title', '官方售后服务、维修 - 电话、网点地址大全 -')
@section('keyword', '官方售后服务,官方授权维修,售后,客服热线,维修电话,维修网点地址,门店,保修,全国联保')
@section('description', 'e售后网收录了数千个品牌产品的官方售后服务维修的电话、网点信息。数据真实、安全、可靠，供消费者免费参考。我们支持保护消费者权益，避免消费者在售后服务过程中遇见李鬼。')
@section('content')

<div class="row">
	<div class="col-xs-12 text-center index-header">
        <h1>E售后</h1>
        <h1>品牌产品官方售后服务信息查询</h1>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
		<form class="" action="<?php echo url('brand-search');?>">
			<div class="form-group form-group-lg">
				<div class=" col-xs-9" style="padding-left: 0px;">
					<input type="text" name="keyword" class="form-control" placeholder="输入您想搜索的品牌名称">
				</div>
				<button class="btn btn-success col-xs-3 btn-lg">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					查询官方售后服务信息
				</button>
			</div>
		</form>
	</div>
</div>

<div class="row mt20">
	<table class="col-xs-12">
		<tr>
			<td><a class="btn btn-link" href="/brand/苹果">苹果/Apple官方售后</a></td>
			<td><a class="btn btn-link" href="/brand/华为">华为/Huawei官方售后</a></td>
			<td><a class="btn btn-link" href="/brand/小米">小米/Xiaomi官方售后</a></td>
			<td><a class="btn btn-link" href="/brand/三星">三星/Sumsung官方售后</a></td>
			<td><a class="btn btn-link" href="/brand/魅族">魅族/Meizu官方售后</a></td>
		</tr>
		<tr>
			<td><a class="btn btn-link" href="/brand/乐视">乐视官方售后</a></td>
			<td><a class="btn btn-link" href="/brand/金立">金立官方售后</a></td>
			<td><a class="btn btn-link" href="/brand/努比亚">努比亚官方售后</a></td>
			<td><a class="btn btn-link" href="/brand/vivo">vivo官方售后</a></td>
			<td><a class="btn btn-link" href="/brand/OPPO">OPPO官方售后</a></td>
		</tr>
	</table>
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
					<a href='<?php echo url("brand/{$_search_item['brand']}/{$_search_item['city']}")?>'>{{$_search_item['brand'] . $_search_item['city'] . $_search_item['keyword']}}</a>
				</td>
				@else
				<td class="text-right">
					<a href='<?php echo url("brand/{$_search_item['brand']}/{$_search_item['city']}")?>'>{{$_search_item['city'] . $_search_item['brand'] . $_search_item['keyword']}}</a>
				</td>
				@endif
			</tr>
		@endforeach
		</table>
	</div>
</div>
<div class="row mt20">
	<div class="col-xs-12">
		<div class="common-title">
			<span>所有品牌</span>
		</div>
	</div>
	<div class="col-xs-12 mt20 ">
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
						<a href="{{url('brand/'.$_brand->name)}}" class="col-xs-2">{{$_brand->name}}</a>
					@endforeach
					</div>
					<div class="content_2" style="display:none;">
					@foreach ($brand_list[2] as $_brand)
						<a href="{{url('brand/'.$_brand->name)}}" class="col-xs-2">{{$_brand->name}}</a>
					@endforeach
					</div>
					<div class="content_3" style="display:none;">
					@foreach ($brand_list[3] as $_brand)
						<a href="{{url('brand/'.$_brand->name)}}" class="col-xs-2">{{$_brand->name}}</a>
					@endforeach
					</div>
					<div class="content_4" style="display:none;">
					@foreach ($brand_list[4] as $_brand)
						<a href="{{url('brand/'.$_brand->name)}}" class="col-xs-2">{{$_brand->name}}</a>
					@endforeach
					</div>
					<div class="content_5" style="display:none;">
					@foreach ($brand_list[5] as $_brand)
						<a href="{{url('brand/'.$_brand->name)}}" class="col-xs-2">{{$_brand->name}}</a>
					@endforeach
					</div>
					<div class="content_6" style="display:none;">
					@foreach ($brand_list[6] as $_brand)
						<a href="{{url('brand/'.$_brand->name)}}" class="col-xs-2">{{$_brand->name}}</a>
					@endforeach
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
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
