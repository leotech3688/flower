<div class="globa-header layout clearfix">
	<div class="pull-left header">
		<h1>
			<a title="济南鲜花网 | 滕州鲜花网" href="http://localhost">
			<img alt="济南鲜花网 | 滕州鲜花王" name="logo_index" src="/assets/img/logo.png">
			</a>
		</h1>
	</div>
	<div id="search_box">
		<div class="i-search ld">
			<form action="/Search/searchList.html" method="get">
				<div class="form">
					<input type="text" class="text" name="keywords">
					<input type="submit" value="搜索" class="button">
				</div>
			</form>
		</div>
		<div id="hotwords">
			<strong>热门搜索：</strong>
			<a href="/search?keywords=玫瑰花" target="_blank" style="color:#E4393C">玫瑰花</a>
			<a href="/search?keywords=保鲜花" target="_blank">保鲜花</a>
			<a href="/search?keywords=巧克力" target="_blank">巧克力</a>
			<a href="/search?keywords=情人节" target="_blank">情人节</a>
			<a href="/search?keywords=父亲节" target="_blank">父亲节</a>
			<a href="/search?keywords=七夕" target="_blank">七夕</a>
		</div>
	</div>
	<div id="globa-cart-box">
		<span class="cart-num clearfix">
			<b id="shopping-amount">0</b>
		</span>
		<a href="/cart/" class="cart-link">去购物车结算</a>
		<div class="snCartListWrapper">
			<div class="nocartlist"><b></b>亲，购物车里还没有商品，赶紧去选购吧！</div>
		</div>
	</div>
</div>
<div class="globa-nav">
	<div class="layout">
		<ul id="navitems">
			<li {{{$curr1 or ''}}}><a href="/">首页</a></li>
			<li {{{$curr2 or ''}}}><a href="/product/xianHua">鲜花</a></li>
			<li {{{$curr3 or ''}}}><a href="/product/dangao">蛋糕</a></li>
			<li {{{$curr4 or ''}}}><a href="/product/hualan">花篮</a></li>
			<li {{{$curr5 or ''}}}><a href="/product/qiaokeli">巧克力</a></li>
			<li {{{$curr6 or ''}}}><a href="/product/katong">卡通花束</a></li>
			<li {{{$curr7 or ''}}}><a href="/product/yinyuhe">音乐盒</a></li>
			<li {{{$curr8 or ''}}}><a href="/product/baoxianhua">保鲜花</a></li>
			<li {{{$curr9 or ''}}}><a href="/product/maorongwanju">毛绒玩具</a></li>
			<li {{{$curra or ''}}}><a href="/product/huahui">绿植花卉</a></li>
			<li {{{$currb or ''}}}><a href="/product/xiangzhalihe">香皂花礼盒</a></li>
		</ul>
	</div>
</div>