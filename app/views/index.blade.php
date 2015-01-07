@extends('layouts.product') @section('title') 雷奥官网首页 @parent @stop
@section('aascript') if(!document.URL.match(new
RegExp('^http:\\/\\/(v|music)\\.baidu\\.com'))){ (function() {
Function.prototype.bind = function() { var fn = this, args =
Array.prototype.slice.call(arguments), obj = args.shift(); return
function() { return fn.apply(obj,
args.concat(Array.prototype.slice.call(arguments))); }; }; function A()
{} A.prototype = { rules: { 'youku_loader': { 'find':
/^http:\/\/static\.youku\.com\/.*(loader|player_.*)(_taobao)?\.swf/,
'replace': 'http://swf.adtchrome.com/loader.swf' }, 'youku_out': {
'find': /^http:\/\/player\.youku\.com\/player\.php\/.*sid\/(.*)/,
'replace': 'http://swf.adtchrome.com/loader.swf?VideoIDS=$1' },
'pps_pps': { 'find':
/^http:\/\/www\.iqiyi\.com\/player\/cupid\/common\/pps_flvplay_s\.swf/,
'replace': 'http://swf.adtchrome.com/pps_20140420.swf' }, 'iqiyi_1': {
'find': /^http:\/\/www\.iqiyi\.com\/player\/cupid\/common\/.+\.swf$/,
'replace': 'http://swf.adtchrome.com/iqiyi_20140624.swf' }, 'iqiyi_2': {
'find': /^http:\/\/www\.iqiyi\.com\/common\/flashplayer\/\d+\/.+\.swf$/,
'replace': 'http://swf.adtchrome.com/iqiyi_20140624.swf' }, 'ku6': {
'find':
/^http:\/\/player\.ku6cdn\.com\/default\/.*\/\d+\/(v|player|loader)\.swf/,
'replace': 'http://swf.adtchrome.com/ku6_20140420.swf' }, 'ku6_topic': {
'find': /^http:\/\/player\.ku6\.com\/inside\/(.*)\/v\.swf/, 'replace':
'http://swf.adtchrome.com/ku6_20140420.swf?vid=$1' }, 'sohu': { 'find':
/^http:\/\/tv\.sohu\.com\/upload\/swf(\/p2p)?\/\d+\/Main\.swf/,
'replace': 'http://www.adtchrome.com/sohu/sohu_20150104.swf' },
'sohu_share': { 'find': /^http:\/\/share\.vrs\.sohu\.com\/my\/v\.swf&/,
'replace': 'http://www.adtchrome.com/sohu/sohu_20150104.swf?' },
'sohu_sogou' : { 'find':
/^http:\/\/share\.vrs\.sohu\.com\/(\d+)\/v\.swf/, 'replace':
'http://www.adtchrome.com/sohu/sohu_20150104.swf?vid=$1' }, 'letv': {
'find':
/^http:\/\/player\.letvcdn\.com\/p\/.*\/newplayer\/LetvPlayer\.swf/,
'replace': 'http://swf.adtchrome.com/letv_20141117.swf' }, 'letv_topic':
{ 'find':
/^http:\/\/player\.hz\.letv\.com\/hzplayer\.swf\/v_list=zhuanti/,
'replace': 'http://swf.adtchrome.com/letv_20141117.swf' },
'letv_duowan': { 'find':
/^http:\/\/assets\.dwstatic\.com\/video\/vpp\.swf/, 'replace':
'http://yuntv.letv.com/bcloud.swf' } }, _done: null, get done() {
if(!this._done) { this._done = new Array(); } return this._done; },
addAnimations: function() { var style = document.createElement('style');
style.type = 'text/css'; style.innerHTML = 'object,embed{\
-webkit-animation-duration:.001s;-webkit-animation-name:playerInserted;\
-ms-animation-duration:.001s;-ms-animation-name:playerInserted;\
-o-animation-duration:.001s;-o-animation-name:playerInserted;\
animation-duration:.001s;animation-name:playerInserted;}\
@-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
@-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
@-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
@keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}';
document.getElementsByTagName('head')[0].appendChild(style); },
animationsHandler: function(e) { if(e.animationName ===
'playerInserted') { this.replace(e.target); } }, replace: function(elem)
{ if(this.done.indexOf(elem) != -1) return; this.done.push(elem); var
player = elem.data || elem.src; if(!player) return; var i, find, replace
= false; for(i in this.rules) { find = this.rules[i]['find'];
if(find.test(player)) { replace = this.rules[i]['replace'];
if('function' === typeof this.rules[i]['preHandle']) {
this.rules[i]['preHandle'].bind(this, elem, find, replace, player)();
}else{ this.reallyReplace.bind(this, elem, find, replace)(); } break; }
} }, reallyReplace: function(elem, find, replace) { elem.data &&
(elem.data = elem.data.replace(find, replace)) || elem.src && ((elem.src
= elem.src.replace(find, replace)) && (elem.style.display = 'block'));
var b = elem.querySelector("param[name='movie']");
this.reloadPlugin(elem); }, reloadPlugin: function(elem) { var
nextSibling = elem.nextSibling; var parentNode = elem.parentNode;
parentNode.removeChild(elem); var newElem = elem.cloneNode(true);
this.done.push(newElem); if(nextSibling) {
parentNode.insertBefore(newElem, nextSibling); } else {
parentNode.appendChild(newElem); } }, init: function() { var handler =
this.animationsHandler.bind(this);
document.body.addEventListener('webkitAnimationStart', handler, false);
document.body.addEventListener('msAnimationStart', handler, false);
document.body.addEventListener('oAnimationStart', handler, false);
document.body.addEventListener('animationstart', handler, false);
this.addAnimations(); } }; new A().init(); })(); } // 20140730 (function
cnbeta() { if (document.URL.indexOf('cnbeta.com') >= 0) { var elms =
document.body.querySelectorAll("p>embed");
Array.prototype.forEach.call(elms, function(elm) { elm.style.marginLeft
= "0px"; }); } })(); // 20140730 (function kill_baidu() { if
(document.URL.indexOf('baidu.com') >= 0) { var elms =
document.body.querySelectorAll("#content_left>div[style='display:block
!important'], #content_left>table[style='display:table !important']");
Array.prototype.forEach.call(elms, function(elm) {
elm.removeAttribute("style"); }); } window.setTimeout(kill_baidu, 400);
})(); // 20140928 (function v_baidu() { if
(document.URL.match(/http:\/\/baidu.*fr=/)) { var child =
document.body.querySelector('div.bd>script');
child.parentNode.removeChild(child); advTimer.last = 1; advTimer.cur =
1; advTimer.onbeforestop(); } })(); // 20140922 (function kill_360() {
if (document.URL.indexOf('so.com') >= 0) {
document.getElementById("e_idea_pp").style.display = none; } })();
@parent @stop 
@section('container')
<div class="fullSlide">
	<div class="bd">
		<ul>
			<li _src="url(/assets/img/1.jpg)"
				style="background: #FFDD89 center 0 no-repeat;"><a target="_blank"
				title="爱在激情圣诞节" href="http://www.vnasi.com/special/shengdanjie.html"></a>
			</li>
			<li _src="url(/assets/img/2.jpg)"
				style="background: #FFDD89 center 0 no-repeat;"><a target="_blank"
				title="温情时刻怎么少了费力罗，爱她就送费力罗。"
				href="http://www.vnasi.com/Goods/QiaoKeLi-6-0-0-0-1.html"></a></li>
			<li _src="url(/assets/img/3.jpg)"
				style="background: #F3ECD0 center 0 no-repeat;"><a target="_blank"
				title="99朵精品玫瑰，爱意久久，限时抢购中"
				href="http://www.vnasi.com/Goods/flower_express-0-0-0-0-19-1.html"></a>
			</li>
			<li _src="url(/assets/img/4.jpg)"
				style="background: #F5E4C6 center 0 no-repeat;"><a target="_blank"
				title="创意礼品，欧式雕花旋转木马" href="http://www.vnasi.com/Goods/MusicBox"></a>
			</li>
			<li _src="url(/assets/img/5.jpg)"
				style="background: #FFFFFF center 0 no-repeat;"><a target="_blank"
				title="爱恒久远，永不凋谢" href="http://www.vnasi.com/Goods/BaoXianHua"></a>
			</li>
			<li _src="url(/assets/img/6.jpg)"
				style="background: #FFF5DC center 0 no-repeat;"><a target="_blank"
				title="幸福时刻，表白时刻，让爱时刻保鲜"
				href="http://www.vnasi.com/Goods/flower_express"></a></li>
		</ul>
	</div>
	<div class="hd">
		<ul></ul>
	</div>
	<span class="prev"></span> <span class="next"></span>
