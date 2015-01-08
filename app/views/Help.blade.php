@extends('layouts.Product')
@section('title') 帮助中心-济南鲜花网 @parent @stop
@section('container')
<div class="layout mt15">
	<ol class="breadcrumb">
		<li><a href="/"><i class="glyphicon glyphicon-home"></i> 网站首页</a></li>
		<li><a href="javascript:;"><i class="icon-book"></i> 帮助中心</a></li>
	</ol>
</div>
<div class="layout mt15 clearfix">
	<div id="page-left">
		<h2 class="h2"><i class="icon-book"></i> 帮助中心</h2>
		<div class="uc-help-nav">
			<div class="title"><i class="icon-quote-left"></i>新手指南</div>
			<ul>
				<li><a id="1-A"><i class="icon-caret-right"></i>用户服务协议</a></li>
				<li><a id="1-B"><i class="icon-caret-right"></i>购物流程</a></li>
				<li><a id="1-C"><i class="icon-caret-right"></i>如何注册会员</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>常见问题</div>
			<ul>
				<li><a id="2-A"><i class="icon-caret-right"></i>鲜花订购常见问题</a></li>
				<li><a id="2-B"><i class="icon-caret-right"></i>发票说明</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>支付说明</div>
			<ul>
				<li><a id="3-A"><i class="icon-caret-right"></i>支付说明</a></li>
				<li><a id="3-B"><i class="icon-caret-right"></i>在线支付</a></li>
				<li><a id="3-C"><i class="icon-caret-right"></i>银行汇款</a></li>
				<li><a id="3-D"><i class="icon-caret-right"></i>上门收款服务说明</a></li>
				<li><a id="3-E"><i class="icon-caret-right"></i>先送花后付款说明</a></li>
				<li><a id="3-F"><i class="icon-caret-right"></i>虚拟银行付款说明</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>配送说明</div>
			<ul>
				<li><a id="4-A"><i class="icon-caret-right"></i>配送说明</a></li>
				<li><a id="4-B"><i class="icon-caret-right"></i>鲜花配送范围及费用说明</a></li>
				<li><a id="4-C"><i class="icon-caret-right"></i>送花远近郊查询</a></li>
				<li><a id="4-D"><i class="icon-caret-right"></i>鲜花定时配送费用说明</a></li>
				<li><a id="4-E"><i class="icon-caret-right"></i>快递商品费用说明</a></li>
				<li><a id="4-F"><i class="icon-caret-right"></i>上门收款费用说明</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>会员服务</div>
			<ul>
				<li><a id="5-A"><i class="icon-caret-right"></i>会员享受的服务</a></li>
				<li><a id="5-B"><i class="icon-caret-right"></i>会员积分</a></li>
				<li><a id="5-C"><i class="icon-caret-right"></i>会员虚拟银行</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>订单帮助</div>
			<ul>
				<li><a id="6-A"><i class="icon-caret-right"></i>订单查询</a></li>
				<li><a id="6-B"><i class="icon-caret-right"></i>订单信息的修改</a></li>
				<li><a id="6-C"><i class="icon-caret-right"></i>订单取消</a></li>
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
        $("#page-right").load("/help/1-A");
    });
    $("#1-B").click(function(){
        //load the change.html into the source page
        $("#page-right").load("/help/1-B");
    });
    $("#1-C").click(function(){
        //load the change.html into the source page
        $("#page-right").load("/help/1-C");
    });
    $("#2-A").click(function(){
        //load the change.html into the source page
        $("#page-right").load("/help/2-A");
    });
    $("#page-right").load("/help/1-A");
});
</script>	
@stop
