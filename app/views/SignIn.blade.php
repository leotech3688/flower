@extends('layouts.Base')
@section('title') 登录-济南鲜花网站 @parent @stop
@section('description') 济南鲜花网站济南鲜花网站济南鲜花网站济南鲜花网站  @stop
@section('keywords') 济南鲜花网站，济南鲜花网站，济南鲜花网站，济南鲜花网站  @stop

@section('beforeStyle')
    {{ style('bootstrap-3.0.3') }}
    {{ style('font-awesome') }}
	{{ style('jquery.validator') }}
@parent @stop
@section('beforeScript')
	<!--[if IE 7]>
	    {{ style('font-awesome-ie7') }}
	<![endif]-->
	<!--[if lt IE 9]>
	    {{ script('html5shiv') }}
	   	{{ script('respond') }}
	<![endif]-->
@parent @stop
@section('style')
body{font-family: "微软雅黑","microsoft yahei","宋体",Tahoma,Verdana; font-size:12px; line-height: 1.5em;}
    .login-wrap { position: relative; height: 665px; padding: 20px 0 35px; background: #F8F8F8; }
    .w950 {width: 950px; margin: 0 auto;}
    .login-box{margin-top: 52px; position: relative;}
    .login-box .login-from{width: 380px; border: 1px solid #EEE; background: #FFF; position: relative;}
    .login-from .title{line-height: 50px; font-family: "Microsoft YaHei"; font-size: 16px; font-weight: 700; color: #666; margin: 0;}
    .entry{ padding: 0 40px;}
    .entry .input-group-addon{border-radius: 0;}
    .entry .form-control{border-radius: 0;}
    .entry .btn{width: 100%; font-weight: 700; margin-top: 10px; margin-bottom: 15px;}
    .login_other {line-height: 24px; margin-bottom: 15px; color: #999; }
    .login_other p{padding: 0; margin: 0; line-height: 1.5em;}
    .login_other a{color: #666; padding: 0 5px;}
    .line-aleft {border-left: solid 1px #DDD; }
    .free-regist{position:absolute;right:0;bottom:-31px;background:#e8e8e8;width:115px;height:32px;text-align:center;line-height:32px;-moz-border-radius:0 0 3px 3px; -webkit-border-radius:0 0 3px 3px;border-radius: 0 0 3px 3px;}
    .free-regist a:link,.free-regist  a:visited {color:#ffffff;}
    .free-regist a:hover{text-decoration:none;}
    .free-regist span{text-align:center;font-size:14px;background:#7cbe56;width:114px;height:32px;display:block;color:#FFF;-moz-border-radius:0 0 3px 3px; -webkit-border-radius:0 0 3px 3px;border-radius:0 0 3px 3px;}
    .free-regist span:hover{background:#89c964}
    .entry .alert{padding: 10px;}
@parent @stop

@section('body')
<div class="login-wrap">
	<div class="w950">
		<div class="header">
			<h1>
				<a title="维纳斯鲜花礼品网" href="http://123.56.101.160">
					<img alt="维纳斯鲜花礼品网" name="Logon_index_denglu009" src="http://www.vnasi.com/statics/images/logo/vnasi.com.logo.png?v=20140101">
				</a>
			</h1>
		</div>
		<div class="login-box clearfix">
			<div class="pull-left">
				<a href="http://www.vnasi.com" target="_blank">
					<img class="" alt="" id="Logon_index_image_denglu005" src="/assets/img/login_mian.png">
				</a>
			</div>
			<div class="login-from pull-right">
				<div class="entry">
					<form id="LoginForm" name="LoginForm" action="" method="post" data-validator-option="{theme:'yellow_right'}" >
						<input type="hidden" name="ReturnUrl" value="http://www.vnasi.com/" />
						<h2 class="title">会员登录</h2>
						<div class="alert alert-success" style="display: none;" role="alert"></div>
						<div class="alert alert-info" style="display: none;" role="alert"></div>
						<div class="alert alert-danger" style="display: none;" role="alert"></div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</div>
								<input class="form-control" type="text" name="account" data-rule="用户名:required;account;" placeholder="邮箱/用户名/已验证手机">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="icon-key"></i></div>
								<input class="form-control" type="password" name="password" data-rule="登录密码:required;password;" placeholder="有效的登录密码">
							</div>
						</div>
						<div>
							<label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> 自动登录</label>
							<a class="pull-right" href="/Findpwd/index.html">忘记登录密码？</a>
						</div>
						<button type="submit" class="btn btn-danger">确认登录</button>
					</form>
				</div>
			</div>
			<div class="free-regist"><span><a href="/signUp">免费注册&gt;&gt;</a></span></div>
		</div>
	</div>
</div>

@section('AfterScript')
	{{ script('jquery-1.10.2') }}
	{{ script('bootstrap-3.0.3') }}
	{{ script('jquery.validator') }}
	{{ script('zh_CN') }}
	<script type="text/javascript">    
		$(function(){
			$('#LoginForm').validator({
		        valid: function(form){
		            var me = this; me.holdSubmit();
		            $.ajax({ url: '/auth/signIn', type: 'post', data: $(form).serialize(),
		                dataType: 'json',
		                success: function(redata){
		                    me.holdSubmit(false);
		                    if(redata.status == 1){
		                      $("div.alert-danger").hide();
		                      $("div.alert-success").html(redata.info).show().delay(2000).fadeOut(500);
		                      var jumpUrl = redata.url ? redata.url : undefined;
		                      if(jumpUrl != undefined) setTimeout(function(){ window.location.href=jumpUrl; },2000);
		                    }else{
		                      $("div.alert-success").hide();
		                      $("div.alert-danger").html(redata.info).show();
		                    }
		                }
		            });
		        }
		    });
		})
	</script>
@parent @stop
@stop
