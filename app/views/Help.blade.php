@extends('layouts.Product')
@section('title') 帮助中心-济南鲜花网 @parent @stop
@section('container')
<div class="layout mt15">
	<ol class="breadcrumb">
		<li><a href="#"><i class="glyphicon glyphicon-home"></i> 网站首页</a></li>
		<li><a href="javascript:;"><i class="icon-book"></i> 帮助中心</a></li>
		<li><a href="javascript:;">用户服务协议</a></li>
	</ol>
</div>
<div class="layout mt15 clearfix">
	<div id="page-left">
		<h2 class="h2"><i class="icon-book"></i> 帮助中心</h2>
		<div class="uc-help-nav">
			<div class="title"><i class="icon-quote-left"></i>新手指南</div>
			<ul>
				<li><a id="1-A"><i class="icon-caret-right"></i>用户服务协议</a></li>
				<li><a href="/help/vnasi_GouWuLiuCheng.html"><i class="icon-caret-right"></i>购物流程</a></li>
				<li><a href="/help/vnasi_huiyuanvip.html"><i class="icon-caret-right"></i>如何注册会员</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>常见问题</div>
			<ul>
				<li><a href="/help/vnasi_XianhuaChangJianWenTi.html"><i class="icon-caret-right"></i>鲜花订购常见问题</a></li>
				<li><a href="/help/vnasi_FaPiaoShuoMing.html"><i class="icon-caret-right"></i>发票说明</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>支付说明</div>
			<ul>
				<li><a href="/help/vnasi_zhifu.html"><i class="icon-caret-right"></i>支付说明</a></li>
				<li><a href="/help/vnasi_zaixianzhifu.html"><i class="icon-caret-right"></i>在线支付</a></li>
				<li><a href="/help/vnasi_yinhanghuikuan.html"><i class="icon-caret-right"></i>银行汇款</a></li>
				<li><a href="/help/vnasi_shangmenshoukuanFuWu.html"><i class="icon-caret-right"></i>上门收款服务说明</a></li>
				<li><a href="/help/vnasi_xiansonghuahoufukuan.html"><i class="icon-caret-right"></i>先送花后付款说明</a></li>
				<li><a href="/help/vnasi_vbank.html"><i class="icon-caret-right"></i>虚拟银行付款说明</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>配送说明</div>
			<ul>
				<li><a href="/help/vnasi_PeiSongShuoMing.html"><i class="icon-caret-right"></i>配送说明</a></li>
				<li><a href="/help/vnasi_songhuafanwei.html"><i class="icon-caret-right"></i>鲜花配送范围及费用说明</a></li>
				<li><a href="/help/vnasi_songhuayuanjin.html"><i class="icon-caret-right"></i>送花远近郊查询</a></li>
				<li><a href="/help/vnasi_xianhuadingshipeisong.html"><i class="icon-caret-right"></i>鲜花定时配送费用说明</a></li>
				<li><a href="/help/vnasi_kuaidifeishuoming.html"><i class="icon-caret-right"></i>快递商品费用说明</a></li>
				<li><a href="/help/vnasi_shangmenshoukuanFeiYongShuoMing.html"><i class="icon-caret-right"></i>上门收款费用说明</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>会员服务</div>
			<ul>
				<li><a href="/help/vnasi_huiyuanfuwu.html"><i class="icon-caret-right"></i>会员享受的服务</a></li>
				<li><a href="/help/vnasi_huiyuanjifen.html"><i class="icon-caret-right"></i>会员积分</a></li>
				<li><a href="/help/vnasi_huiyuanvbank.html"><i class="icon-caret-right"></i>会员虚拟银行</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>订单帮助</div>
			<ul>
				<li><a href="/help/vnasi_dingdanchaxun.html"><i class="icon-caret-right"></i>订单查询</a></li>
				<li><a href="/help/vnasi_dingdanxiugai.html"><i class="icon-caret-right"></i>订单信息的修改</a></li>
				<li><a href="/help/vnasi_dingdanquxiao.html"><i class="icon-caret-right"></i>订单取消</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>售后服务</div>
			<ul>
				<li><a href="/help/vnasi_shouhouzhengce.html"><i class="icon-caret-right"></i>售后政策说明</a></li>
				<li><a href="/help/vnasi_XianHua_ShouHou.html"><i class="icon-caret-right"></i>鲜花售后说明</a></li>
				<li><a href="/help/vnasi_dangaoshouhou.html"><i class="icon-caret-right"></i>蛋糕售后说明</a></li>
				<li><a href="/help/vnasi_LiPin_ShouHou.html"><i class="icon-caret-right"></i>礼品售后服务</a></li>
				<li><a href="/help/vnasi_LvZhi_ShouHou.html"><i class="icon-caret-right"></i>绿植售后说明</a></li>
			</ul>
			<div class="title"><i class="icon-quote-left"></i>相关知识</div>
			<ul>
				<li><a href="/help/vnasi_xianhuaduoshuohanyi.html"><i class="icon-caret-right"></i>鲜花：鲜花朵数含义</a></li>
				<li><a href="/help/vnasi_xianhuawuyu.html"><i class="icon-caret-right"></i>鲜花：鲜花物语</a></li>
				<li><a href="/help/vnasi_zenghuaxuewen.html"><i class="icon-caret-right"></i>鲜花：赠送鲜花的学问</a></li>
				<li><a href="/help/vnasi_dangaochicun.html"><i class="icon-caret-right"></i>蛋糕：如何选择蛋糕尺寸</a></li>
				<li><a href="/help/vnasi_JieRiSongHua.html"><i class="icon-caret-right"></i>鲜花：节日送鲜花寓意</a></li>
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
    })
});
</script>	
@stop
