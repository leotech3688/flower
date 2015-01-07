@extends('layouts.Base')
@section('title') 注册提示-济南鲜花网站 @parent @stop
@section('description') 中国专业的鲜花速递服务商,维纳斯鲜花,鲜花特卖场,天天特价鲜花,免费送花上门,为你传递真挚祝福!  @stop
@section('keywords') 鲜花,鲜花速递,鲜花礼品,鲜花快递,鲜花网上订购,鲜花配送,鲜花蛋糕,鲜花网上定购配送  @stop
@section('beforeStyle')
    {{ style('bootstrap-3.0.3') }}
@parent @stop
@section('beforeScript')
<!--[if lt IE 9]>
    {{ script('html5shiv') }}
   	{{ script('respond') }}
<![endif]-->
@parent @stop
@section('style')
body{font-family: "微软雅黑","microsoft yahei","宋体",Tahoma,Verdana; font-size:12px; line-height: 1.5em;}
.panel{min-width: 300px; max-width: 500px; margin: 0 auto; margin-top: 15%;}
.panel .panel-heading{padding: 8px 15px; }
.panel .panel-footer{background: #F8F8F8; padding: 6px 15px;}
@parent @stop
@section('body')
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;信息提示</h3>
	</div>
	<div class="panel-body">
		<p style="color:green">你已经登录，正在转入用户中心！</p>
	</div>
	<div class="panel-footer"><b id="wait">3</b>秒后自动跳转，<a id="href" href="/portal">如果您的浏览器没有自动跳转，请点击这里 </a></div>
</div>
@section('AfterScript')
	{{ script('jquery-1.10.2') }}
	{{ script('bootstrap-3.0.3') }}
	{{ script('jquery.validator') }}
	{{ script('zh_CN') }}
	<script type="text/javascript">	(function(){
		var wait = document.getElementById('wait'),href = document.getElementById('href').href;
		var interval = setInterval(function(){
			var time = --wait.innerHTML;
			if(time <= 0) {
				location.href = href;
				clearInterval(interval);
			};
		}, 3000);
	})();
</script>
@parent @stop
@stop