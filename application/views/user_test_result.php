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
		 <title>AIMs - Admin Dashboard</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link href="<?=base_url();?>resources/css/cssBundle.css" rel="stylesheet" />
		<link href="<?=base_url();?>resources/css/admin.css" rel="stylesheet" />
    	<script src="<?=base_url();?>resources/js/modernizr-2.6.2.min.js"></script>
		</head>
	<body>
		
		<!-- Admin Dashboard Starts here -->
			<!-- Header goes here -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
			  <div class="container">
				<div class="navbar-header">
				  <a class="navbar-brand" href="#">Dashboard</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				  <ul class="nav navbar-nav" style="float:none;">
					<li><a href="<?=base_url();?>userslist">Users List</a></li>
					<li class="active"><a href="<?=base_url();?>usertestresult">Test Result</a></li>
					<li><a href="<?=base_url();?>uploadquestions">Upload Test Item</a></li>
					<li class="pull-right"><a href="#">Log Out</a></li>
				  </ul>
				</div><!--/.nav-collapse -->
			  </div>
			</nav>
			<!-- Header ends here -->
			<!-- Body Content goes here -->
				<section class="adminDashboardView">
					<div class="UserListView">
							<table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
								<thead>
								<tr>
									<th width="3%">Male</th>
									<th width="3%">Age</th>
									<th width="10%">File Number</th>
									<th width="84%">RESPONSES</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td valign="middle">Ravi</td>
									<td valign="middle">24</td>
									<td valign="middle">D-2016-2016</td>
									<td>
										<table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
											<tr>
												<td width="10%">Correct Answer</td>
												<td width="2.3%">2</td>
												<td width="2.3%">3</td>
												<td width="2.3%">3</td>
												<td width="2.3%">3</td>
												<td width="2.3%">3</td>
												<td width="2.3%">2</td>
												<td width="2.3%">4</td>
												<td width="2.3%">3</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">2</td>
												<td width="2.3%">4</td>
												<td width="2.3%">3</td>
												<td width="2.3%">2</td>
												<td width="2.3%">4</td>
												<td width="2.3%">5</td>
												<td width="2.3%">5</td>
												<td width="2.3%">4</td>
												<td width="2.3%">3</td>
												<td width="2.3%">3</td>
												<td width="2.3%">5</td>
												<td width="2.3%">5</td>
												<td width="2.3%">2</td>
												<td width="2.3%">4</td>
												<td width="2.3%">3</td>
												<td width="2.3%">5</td>
												<td width="2.3%">5</td>
												<td width="2.3%">1</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">6</td>
												<td width="2.3%">3</td>
												<td width="2.3%">6</td>
												<td width="2.3%">4</td>
												<td width="2.3%">2</td>
											</tr>
										</table>
										<table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
											<tr>
												<td width="10%">Responses</td>
												<td width="2.3%">3</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">3</td>
												<td width="2.3%">3</td>
												<td width="2.3%">1</td>
												<td width="2.3%">2</td>
												<td width="2.3%">3</td>
												<td width="2.3%">4</td>
												<td width="2.3%">5</td>
												<td width="2.3%">1</td>
												<td width="2.3%">2</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">3</td>
												<td width="2.3%">5</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">6</td>
												<td width="2.3%">5</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">4</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">5</td>
												<td width="2.3%">6</td>
												<td width="2.3%">1</td>
												<td width="2.3%">6</td>
												<td width="2.3%">1</td>
											</tr>
										</table>
										<table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
											<tr>
												<td width="10%">Points</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
											</tr>
										</table>
										<table width="100%" cellpadding="0" cellspacing="0">
											<tr>
												<td align="right" style="padding:10px;">Item Score : <strong>28 (35 questions)</strong></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td valign="middle">Male</td>
									<td valign="middle">24</td>
									<td valign="middle">D-2016-2016</td>
									<td>
										<table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
											<tr>
												<td width="10%">Correct Answer</td>
												<td width="2.3%">2</td>
												<td width="2.3%">3</td>
												<td width="2.3%">3</td>
												<td width="2.3%">3</td>
												<td width="2.3%">3</td>
												<td width="2.3%">2</td>
												<td width="2.3%">4</td>
												<td width="2.3%">3</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">2</td>
												<td width="2.3%">4</td>
												<td width="2.3%">3</td>
												<td width="2.3%">2</td>
												<td width="2.3%">4</td>
												<td width="2.3%">5</td>
												<td width="2.3%">5</td>
												<td width="2.3%">4</td>
												<td width="2.3%">3</td>
												<td width="2.3%">3</td>
												<td width="2.3%">5</td>
												<td width="2.3%">5</td>
												<td width="2.3%">2</td>
												<td width="2.3%">4</td>
												<td width="2.3%">3</td>
												<td width="2.3%">5</td>
												<td width="2.3%">5</td>
												<td width="2.3%">1</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">6</td>
												<td width="2.3%">3</td>
												<td width="2.3%">6</td>
												<td width="2.3%">4</td>
												<td width="2.3%">2</td>
											</tr>
										</table>
										<table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
											<tr>
												<td width="10%">Responses</td>
												<td width="2.3%">3</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">3</td>
												<td width="2.3%">3</td>
												<td width="2.3%">1</td>
												<td width="2.3%">2</td>
												<td width="2.3%">3</td>
												<td width="2.3%">4</td>
												<td width="2.3%">5</td>
												<td width="2.3%">1</td>
												<td width="2.3%">2</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">3</td>
												<td width="2.3%">5</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">6</td>
												<td width="2.3%">5</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">4</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">2</td>
												<td width="2.3%">1</td>
												<td width="2.3%">5</td>
												<td width="2.3%">6</td>
												<td width="2.3%">1</td>
												<td width="2.3%">6</td>
												<td width="2.3%">1</td>
											</tr>
										</table>
										<table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
											<tr>
												<td width="10%">Points</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
												<td width="2.3%">0</td>
												<td width="2.3%">1</td>
											</tr>
										</table>
										<table width="100%" cellpadding="0" cellspacing="0">
											<tr>
												<td align="right" style="padding:10px;">Item Score : <strong>25 (35 questions)</strong></td>
											</tr>
										</table>
									</td>
								</tr>
								</tbody>
							</table>
					</div>
				</section>
			<!-- Body Content ends here -->
		<!-- Admin Dashboard ends here -->
		
		<!-- JS files will load here -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	</body>
</html>