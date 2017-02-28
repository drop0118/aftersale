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
</div>

@endsection