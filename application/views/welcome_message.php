
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

    
    <title>AIMs - Tonal Memory Introduction</title>
    <meta name="description" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link href="resources/css/cssBundle.css" rel="stylesheet" />
	<link href="resources/css/intro.css" rel="stylesheet" />
    <script src="resources/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
	
	<!-- Body content goes here -->
		<section class="intro-wrapper">
				<div class="container">
					<div class="row">
                        <!-- When the page loads Audio will auto play -->
                        <audio id="ctrlaudio" controls="controls" runat="server" class="audio-control" autoplay>
                               <source src='resources/audio/introduction/1.wav'></source>
                        </audio>
                    <!-- Audio Play count list -->
                    <!--<div class="ttl-view text-center">
                        <h1>Instructions</h1>
                    </div>  -->
                        <div id="ctrlcount" class="text-center img-view">
                            <img src="resources/img/introduction/12.jpg" alt="" title="" />
                        </div>
                    <!-- Auido Play count list ends here -->
                    
                    <!-- Next and New example Buttons will appear once the Audio will finish -->
                        <!-- Screen to check next or new example -->
                        <div class="intro-screen-01 col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" style="display:none;">
                            <a href="nextbranch" class="next-button col-md-4 col-sm-4 col-xs-4 text-center col-md-offset-1 col-sm-offset-1 col-xs-offset-1">Next</a>
                             <a href="newexample" class="blue-button col-md-5 col-sm-5 col-xs-5 text-center col-md-offset-1 col-sm-offset-1 col-xs-offset-1">New Example</a>
                        </div>
                        <!-- Screen to check next or new example ends -->
                    </div>
				</div>
		</section>
	<!-- Body content ends here -->
	
	<!-- JS files will load here -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="resources/js/intro.js"></script>
	</body>
</html>
