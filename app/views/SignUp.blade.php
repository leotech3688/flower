@extends('layouts.Base')
@section('title') 注册-济南鲜花网站 @parent @stop
@section('description') 济南鲜花网站济南鲜花网站济南鲜花网站济南鲜花网站  @stop
@section('keywords') 济南鲜花网站，济南鲜花网站，济南鲜花网站，济南鲜花网站  @stop

@section('beforeStyle')
    {{ style('bootstrap-3.0.3') }}
	{{ style('jquery.validator') }}
@parent @stop
@section('beforeScript')
<!--[if lt IE 9]>
    {{ script('html5shiv') }}
   	{{ script('respond') }}
<![endif]-->
@parent @stop
@section('style')
	  *{margin: 0; padding: 0;}
      body{font-family: "微软雅黑","microsoft yahei","宋体",Tahoma,Verdana; font-size:12px; line-height: 1.5em; background: #F8F8F8;}
      a{color: #666;}
      a:hover{color: #F60;}
      input{vertical-align: middle;}
      .red{color: red;}
      .layout{width: 950px; margin: 0 auto;}
      .page_top{width:100%;border-bottom:1px solid #eee;line-height:30px; background: #F7F7F7; color: #666;}
      .page_top .layout{height: 30px; line-height: 30px; background: #F7F7F7;}
      .page_top a{margin: 0 5px;}
      .page_top ul{list-style: none;}
      .page_top ul li{float: left; padding: 0 8px 0 9px; position: relative;}
      .page_top ul li s{position: absolute; top: 9px; left: 0; width: 0; height: 12px; border-left: 1px solid #DDD; overflow: hidden;}
      .page_top .dropdown-menu{min-width: 80px; margin-top: 0; border: 1px solid #DDD; border-radius:0 0 4px 4px; font-size: 12px;}
      .page_top .dropdown-menu li{float: none; padding: 0;}
      .page_top .dropdown-menu li a{padding: 3px 10px;}
      .header{padding: 10px 0;}
      .header h1 span.title{ margin-left: 5px; padding-left:10px; border-left: 1px solid #EEE; font-size: 0.6em; font-weight: 700; color: #666; }
      .w180{width: 180px;}
      .regist_box{border:1px solid #EEE; padding: 30px 25px; margin:0 auto; background:#FFF; margin-top: 25px;}
      .regform{width:600px; border-right:1px solid #dbdbdb; float:left; padding-right:30px;}
      .regot{padding-left:30px; float:left; border-left:1px solid #FFF; border: 1px }

      .regform .form-group{margin-bottom: 20px;}
      .regform .control-label{padding-right: 0; width: 120px;}
      .regform .col-sm-2{padding-left: 0; padding-right: 0;}
      .regform .form-control{border-radius: 0; height: 38px; width: 250px; border-color: #CCC;}
      .regform .item-ifo .i-name {background:url(/statics/images/one4.jpg) no-repeat scroll 0 0 transparent; height:16px; top:9px; width:16px;}
      .regform .item-ifo .i-pass {background: url(/statics/images/one5.jpg) no-repeat scroll 0 0 transparent; height:19px; top:11px; width:14px;}
      
      .regform .btn-regist{*zoom:1; display:inline-block; border:0 none; font-size:14px; font-weight:bold; text-align:center; color:#fff; overflow:hidden; background: #E4393C; width: 250px; height:36px;}

      .regot h2{margin:0; padding: 0; font-size: 16px; font-weight: 500;}
      .regot .other-list {overflow:hidden; padding-top:10px;}
      .regot .other-list a {display: block; width: 186px; height: 44px; line-height: 44px; font-size: 14px; color: #fff; padding-left: 70px; background: url(/statics/images/btn-other.png) no-repeat; margin-bottom:10px; _margin:10px 0;}
      .regot .other-list .sina {background-position: -748px 0;}
      .regot .other-list .qq {background-position: 0 0;}
      .regot .other-list .ren {background-position: -187px 0;}
      .regot .other-list .baidu {background-position: -374px 0;}
      .regot .other-list .qihu360 {background-position: -561px 0;}
      .regot .login-xsd {padding-top:10px; border-top:1px dashed #ddd; margin-top:5px;}
      .regot .btn-login {display: block;width: 91px;height: 38px;line-height: 38px; margin-top: 10px;font-size: 14px;color: #845d01;text-align: center; background: url(/statics/images/btn-other.png) no-repeat -935px 0;font-weight: bold;text-shadow: 1px 1px 0 #fbf4c5;}
@parent @stop

@section('body')
<div class="page_top">
	<div class="layout clearfix">
		<div class="pull-left">欢迎来到维纳斯鲜花礼品网，请<a href="/signIn">登录</a> 或 <a href="/signUp">注册</a>
		</div>
		<ul class="pull-right">
			<li><a href="/Order/olist.html">我的订单</a></li>
			<li><s></s><a class="dropdown-toggle" data-toggle="dropdown" href="#">客户服务<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="http://www.vnasi.com/help.html" target="_blank">帮助中心</a></li>
					<li><a href="http://www.vnasi.com/help/shouhouzhengce.html" target="_blank" rel="nofollow">售后服务</a></li>
					<li><a href="http://dx.zoosnet.net/lrserver/LR/ChatWin.aspx?id=LZS40862955" target="_blank" rel="nofollow">在线客服</a></li>
				</ul>
			</li>
			<li><s></s><a href="javascript:addToFavorite()" rel="nofollow"><i class="glyphicon glyphicon-star"></i>收藏本站</a></li>
			<li><s></s><a href="http://cart.vnasi.com/Cart/cart.html"><i class="glyphicon glyphicon-shopping-cart"></i>购物车</a></li>
		</ul>
	</div>
</div>
<div class="layout">
	<div class="header">
		<h1>
			<a title="维纳斯鲜花礼品网" href="http://www.vnasi.com">
				<img alt="维纳斯鲜花礼品网" name="Logon_index_denglu009" src="http://www.vnasi.com/statics/images/logo/vnasi.com.logo.png?v=20140101">
			</a>
			<span class="title">欢迎新用户注册</span>
		</h1>
	</div>
	<div class="regist_box clearfix">
		<div class="regform">
			<form class="form-horizontal" name="regUserForm" id="regUserForm" action="/auth/create" method="post" >
				<div class="form-group">
					<label class="col-sm-2 control-label"><b class="red">#</b>账户名称：</label>
					<div class="col-sm-8"><input class="form-control" type="text" name="regName" data-rule="用户名:required;username;remote[/auth/signup/check]" placeholder="邮箱/用户名/手机号">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"><b class="red">#</b>设置密码：</label>
					<div class="col-sm-8"><input class="form-control" type="password" name="password" data-rule="密码:required;password;">
					</div>
				</div>
				<div class="form-group" style="margin-bottom:15px;">
					<label class="col-sm-2 control-label"><b class="red">#</b>确认密码：</label>
					<div class="col-sm-8"><input class="form-control" type="password" name="repassword" data-rule="确认密码:required;match(password);">
					</div>
				</div>
				<div class="form-group" style="margin-bottom:15px;">	
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-8 checkbox">
						<label><input type="checkbox" checked="checked" id="readme"> 我已阅读并同意<a href="#" class="blue">《维纳斯鲜花礼品网用户注册协议》</a></label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-8">
						<button type="submit" class="btn btn-danger btn-sm w180">立即注册</button>
					</div>
				</div>
			</form>
		</div>
		<div class="regot">
			<div class="login-xsd">
				<p>已有维纳斯鲜花礼品网帐号</p>
				<a href="/index" class="btn btn-warning btn-sm w180">登录</a>
			</div>
		</div>
	</div>
</div>
@section('AfterScript')
	{{ script('jquery-1.10.2') }}
	{{ script('bootstrap-3.0.3') }}
	{{ script('jquery.validator') }}
	{{ script('zh_CN') }}
@parent @stop
@stop