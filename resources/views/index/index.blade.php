@extends('layout')
@section('title', 'E售后-')
@section('content')

<div class="row">
	<div class="col-xs-12 text-center index-header">
        <h1>E售后</h1>
        <h4 class="black-level3">品牌产品官方售后维修服务信息查询平台</h4>
    </div>
    <div class="col-xs-12">
		<form class="" action="<?php echo url('brand-search');?>">
			<div class="form-group form-group-lg">
				<div class=" col-xs-10" style="padding-left: 0px;">
					<input type="text" name="keyword" class="form-control" placeholder="输入您想搜索的品牌名称">
				</div>
				<button class="btn btn-success col-xs-2 btn-lg">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					查询售后
				</button>
			</div>
		</form>
	</div>
</div>
<div class="row mt30">
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