<article>
<header>
	<a href="javascript:;" class="logo">
		<img src="/vstyle/imgs/logo.png" width="100%" />
	</a>
</header>
<section class="container">

	<a href="javascript:;">
		<img src="/vstyle/imgs/guide.jpg" width="100%" />
	</a>

	<div class="guideInfo">
		按"+"按钮，推送您的地址信息<br />
		即可获得您附近的Berluti专卖店位置
	</div>

</section>
</article>

<script type="text/javascript">

var telElement = document.getElementById("tel");
var telU_Element = telElement.getElementsByTagName("u")[0];
var tel = telU_Element.innerHTML.replace(/\s/ig,'');
telElement.setAttribute("href","tel:" + tel);

</script>