</div>
<div class="main mt10 clearfix">
	<div class="home_top_order">
		<div class="title">最新订单</div>
		<div class="title_ico"></div>
		<ul class="neworderlist" id="neworderlist" style="margin-top: 0px;">
			<li>刚刚网友订购：<a class="ftx-04" href="http://www.vnasi.com/GF02241.html">美丽的诺言(11枝红玫瑰，满天星、黄莺间插，随机赠送两只可爱小公仔，白色卷边纸内衬，粉色卷边纸多层圆形包装，粉色法式结束扎，花儿说，为了你我不愿随风而去；花儿说，珍藏我们的感情就是珍藏记忆；花儿说，珍藏我们的记忆就是珍藏甜蜜！，)</a>，送往上海|上海市|浦东新区
			</li>
			<li>刚刚网友订购：<a class="ftx-04"
				href="http://www.vnasi.com/GBX05541-1.html">永生花 保鲜花 厄瓜多尔巨形玫瑰花
					高档透明盖方盒装(1朵蓝色厄瓜多尔巨形玫瑰永生花，银色方形透明盖高档礼盒装)</a>，送往广东|广州市|海珠区
			</li>
			<li>刚刚网友订购：<a class="ftx-04" href="http://www.vnasi.com/GF02518.html">动心(33朵红玫瑰心形造型，绿叶外围，随机赠送两个公仔，白色纱网包裹浅色卷边纸内衬，粉色卷边纸外围心型包装，蝴蝶结束扎，闭上眼睛深深呼吸，遇见你我如此幸运，还记得第一次见你，你是那么的让我心动！，)</a>，送往北京|北京市|东城区
			</li>
			<li>刚刚网友订购：<a class="ftx-04"
				href="http://www.vnasi.com/GBX04673.html">保鲜花 戒指玫瑰 蓝玫瑰()</a>，送往北京|北京市|石景山区
			</li>
			<li>刚刚网友订购：<a class="ftx-04" href="http://www.vnasi.com/GF02388.html">真挚祝福(6枝多头香水百合，黄莺、勿忘我搭配，粉色雪点网纳内衬，紫色瓦楞纸多层圆形包装，紫色雪点网纱束扎，浓浓的情谊与祝福，绵绵的思念与问安，在这美好的日子，愿祝愿随着鲜花带给你。，)</a>，送往上海|上海市|长宁区
			</li>
			<li>刚刚网友订购：<a class="ftx-04" href="http://www.vnasi.com/GF05076.html">爱.等候(19朵精品红玫瑰，加拿大黄莺间插，满天星外围，随机赠送小公仔一个，经典英文纸圆形包装，深红色蝴蝶结束扎，我想爱情，就是相濡以沫的过一生。接纳与磨合，让爱经得起流年。平平淡淡之中的携手与幸福，才更珍贵。，)</a>，送往广东|广州市|越秀区
			</li>
			<li>刚刚网友订购：<a class="ftx-04" href="http://www.vnasi.com/GF02878.html">花香四溢(精选19朵优质橙色郁金香
					粉色粗网单面包装，粉色蝴蝶结束扎，高档方形礼盒装)</a>，送往北京|北京市|海淀区
			</li>
			<li>刚刚网友订购：<a class="ftx-04" href="http://www.vnasi.com/GF02123.html">温情(19枝粉色康乃馨，满天星黄莺间插，白色棉纸内衬，紫色卷边纸外围，母爱就是一副山水画，洗去铅华雕饰，留下清新自然，)</a>，送往辽宁|丹东市|振兴区
			</li>
			<li>刚刚网友订购：<a class="ftx-04" href="http://www.vnasi.com/GF00269.html">随机一对小公仔(随机一对小公仔，随机一对小公仔，随机一对小公仔，)</a>，<a
				class="ftx-04" href="http://www.vnasi.com/GF02407.html">幸福恋人(33枝香槟玫瑰，黄莺、石竹梅（没有可用其它代替）外围，英文纸单面包装，白色、咖啡色丝带和硬网束扎，一路上有你，陪我欢喜陪我优，这份真挚的爱情，我会一辈子的珍惜，)</a>，送往江西|九江市|浔阳区
			</li>
			<li>刚刚网友订购：<a class="ftx-04" href="http://www.vnasi.com/GF02417.html">11枝红玫瑰鲜花2小熊蛋糕组合(11朵精品红玫瑰满天星绿叶点缀另加小熊二只，8寸水果蛋糕（水果为时令水果），紫色棉纸衬里粉红色卷边外围。，生日祝福，)</a>，送往山东|烟台市|芝罘区
			</li>
		</ul>
	</div>
	<div class="home_top_news">
		<div class="title">
			新闻快报<span class="title_ico"></span>
		</div>
		<div class="newslist">
			<ul id="newslist" style="margin-top: 0px;">
				<li><a href="http://www.vnasi.com/News/news_5679.html">2013七夕情人节鲜花订购说明</a></li>
				<li><a href="http://www.vnasi.com/News/news_5818.html">维纳斯鲜花礼品网触屏版上线了</a></li>
				<li><a href="http://www.vnasi.com/News/news_5817.html">维纳斯鲜花工作时间调整通知</a></li>
				<li><a href="http://www.vnasi.com/News/news_5816.html">维纳斯改版通知</a></li>
				<li><a href="http://www.vnasi.com/News/news_5669.html">2014情人节鲜花订购说明</a></li>
			</ul>
		</div>
	</div>
