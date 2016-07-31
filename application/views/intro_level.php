<?=$Header;?>	
<?php
	$arrAvailableLevels = $this->config->item('AvailableLevels'); 

	$intNextLevel = $CurrentLevel+1;

	$hasNextLevel = false;

	if(in_array($intNextLevel, $arrAvailableLevels))
	{
		$hasNextLevel = true;
	}
?>
<?php
	if($CurrentLevel == 4)
	{
?>
	Level four content goes Here
<?php
	}elseif($CurrentLevel == 5){
?>
	Level five content goes here
<?php
	}elseif($CurrentLevel == 6){
?>
	Level six content goes here.
<?php
	}
?>

	<!-- Body content goes here -->
		<section class="intro-wrapper">
				<div class="container">
					test
					<div class="row NextButtonWrapper">
						<a href="<?=base_url();?>tonaltest/?level=<?=$CurrentLevel;?>">NEXT</a>
                    </div>
				</div>
		</section>
	<!-- Body content ends here -->
	
	<!-- JS files will load here -->
	<script type="text/javascript" src="<?=base_url();?>resources/js/intro_level.js"></script>
<?=$Footer;?>
