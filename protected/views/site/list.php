<article>
<header>
	<a href="javascript:;" class="logo">
		<img src="/vstyle/imgs/logo.png" width="100%" />
	</a>
</header>
<section class="container">

	
	<div class="b_type_overview">
		<img src="/vstyle/imgs/overview_title.png" width="100%" />
		
		<ul>
			<li>
				<a href="">北京国贸专卖店</a>
			</li>
			<li>
				<a href="">北京新光天地</a>
			</li>
			<li>
				<a href="">上海恒隆广场专卖店 </a>
			</li>
		</ul>
		
	</div>

</section>
</article>
<!-- <footer>
	<div class="con">
		<em>店铺电话 </em>
		<a href="javascript:;" id="tel"> 
			<img src="/vstyle/imgs/tel.png" />
			<u><?php echo $store['telphone']?></u> 
		</a>
	</div>
	<img src="/vstyle/imgs/footer.jpg" width="100%" class="opacity" />
</footer> -->

<script type="text/javascript">

var telElement = document.getElementById("tel");
var telU_Element = telElement.getElementsByTagName("u")[0];
var tel = telU_Element.innerHTML.replace(/\s/ig,'');
telElement.setAttribute("href","tel:" + tel);

</script>