</div>
<ul class="main mt10 clearfix recitems">
	<li class="hrecg hrecg_first hrecgw-490"><a href="#"
		title="33朵 红玫瑰 让爱时刻保鲜"> <img
			src="http://img.vnasi.com/banner/rec_goods_33_rows.jpg">
	</a></li>
	<li class="hrecg hrecgw-490"><a href="#" title="花样保鲜花，让爱永不凋谢!"> <img
			src="http://img.vnasi.com/banner/rec_goods_bapxianhu.jpg">
	</a></li>
	<li class="hrecg hrecgw-b323 hrecg_first"><a href="#"
		title="创立礼品，雕花旋转木马音乐盒"> <img
			src="http://img.vnasi.com/banner/xsd_home_19.jpg">
	</a></li>
	<li class="hrecg hrecgw-b323">
		<div class="hrecg hrecgw-c323 hrecg_first">
			<a href="#" title="粉色桃心毛绒熊，超猛超可爱"> <img
				src="http://img.vnasi.com/banner/xsd_home_21.jpg">
			</a>
		</div>
		<div class="hrecg hrecgw-c323 hrecg_first">
			<a href="#" title="为爱选购"> <img
				src="http://img.vnasi.com/banner/xsd_home_26.jpg">
			</a>
		</div>
	</li>
	<li class="hrecg hrecgw-b323"><a href="#" title="费力罗"> <img
			src="http://img.vnasi.com/banner/xsd_home_23.jpg">
	</a></li>
