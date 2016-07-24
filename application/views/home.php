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
     <title>AIMs - Tonal Memory Registration Form</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link href="https://www.aimstesting.org/css/cssBundle?v=nmShNSQWGROX0g2mT43BGvYbmvwuhR1RZ1UlxPfS7HA1" rel="stylesheet" />
	<link href="resources/css/intro.css" rel="stylesheet" />
    <script src="https://www.aimstesting.org/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<div class="intro-wrapper registrer-wrapper">
	<!-- Registration Block goes here -->
         <form class="form-horizontal col-lg-4 col-md-5 col-sm-6 col-xs-6" role="form" id="ToneRegisterForm" action="home/register" method="POST">
         		<?php
         			print_r($this->session->flashdata['Errors']);
         		?>
                <!--h2>Registration Form</h2-->
                <div class="form-group">
                    <label for="sleFirstName" class="col-sm-4 control-label">First Name : </label>
                    <div class="col-sm-8">
                        <input type="text" id="sleFirstName" placeholder="Full Name" class="form-control" maxlength="30" minlength="5" name="firstname" autofocus />
                    </div>
                </div>
                <div class="form-group">
                    <label for="sleLastName" class="col-sm-4 control-label">Last Name : </label>
                    <div class="col-sm-8">
                         <input type="text" id="sleLastName" placeholder="Last Name" class="form-control" maxlength="30" minlength="5" name="lastname" />
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="sleAge" class="col-sm-4 control-label">Age in Years : </label>
                    <div class="col-sm-8">
                        <input type="text" id="sleAge" class="form-control" maxlength="3" name="age" />
                    </div>
                </div>
            
                <div class="form-group">
                    <label class="control-label col-sm-4">Gender : </label>
                    <input type="hidden" name="gender" id="hdnGender">
                    <div class="col-sm-6">
                        <div class="row">
                             <div class="col-sm-5">
                                <label class="radio-inline">
                                    <input type="radio" id="rdMaleGender" value="Male" name="sex" onclick="$('#hdnGender').val($(this).val());">Male
                                </label>
                            </div>
                            <div class="col-sm-5">
                                <label class="radio-inline">
                                    <input type="radio" id="rdFeMaleGender" name="sex" value="Female" onclick="$('#hdnGender').val($(this).val());">Female
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
               <div class="form-group">
                    <label for="sleFileNumber" class="col-sm-4 control-label">File Number :</label>
                    <div class="col-sm-8">
                         <input type="text" id="sleFileNumber" placeholder="File Number" class="form-control" name="filenumber" />
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-4">
                        <button disabled="disabled" type="submit" id="RegisterBtn" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
    	<!-- Registration Block ends here -->
		</div>
		<!-- JS files will load here -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="resources/js/formValidator.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#ToneRegisterForm').bootstrapValidator({
					message: 'This value is not valid',
					fields: {
						firstname: {
							validators: {
								notEmpty: {
									message: 'The firstname is required and can\'t be empty'
								},
								stringLength: {
									min: 5,
									max: 30,
									message: 'The firstname must be more than 6 and less than 30 characters long'
								},
								regexp: {
									regexp: /^[a-zA-Z0-9_\.]+$/,
									message: 'The firstname can only consist of alphabetical, number, dot and underscore'
								}
							}
						},
					   lastname: {
							validators: {
								notEmpty: {
									message: 'The lastname is required and can\'t be empty'
								},
								stringLength: {
									min: 5,
									max: 30,
									message: 'The lastname must be more than 6 and less than 30 characters long'
								},
								regexp: {
									regexp: /^[a-zA-Z0-9_\.]+$/,
									message: 'The lastname can only consist of alphabetical, number, dot and underscore'
								}
							}
						},
						age: {
							validators: {
								notEmpty: {
									message: 'The age is required and can\'t be empty'
								},
								stringLength: {
									min: 1,
									max: 3,
									message: 'The age must be more than 1 and less than 3 characters long'
								},
								regexp: {
									regexp: /^[0-9]+$/,
									message: 'The age can only consist of number'
								}
							}
						},
						gender: {
							validators: {
								notEmpty: {
									message: 'The gender is required and can\'t be empty'
								}
							}
						},
						fileNumber: {
							validators: {
								notEmpty: {
									message: 'The file Number is required and can\'t be empty'
								},
								
								regexp: {
									regexp: /^[a-zA-Z0-9-]+$/,
									message: 'The File Number can only consist of alphabetical, number, Hypen'
								}
							}
						},
					  
						
					}
				});
			});
		</script>
	</body>
</html>