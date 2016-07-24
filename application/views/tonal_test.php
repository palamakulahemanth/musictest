
<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>      <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <title>AIMs - Tonal Memory Test</title>
    <meta name="description" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link href="https://www.aimstesting.org/css/cssBundle?v=nmShNSQWGROX0g2mT43BGvYbmvwuhR1RZ1UlxPfS7HA1" rel="stylesheet" />
    <!--link href="https://www.aimstesting.org/css/theme/font-awesome/css/font-awesome.min.css" rel="stylesheet" / -->
	<link href="resources/css/intro.css" rel="stylesheet" />
    <script src="https://www.aimstesting.org/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
	
	<!-- Body content goes here -->
		<section class="intro-wrapper tonal-test-wrapper">
				<div class="container">
					<div class="row">
					 <!-- When the page loads Audio will auto play -->
                        <audio id="TestAudioData" class="audio-control" controls="controls" runat="server" autoplay>
                               <source src='resources/audio/actual-test/row_1/row_Item_1.wav'></source>
                        </audio>
                    <!-- Audio Play count list -->
						 <h1 class="text-center color-white">Item 1</h1>
						 <!-- Acutal test starts here -->
							<div class="tonal-test-view text-center">
								
								 <div class="option-view">
									 <input id="1" type="radio" name="SelectOption" class="radiobtn-custom-green custom-radio-button" />
									 <label for="1" class="btn-green">1</label>
								 </div>
								 <div class="option-view">
									 <input id="2" type="radio" name="SelectOption" class="radiobtn-custom-green custom-radio-button" />
									 <label for="2" class="btn-green">2</label>
								 </div>
								 <div class="option-view">
									 <input id="3" type="radio" name="SelectOption" class="radiobtn-custom-green custom-radio-button" />
									 <label for="3" class="btn-green">3</label>
								 </div>
							</div>
						 <!-- Actual test ends here -->
							<div class="alert alert-danger text-center col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-3" style="display:none;">
							  <strong>why haven’t you made a response!</strong> 
							</div>
							<div class="alert alert-warning text-center col-md-4 col-sm-4 col-xs-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4" style="display:none;">
							  <strong>Make a guess!</strong> 
							</div>
							<div class="alert alert-success text-center col-md-4 col-sm-4 col-xs-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4" style="display:none;">
							  <strong>The test will be terminated in another 20 seconds.!</strong> 
							</div>
                    </div>
				</div>
		</section>
	<!-- Body content ends here -->
	
	<!-- JS files will load here -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="resources/js/Itemtest.js"></script>
	</body>
</html>