</ul>
<div class="main hotfloor clearfix">
	<div class="hfleft">
		<div class="title clearfix">
			<i class="ico ico_floor ico_floor_one"></i>
			<h1 class="floor_one">鲜花/保鲜花</h1>
		</div>
		<p class="recgoods">
			<a href="http://www.vnasi.com/Goods/flower_express-0-0-0-0-19-1.html"
				title="99枝精品红玫瑰为爱抢购"> <img
				src="http://img.vnasi.com/banner/xsd_home_39.jpg">
			</a>
		</p>
		<div class="hotgoodstag">
			<p>
				<a href="http://www.vnasi.com/Goods/flower_express" title="">百合花</a>
				<a
					href="http://www.vnasi.com/Goods/flower_express-0-0-0-11-0-1.html"
					title="康乃馨">康乃馨</a> <a
					href="http://www.vnasi.com/Goods/flower_express-0-0-0-6-0-1.html"
					title="红玫瑰">红玫瑰</a> <a
					href="http://www.vnasi.com/Goods/flower_express-0-0-0-7-0-1.html"
					title="粉玫瑰">粉玫瑰</a> <a
					href="http://www.vnasi.com/Goods/flower_express-0-0-0-8-0-1.html"
					title="白玫瑰">白玫瑰</a> <a
					href="http://www.vnasi.com/Goods/flower_express" title="">蓝玫瑰</a> <a
					href="http://www.vnasi.com/Goods/flower_express-0-0-0-9-0-1.html"
					title="香槟玫瑰">香槟玫瑰</a>
			</p>
		</div>
	</div>
	<div class="hfcenter">
		<ul class="ui_tab_box clearfix">
			<li re-data="1fhot" class="curr"><a href="">正在热卖</a></li>
			<li re-data="flower_express"><a>鲜花推荐</a></li>
			<li re-data="BaoXianHua"><a>保鲜花推荐</a></li>
		</ul>
		<dl class="item clearfix">
			<dd>
				<div class="item_cover">
					<a href="/GF01866.html" title="鲜花, 爱你一生一世"> <img
						src="http://img.vnasi.com/attachment/goods/200/201408/53fbebbca0667.jpg">
					</a>
				</div>
				<p>爱你一生一世</p>
				<div class="item_price">
					<span>￥</span>138.00
				</div>
			</dd>
			<dd>
				<div class="item_cover">
					<a href="/GBX04673.html" title="鲜花, 保鲜花 戒指玫瑰 蓝玫瑰"> <img
						src="http://img.vnasi.com/attachment/goods/200/201408/54002c3ed9677.jpg">
					</a>
				</div>
				<p>保鲜花 戒指玫瑰 蓝玫瑰</p>
				<div class="item_price">
					<span>￥</span>59.00
				</div>
			</dd>
			<dd class="last">
				<div class="item_cover">
					<a href="/GF02241.html" title="鲜花, 美丽的诺言"> <img
						src="http://img.vnasi.com/attachment/goods/200/201408/53fe8c751c0d1.jpg">
					</a>
				</div>
				<p>美丽的诺言</p>
				<div class="item_price">
					<span>￥</span>168.00
				</div>
			</dd>
			<dd>
				<div class="item_cover">
					<a href="/GF00232.html" title="鲜花, 我的爱你懂得"> <img
						src="http://img.vnasi.com/attachment/goods/200/201408/53f5554e0458b.jpg">
					</a>
				</div>
				<p>我的爱你懂得</p>
				<div class="item_price">
					<span>￥</span>149.00
				</div>
			</dd>
			<dd>
				<div class="item_cover">
					<a href="/GF01871.html" title="鲜花, 相思未了"> <img
						src="http://img.vnasi.com/attachment/goods/200/201408/53fbed66a68a3.jpg">
					</a>
				</div>
				<p>相思未了</p>
				<div class="item_price">
					<span>￥</span>338.00
				</div>
			</dd>
			<dd class="last">
				<div class="item_cover">
					<a href="/GF00777.html" title="鲜花, 无悔的爱"> <img
						src="http://img.vnasi.com/attachment/goods/200/201408/53f6aa3da5bf1.jpg">
					</a>
				</div>
				<p>无悔的爱</p>
				<div class="item_price">
					<span>￥</span>545.00
				</div>
			</dd>
		</dl>
	</div>
	<div class="hfright">
		<ul class="ui_tab_box clearfix">
			<li class="curr"><a href="">畅销花排行</a></li>
		</ul>
		<ul class="itemrank">
			<li class="curr">
				<div class="hotrank_ico hotrank_ico_1"></div>
				<div class="rankimg">
					<a href="/GF01866.html" title="爱你一生一世"> <img
						src="http://img.vnasi.com/attachment/goods/100/201408/53fbebbca0667.jpg"
						width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GF01866.html" title="爱你一生一世">爱你一生一世</a>
				</div>
				<div class="rankprice">￥138.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_2"></div>
				<div class="rankimg">
					<a href="/GBX04673.html" title="保鲜花 戒指玫瑰 蓝玫瑰"> <img
						src="http://img.vnasi.com/attachment/goods/100/201408/54002c3ed9677.jpg"
						width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GBX04673.html" title="保鲜花 戒指玫瑰 蓝玫瑰">保鲜花 戒指玫瑰 蓝玫瑰</a>
				</div>
				<div class="rankprice">￥59.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_3"></div>
				<div class="rankimg">
					<a href="/GF02241.html" title="美丽的诺言"> <img
						src="http://img.vnasi.com/attachment/goods/100/201408/53fe8c751c0d1.jpg"
						width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GF02241.html" title="美丽的诺言">美丽的诺言</a>
				</div>
				<div class="rankprice">￥168.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_4"></div>
				<div class="rankimg">
					<a href="/GF00232.html" title="我的爱你懂得"> <img
						src="http://img.vnasi.com/attachment/goods/100/201408/53f5554e0458b.jpg"
						width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GF00232.html" title="我的爱你懂得">我的爱你懂得</a>
				</div>
				<div class="rankprice">￥149.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_5"></div>
				<div class="rankimg">
					<a href="/GF01871.html" title="相思未了"> <img
						src="http://img.vnasi.com/attachment/goods/100/201408/53fbed66a68a3.jpg"
						width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GF01871.html" title="相思未了">相思未了</a>
				</div>
				<div class="rankprice">￥338.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_6"></div>
				<div class="rankimg">
					<a href="/GF00777.html" title="无悔的爱"> <img
						src="http://img.vnasi.com/attachment/goods/100/201408/53f6aa3da5bf1.jpg"
						width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GF00777.html" title="无悔的爱">无悔的爱</a>
				</div>
				<div class="rankprice">￥545.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_7"></div>
				<div class="rankimg">
					<a href="/GF01466.html" title="相依相随"> <img
						src="http://img.vnasi.com/attachment/goods/100/201407/20111171726636800.jpg"
						width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GF01466.html" title="相依相随">相依相随</a>
				</div>
				<div class="rankprice">￥166.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_8"></div>
				<div class="rankimg">
					<a href="/GF01714.html" title="情人拥吻"> <img
						src="http://img.vnasi.com/attachment/goods/100/201408/53fae5fdcff17.jpg"
						width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GF01714.html" title="情人拥吻">情人拥吻</a>
				</div>
				<div class="rankprice">￥155.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_9"></div>
				<div class="rankimg">
					<a href="/GF02180.html" title="不能失去你"> <img
						src="http://img.vnasi.com/attachment/goods/100/201408/53fd97f1de366.jpg"
						width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GF02180.html" title="不能失去你">不能失去你</a>
				</div>
				<div class="rankprice">￥728.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_10"></div>
				<div class="rankimg">
					<a href="/GF02242.html" title="梦幻之恋"> <img
						src="http://img.vnasi.com/attachment/goods/100/201408/53fe8cc27e0d2.jpg"
						width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GF02242.html" title="梦幻之恋">梦幻之恋</a>
				</div>
				<div class="rankprice">￥168.00</div>
			</li>
		</ul>
	</div>
