@extends('layout')
@section('title', '[官方]'.$city.'售后服务维修电话 & 网点信息')
@section('keyword', $city.'售后,'.$city.'客服电话,'.$city.'售后电话,'.$city.'售后服务电话,'.$city.'官方客服电话,'.$city.'售后服务网点,'.$city.'维修点,'.$city.'售后维修,'.$city.'维修电话,'.$city.'售后网点,'.$city.'官方售后,'.$city.'保修,'.$city.'全国联保')
@section('description', $city.'数千品牌的官方售后服务维修电话、网点地址、官网、官博、官微信息。数据真实、安全、可靠，供消费者免费参考。')
@section('content')

<div class="col-sm-12 col-md-9">
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
			<div class="hot-brand">
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t1"><a class=" " href="{{url('苹果/'.$city)}}" title="苹果/Apple官方售后"><s></s><p>苹果</p></a></div>
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t2"><a class="" href="{{url('华为/'.$city)}}" title="华为/Huawei官方售后"><s></s><p>华为</p></a></div>
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t3"><a class="" href="{{url('小米/'.$city)}}" title="小米/Xiaomi官方售后"><s></s><p>小米</p></a></div>
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t4"><a class="" href="{{url('三星/'.$city)}}" title="三星/Sumsung官方售后"><s></s><p>三星</p></a></div>
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t5"><a class="" href="{{url('魅族/'.$city)}}" title="魅族/Meizu官方售后"><s></s><p>魅族</p></a></div>
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t6"><a class="" href="{{url('联想/'.$city)}}" title="联想/Lenovo官方售后"><s></s><p>联想</p></a></div>
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t7"><a class="" href="{{url('乐视/'.$city)}}" title="乐视官方售后"><s></s><p>乐视</p></a></div>
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t8"><a class="" href="{{url('金立/'.$city)}}" title="金立官方售后"><s></s><p>金立</p></a></div>
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t9"><a class="" href="{{url('vivo/'.$city)}}" title="vivo官方售后"><s></s><p>vivo</p></a></div>
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t10"><a class="" href="{{url('OPPO/'.$city)}}" title="OPPO官方售后"><s></s><p>OPPO</p></a></div>
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t11"><a class="" href="{{url('美图/'.$city)}}" title="美图官方售后"><s></s><p>美图</p></a></div>
					<div class="text-center col-md-2 col-sm-3 col-xs-4 t12"><a class="" href="{{url('LG/'.$city)}}" title="LG官方售后"><s></s><p>LG</p></a></div>
			</div>
		</div>
	</div>

	<div class="row mt20 hidden-xs">
		<div class="col-xs-12">
			<div class="common-title">
				<span>所有品牌</span>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="number_content">
				<div class="row">
					<div class="number_index col-xs-12">
						<a href="javascript:void(0);" data='1' class="show_brands col-xs-2 hover">A - C</a>
						<a href="javascript:void(0);" data='2' class="show_brands col-xs-2">D - F</a>
						<a href="javascript:void(0);" data='3' class="show_brands col-xs-2">G - I</a>
						<a href="javascript:void(0);" data='4' class="show_brands col-xs-2">J - L</a>
						<a href="javascript:void(0);" data='5' class="show_brands col-xs-2">M - P</a>
						<a href="javascript:void(0);" data='6' class="show_brands col-xs-2">Q - T</a>
						<a href="javascript:void(0);" data='7' class="show_brands col-xs-2">U - W</a>
						<a href="javascript:void(0);" data='8' class="show_brands col-xs-2">X - Z</a>
					</div>
					<div class="brand_content col-xs-12">
						<div class="content_1">
						@foreach ($brand_list[1] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2" title="{{$_brand->name}}">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_2" style="display:none;">
						@foreach ($brand_list[2] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2" title="{{$_brand->name}}">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_3" style="display:none;">
						@foreach ($brand_list[3] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2" title="{{$_brand->name}}">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_4" style="display:none;">
						@foreach ($brand_list[4] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2" title="{{$_brand->name}}">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_5" style="display:none;">
						@foreach ($brand_list[5] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2" title="{{$_brand->name}}">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_6" style="display:none;">
						@foreach ($brand_list[6] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2" title="{{$_brand->name}}">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_7" style="display:none;">
						@foreach ($brand_list[7] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2" title="{{$_brand->name}}">{{$_brand->name}}</a>
						@endforeach
						</div>
						<div class="content_8" style="display:none;">
						@foreach ($brand_list[8] as $_brand)
							<a href="{{url('/'.$_brand->name.'/'.$city)}}" class="col-xs-2" title="{{$_brand->name}}">{{$_brand->name}}</a>
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
