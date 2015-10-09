<article>
<header>
	<a href="javascript:;" class="logo">
		<img src="/vstyle/imgs/logo.png" width="100%" />
	</a>
</header>
<section class="container">
	<div class="info">
		<h1>北京国贸专卖店</h1>
		<ul>
			<li>
				<span>
					地址 : 
				</span>
				<p>
					北京市建国门外大街1号<br />国贸商城区域1, L129A店铺
				</p>
			</li>
			<li>
				<span>营业时间 : </span>
				<p>周一至周日10:00-21:30</p>
			</li>
		</ul>
	</div>
	
	<a href="javascript:;">
		<img src="/vstyle/imgs/map.jpg" width="100%" />
	</a>
</section>
</article>
<footer>
	<div class="con">
		<em>店铺电话 </em>
		<a href="javascript:;" id="tel"> 
			<img src="/vstyle/imgs/tel.png" />
			<u>(+86) 10 6505 1300</u> 
		</a>
	</div>
	<img src="/vstyle/imgs/footer.jpg" width="100%" class="opacity" />
</footer>

<script type="text/javascript">

var telElement = document.getElementById("tel");
var telU_Element = telElement.getElementsByTagName("u")[0];
var tel = telU_Element.innerHTML.replace(/\s/ig,'');
telElement.setAttribute("href","tel:" + tel);

</script>