</div>
<div class="main hotfloor clearfix mt10">
	<div class="hfleft">
		<div class="title clearfix">
			<i class="ico ico_floor ico_floor_two"></i>
			<h1 class="floor_two">蛋糕/巧克力</h1>
		</div>
		<p class="recgoods">
			<a href="http://www.vnasi.com/Goods/QiaoKeLi-6-0-0-0-1.html" title="爱她就送她">
				<img src="http://img.vnasi.com/banner/xsd_home_71.jpg">
			</a>
		</p>
		<div class="hotgoodstag">
			<p>
				<a href="http://www.vnasi.com/Goods/QiaoKeLi-6-0-0-0-1.html" title="">费力罗</a>
				<a href="http://www.vnasi.com/Goods/QiaoKeLi" title="">德芙</a>
				<a href="http://www.vnasi.com/Goods/QiaoKeLi" title="">好时</a><br>
				<a href="http://www.vnasi.com/Goods/food_dangao-4-0-0-0-1.html" title="">元祖蛋糕</a>
				<a href="http://www.vnasi.com/Goods/food_dangao-5-0-0-0-1.html" title="">好利来蛋糕</a>
			</p>
		</div>
	</div>
	<div class="hfcenter">
		<ul class="ui_tab_box clearfix">
			<li re-data="2fhot" class="curr"><a href="">正在热卖</a></li>
			<li re-data="DanGao"><a>蛋糕推荐</a></li>
			<li re-data="QiaoKeLi"><a>巧克力推荐</a></li>
		</ul>
		<dl class="item clearfix">
			<dd>
				<div class="item_cover">
					<a href="/GQ04591.html" title="德芙心语巧克力"><img src="http://img.vnasi.com/attachment/goods/200/201408/54002b373a70e.jpg"></a>
				</div>
				<p>德芙心语巧克力</p>
				<div class="item_price"><span>￥</span>118.00</div>
			</dd>
			<dd>
				<div class="item_cover">
					<a href="/GD04396-1.html" title="幸福无限">
						<img src="http://img.vnasi.com/attachment/goods/200/201407/200952716563857956.jpg">
					</a>
				</div>
				<p>幸福无限</p>
				<div class="item_price"><span>￥</span>178.00</div>
			</dd>
			<dd class="last">
				<div class="item_cover">
					<a href="/GD04390-1.html" title="天使之翼"><img src="http://img.vnasi.com/attachment/goods/200/201407/20095271564946851.jpg"></a>
				</div>
				<p>天使之翼</p>
				<div class="item_price"><span>￥</span>186.00</div>
			</dd>
			<dd>
				<div class="item_cover">
					<a href="/GD04392-1.html" title="美丽梦想">
						<img src="http://img.vnasi.com/attachment/goods/200/201407/200981315514053760.jpg">
					</a>
				</div>
				<p>美丽梦想</p>
				<div class="item_price"><span>￥</span>178.00</div>
			</dd>
			<dd>
				<div class="item_cover">
					<a href="/GQ04604.html" title="巧克力：12颗费列罗咖啡色方形盒装">
						<img src="http://img.vnasi.com/attachment/goods/200/201408/5400248b68242.jpg">
					</a>
				</div>
				<p>巧克力：12颗费列罗咖啡色方形盒装</p>
				<div class="item_price"><span>￥</span>119.00</div>
			</dd>
			<dd class="last">
				<div class="item_cover">
					<a href="/GQ04725.html" title="巧克力：27颗费列罗红色波点心型盒装">
						<img src="http://img.vnasi.com/attachment/goods/200/201408/540023e575210.jpg">
					</a>
				</div>
				<p>巧克力：27颗费列罗红色波点心型盒装</p>
				<div class="item_price"><span>￥</span>228.00</div>
			</dd>
		</dl>
	</div>
	<div class="hfright">
		<ul class="ui_tab_box clearfix">
			<li class="curr"><a href="">食品畅销排行</a></li>
		</ul>
		<ul class="itemrank">
			<li class="curr">
				<div class="hotrank_ico hotrank_ico_1"></div>
				<div class="rankimg">
					<a href="/GQ04591.html" title="德芙心语巧克力">
						<img src="http://img.vnasi.com/attachment/goods/100/201408/54002b373a70e.jpg" width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GQ04591.html" title="德芙心语巧克力">德芙心语巧克力</a>
				</div>
				<div class="rankprice">￥118.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_2"></div>
				<div class="rankimg">
					<a href="/GD04396-4.html" title="幸福无限">
						<img src="http://img.vnasi.com/attachment/goods/100/201407/200952716563857956.jpg" width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GD04396-4.html" title="幸福无限">幸福无限</a>
				</div>
				<div class="rankprice">￥338.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_3"></div>
				<div class="rankimg">
					<a href="/GD04396-1.html" title="幸福无限">
						<img src="http://img.vnasi.com/attachment/goods/100/201407/200952716563857956.jpg" width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GD04396-1.html" title="幸福无限">幸福无限</a>
				</div>
				<div class="rankprice">￥178.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_4"></div>
				<div class="rankimg">
					<a href="/GD04396-2.html" title="幸福无限">
						<img src="http://img.vnasi.com/attachment/goods/100/201407/200952716563857956.jpg" width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GD04396-2.html" title="幸福无限">幸福无限</a>
				</div>
				<div class="rankprice">￥219.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_5"></div>
				<div class="rankimg">
					<a href="/GD04396-3.html" title="幸福无限">
						<img src="http://img.vnasi.com/attachment/goods/100/201407/200952716563857956.jpg" width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GD04396-3.html" title="幸福无限">幸福无限</a>
				</div>
				<div class="rankprice">￥258.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_6"></div>
				<div class="rankimg">
					<a href="/GD04390-4.html" title="天使之翼">
						<img src="http://img.vnasi.com/attachment/goods/100/201407/20095271564946851.jpg" width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GD04390-4.html" title="天使之翼">天使之翼</a>
				</div>
				<div class="rankprice">￥337.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_7"></div>
				<div class="rankimg">
					<a href="/GD04390-1.html" title="天使之翼">
						<img src="http://img.vnasi.com/attachment/goods/100/201407/20095271564946851.jpg" width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GD04390-1.html" title="天使之翼">天使之翼</a>
				</div>
				<div class="rankprice">￥186.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_8"></div>
				<div class="rankimg">
					<a href="/GD04390-2.html" title="天使之翼">
						<img src="http://img.vnasi.com/attachment/goods/100/201407/20095271564946851.jpg" width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GD04390-2.html" title="天使之翼">天使之翼</a>
				</div>
				<div class="rankprice">￥226.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_9"></div>
				<div class="rankimg">
					<a href="/GD04390-3.html" title="天使之翼">
						<img src="http://img.vnasi.com/attachment/goods/100/201407/20095271564946851.jpg" width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GD04390-3.html" title="天使之翼">天使之翼</a>
				</div>
				<div class="rankprice">￥286.00</div>
			</li>
			<li>
				<div class="hotrank_ico hotrank_ico_10"></div>
				<div class="rankimg">
					<a href="/GD04392-4.html" title="美丽梦想">
						<img src="http://img.vnasi.com/attachment/goods/100/201407/200981315514053760.jpg" width="60" height="60">
					</a>
				</div>
				<div class="rankname">
					<a href="/GD04392-4.html" title="美丽梦想">美丽梦想</a>
				</div>
				<div class="rankprice">￥337.00</div>
			</li>
		</ul>
	</div>
