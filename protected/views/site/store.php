<article>
<header>
	<a href="javascript:;" class="logo">
		<img src="/vstyle/imgs/logo.png" width="100%" />
	</a>
</header>
<section class="container">
	<div class="info">
		<h1><?php echo $store['name']?></h1>
		<ul>
			<li>
				<span>营业时间</span>
				<p><?php echo $store['open']?></p>
			</li>
			<li>
				<span>
					地址
				</span>
				<p>
					<?php echo $store['address']?>
				</p>
			</li>
			<li>
				<span>
					联系方式 
				</span>
				<p>
					<a href="javascript:;" id="tel"> 
						<u>
						<?php echo $store['telphone']?>
						</u>
					</a>
				</p>
			</li>
			
		</ul>
	</div>
	
	<a href="javascript:;">
		<img src="<?php echo $store['mapUrl']?>" width="100%" />
	</a>
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