<?=$Header;?>
<!-- Body content goes here -->
<section class="intro-wrapper nextbranch-view">
		<div class="container">
			<div class="row">
				<div class="thankyou-view">
					<h1>
						You have completed the AIMS Tonal Memory exercise. You correctly answered <span><?=$CorrectAns;?></span> of the <span><?=$NoOfQtsAttempted;?></span> items.
					</h1>
					<h2 class="color-white">
						This indicates that you have <span class="color:"><?=$Grade;?></span> Tonal Memory ability. 
					</h2>
					<p class="color-white" style="font-size:24px; padding:10px 0;">Thank you for your effort!</p>
					<p class="color-white" style="font-size:24px; padding:10px 0;">Continue with any unfinished work..</p>
				</div>
            </div>
		</div>
</section>
<!-- Body content ends here -->
<!-- JS files will load here -->
<script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function(){
			$.ajax({
				'type'		: 'POST',
				'url'		: strBaseURL+'thankyou/logout', 
				'ajax' 		: true,
				'data' 		: {},
				'success' 	: function(response){ window.location.href = strBaseURL; },
				'failure' 	: function(){}
			});
		}, 10000);
	});
</script>
<?=$Footer;?>