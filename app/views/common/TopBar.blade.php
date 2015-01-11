<div class="page_top">
	<div class="layout clearfix">
		<ul class="pull-left" id="loginbar">
		<?php 
		if (Auth::check())
		{?>
		<li>济南鲜花礼品网，欢迎您</li><li><a class="dropdown-toggle" data-toggle="dropdown" href="#">[<?php echo Auth::user()->username; ?>]<span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="/help">个人中心</a></li>
			<li><a href="/auth/logout">注销</a>
		</ul></li>
		<?php
		}
		else
			echo '<li>欢迎来到济南鲜花礼品网，请<a href="/signIn">登录</a>或<a href="/signUp">注册</a></li>';
		?>
		</ul>
		<ul class="pull-right">
			<li><a href="/order">我的订单</a></li>
			<li><a href="/repay">在线补款</a></li>
			<li>
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">客户服务<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="/help" target="_blank">帮助中心</a></li>
					<li><a href="/postSale" target="_blank" rel="nofollow">售后服务</a></li>
					<li><a href="/online" target="_blank" rel="nofollow">在线客服</a></li>
				</ul>
			</li>
			<li><a href="javascript:void(0);" onclick="AddFavorite('济南鲜花网',location.href)">收藏本站</a></li>
		</ul>
	</div>
</div>