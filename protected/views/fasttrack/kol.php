<script type="text/javascript">
	<?php
		if (isset($_GET['v'])) 
			$version = intval($_GET['v']);
		else 
			$version = $this->v;
	?>
	var weekId = "<?php echo $version; ?>";
</script>

<div class="section">
	<div class="menu">
		<ul>
			<li><a href="/fasttrack/vote"></a></li>
			<li><a href="/fasttrack/video"></a></li>
			<li class="hover"></li>
			<li><a href="/fasttrack/pro"></a></li>
		</ul>
		<img src="/vstyle/fasttrack/img/micon.png" width="100%" class="opacity0">
	</div>

	<!-- personal -->
	<div class="pageCon" id="personal">
		<div class="personalCon ycenter">
			<ul>
				<li class="nopadding">
					<a href="/fasttrack/koldetailed"></a>
					<div class="personalInfo">
						<img src="/vstyle/fasttrack/img/m0.png" width="100%">
						<div class="pInfo ycenter">
							<p>
							   赛车手<br>
							   <strong>董荷斌</strong>
							</p>
						</div>
					</div>
				</li>
				
					<?php if($version == "1") {
					?>
						<li>
							<i>他机智超群 <strong>8月8日</strong> 温暖登场</i>
						</li>
					<?php 
					} else {
					?>
						<li class="nopadding">
							<a href="/fasttrack/koldetailed/id/1"></a>
							<div class="personalInfo">
								<img src="/vstyle/fasttrack/img/m1.png" width="100%">
								<div class="pInfo ycenter">
									<p>
									   企业家<br>
									   <strong>陈默</strong>
									</p>
								</div>
							</div>
						</li>
					<?php
					}?>
					
				
				

				<?php if($version >= "3") {
				?>
					<li class="nopadding">
						<a href="/fasttrack/koldetailed/id/2"></a>
						<div class="personalInfo">
							<img src="/vstyle/fasttrack/img/m2.png" width="100%">
							<div class="pInfo ycenter">
								<p>
								   艺人<br>
								   <strong>王博文</strong>
								</p>
							</div>
						</div>
					</li>
		        <?php
				} else {
				?>
					<li>
						<i>他才华俊逸 <strong>8月15日</strong> 翩然来袭</i>
					</li>
				<?php
				}?>
				<!-- <li>
					<a href="/fasttrack/koldetailed/id/2"></a>
					<i>他英俊潇洒 <strong>8月15日</strong> 鲜肉来袭</i>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="section_foot">
		<a href="javascript:;" class="qrcodelink"><img src="/vstyle/fasttrack/img/attention.png" width="100%"></a>
		<img src="/vstyle/fasttrack/img/slogan.png" width="100%">
		<span class="btn">
			<a href="/fasttrack/vote"></a>
			<img src="/vstyle/fasttrack/img/earnBtn.png" width="100%">
		</span>
	</div>

</div>


<script type="text/javascript">
$(function(){
	if($(".personalCon li").length > 3){
    	$(".personalCon").removeClass("ycenter");
    };
})
</script>



