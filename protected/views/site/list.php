<article>
<header>
	<a href="javascript:;" class="logo">
		<img src="/vstyle/imgs/logo.png" width="100%" />
	</a>
</header>
<section class="container">

	
	<div class="b_type_overview">
		<img src="/vstyle/imgs/overview_title.png" width="100%" />
		<?php foreach ($storeList as $key => $value) { ?>
		<h2><?php echo $key;?></h2>
		<ul>
			<?php for ($i = 0; $i < count($storeList[$key]); $i++) { ?>
			<li>
				<a href="/site/store?id=<?php echo $storeList[$key][$i]['id']?>"><?php echo $storeList[$key][$i]['name']?></a>
			</li>
			<?php } ?>
		</ul>
		<?php } ?>
	</div>

</section>
</article>
<script type="text/javascript">

var telElement = document.getElementById("tel");
var telU_Element = telElement.getElementsByTagName("u")[0];
var tel = telU_Element.innerHTML.replace(/\s/ig,'');
telElement.setAttribute("href","tel:" + tel);

</script>