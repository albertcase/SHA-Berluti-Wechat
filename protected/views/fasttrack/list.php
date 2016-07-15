
<div class="section">
	

	<!-- 投票结果页面 -->
	<div class="pageCon pageSection" id="voteResult" style="display: inline-block;">
		<div class="formCon">
			
			<div class="formText">
				<h2>再次感谢您的参与！</h2>
				
				<h3>投票结果</h3>
			</div>

			<div class="voteResult_con">
				<div class="voteList">
					<ul>
						<li>
							<div class="con">
								<a href="javascript:;">
									<img src="/vstyle/fasttrack/img/avater.png" width="100%">
								</a>
								<em>-%</em>
							</div>
							<img src="/vstyle/fasttrack/img/avater.png" class="opacity0" width="100%">
						</li>
						<li>
							<div class="con">
								<a href="javascript:;">
									<img src="/vstyle/fasttrack/img/avater.png" width="100%">
								</a>
								<em>-%</em>
							</div>
							<img src="/vstyle/fasttrack/img/avater.png" class="opacity0" width="100%">
						</li>
						<li>
							<div class="con">
								<a href="javascript:;">
									<img src="/vstyle/fasttrack/img/avater.png" width="100%">
								</a>
								<em>-%</em>
							</div>
							<img src="/vstyle/fasttrack/img/avater.png" class="opacity0" width="100%">
						</li>
					</ul>

					<div class="listline">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>

		</div>
		
		<div class="section_foot">
			<img src="/vstyle/fasttrack/img/shareTips.png" width="100%">
		</div>

	</div>


	
</div>


<script type="text/javascript">
	var jssdkPushData = {
			"week": weekId,
		},
		voteNum = [];

		pfun.ajaxFun("POST", "/api/getballot", jssdkPushData, "json", function(data){

			if(data.code != 1){
				pfun.formErrorTips(data.msg);
			}
			$.map(data.msg, function(v, k){
				voteNum.push(parseFloat(v));
				console.log(voteNum);
				voteNum.sort(function(a,b){return a-b;});
			});

			$(".voteList li").eq(0).find("em").html(voteNum[1]+"%");
			$(".voteList li").eq(1).find("em").html(voteNum[3]+"%");
			$(".voteList li").eq(2).find("em").html(voteNum[2]+"%");

		});


</script>