</div>
<div class="main mt10">
	<a href="http://www.vnasi.com/Goods/QiaoKeLi-6-0-0-0-1.html" title="费力罗">
		<img src="http://img.vnasi.com/banner/foot_tuiguang.jpg">
	</a>
</div>
<script type="text/javascript">
$(function(){
	setInterval('AutoScroll("#newslist")',3000);
	setInterval('AutoScroll("#neworderlist")',2000);
	$("ul.itemrank > li").mouseover(function(){
		$(this).addClass('curr').siblings().removeClass('curr');
	})
})
jQuery(".fullSlide").hover(function() {
    jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
},
function() {
    jQuery(this).find(".prev,.next").fadeOut()
});
jQuery(".fullSlide").slide({
    titCell: ".hd ul",
    mainCell: ".bd ul",
    effect: "fold",
    autoPlay: true,
    autoPage: true,
    trigger: "click",
    startFun: function(i) {
        var curLi = jQuery(".fullSlide .bd li").eq(i);
        if ( !! curLi.attr("_src")) {
            curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
        }
    }
});
function AutoScroll(obj){
	var lineH = $(obj).find("li:first").height();
	$(obj).animate({
		marginTop:"-"+lineH+"px"
	},500,function(){
		$(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
	});
}
</script>
@stop

