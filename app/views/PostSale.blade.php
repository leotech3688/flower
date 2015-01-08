@extends('layouts.Product')
@section('title') 售后服务-济南鲜花网 @parent @stop
@section('container')
<div class="layout mt15">
	<ol class="breadcrumb">
		<li><a href="/"><i class="glyphicon glyphicon-home"></i> 网站首页</a></li>
		<li><a href="javascript:;"><i class="icon-book"></i> 售后中心</a></li>
	</ol>
</div>
<div class="layout mt15 clearfix">
	<div id="page-left">
		<h2 class="h2"><i class="icon-book"></i>售后中心</h2>
		<div class="uc-help-nav">
			<div class="title"><i class="icon-quote-left"></i>售后服务</div>
			<ul>
				<li><a id="1-A"><i class="icon-caret-right"></i>售后政策说明</a></li>
				<li><a id="1-B"><i class="icon-caret-right"></i>鲜花售后说明</a></li>
				<li><a id="1-C"><i class="icon-caret-right"></i>蛋糕售后说明</a></li>
				<li><a id="1-D"><i class="icon-caret-right"></i>礼品售后服务</a></li>
				<li><a id="1-E"><i class="icon-caret-right"></i>绿植售后说明</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>相关知识</div>
			<ul>
				<li><a id="2-A"><i class="icon-caret-right"></i>鲜花：鲜花朵数含义</a></li>
				<li><a id="2-B"><i class="icon-caret-right"></i>鲜花：鲜花物语</a></li>
				<li><a id="2-C"><i class="icon-caret-right"></i>鲜花：赠送鲜花的学问</a></li>
				<li><a id="2-D"><i class="icon-caret-right"></i>蛋糕：如何选择蛋糕尺寸</a></li>
				<li><a id="2-E"><i class="icon-caret-right"></i>鲜花：节日送鲜花寓意</a></li>
			</ul>
		</div>
	</div>
	<div id="page-right">
	</div>
</div>
@stop
@section('AfterScript')
<script type="text/javascript">
$(document).ready(function() {
    $("#1-A").click(function(){
        //load the change.html into the source page
        $("#page-right").load("/postSale/1-A");
    });
    $("#1-B").click(function(){
        //load the change.html into the source page
        $("#page-right").load("/postSale/1-B");
    });
    $("#1-C").click(function(){
        //load the change.html into the source page
        $("#page-right").load("/postSale/1-C");
    });
    $("#2-A").click(function(){
        //load the change.html into the source page
        $("#page-right").load("/postSale/2-A");
    });
    $("#page-right").load("/postSale/1-A");
});
</script>	
@stop