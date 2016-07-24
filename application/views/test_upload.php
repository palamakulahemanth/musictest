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
		<link href="https://www.aimstesting.org/css/cssBundle?v=nmShNSQWGROX0g2mT43BGvYbmvwuhR1RZ1UlxPfS7HA1" rel="stylesheet" />
		<link href="resources/css/admin.css" rel="stylesheet" />
		<script src="https://www.aimstesting.org/js/vendor/modernizr-2.6.2.min.js"></script>
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
					<li><a href="#">Users List</a></li>
					<li><a href="#">Test Result</a></li>
					<li class="active"><a href="#">Upload Test Item</a></li>
					<li class="pull-right"><a href="#">Log Out</a></li>
				  </ul>
				</div><!--/.nav-collapse -->
			  </div>
			</nav>
			<!-- Header ends here -->
			<!-- Body Content goes here -->
				<section class="adminDashboardView">
					<div class="UserListView container">
						<form role="form" class="col-m-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
						<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="uploadFile">Item No:</label>
										<input type="text" class="form-control" placeholder="Item Number" placeholder="please enter Item Number" />
									  </div>
								</div>
								
						  </div>
						  <div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="uploadFile">Please Upload Audio:</label>
										<input type="file" class="form-control" id="uploadFile" />
									  </div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									 <div class="form-group">
									<label for="email">Choose Options count to show:</label>
									<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								  </div>
								</div>
						  </div>
						  <div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									 <div class="form-group">
									<label for="email">Choose correct Answer:</label>
									<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								  </div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="form-group">
										<label for="uploadFile">Test Level :</label>
										<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
									  </div>
								</div>
						  </div>
							<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<button type="submit" class="btn btn-primary pull-right">SAVE</button>
						  </div>
						  </div>
						</form>
						<div class="testupload-data-view">
							<table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
								<thead>
									<tr>
										<th width="10%">Item No</th>
										<th width="15%">Audio</th>
										<th width="10%">Options Count</th>
										<th width="10%">Acual Answer</th>
										<th width="10%">Test Level</th>
										<th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Test Item 1</td>
										<td>row_Item_1.wav</td>
										<td>3</td>
										<td>1</td>
										<td>3</td>
										<td><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Edit</a> <a href="javascript:void(0)" class="delete-btn">Delete</a></td>
									</tr>
									<tr>
										<td>Test Item 2</td>
										<td>row_Item_2.wav</td>
										<td>5</td>
										<td>2</td>
										<td>5</td>
										<td><a href="javascript:void(0)">Edit</a> <a href="javascript:void(0)" class="delete-btn">Delete</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</section>
			<!-- Body Content ends here -->
		<!-- Admin Dashboard ends here -->
		
		<!-- JS files will load here -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Edit Item Test No 1</h4>
				  </div>
				  <div class="modal-body">
						<form role="form" >
						<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="uploadFile">Item No:</label>
										<input type="text" class="form-control" placeholder="Item Number" value="Item Test 01" />
									  </div>
								</div>
								
						  </div>
						  <div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="uploadFile">Please Upload Audio:</label>
										<input type="file" class="form-control" id="uploadFile" />
									  </div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									 <div class="form-group">
									<label for="email">Choose Options count to show:</label>
									<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								  </div>
								</div>
						  </div>
						  <div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									 <div class="form-group">
									<label for="email">Choose correct Answer:</label>
									<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								  </div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="form-group">
										<label for="uploadFile">Test Level :</label>
										<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
									  </div>
								</div>
						  </div>
							
						</form>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				  </div>
				</div>
			  </div>
			</div>
			
			<script type="text/javascript">
				$('document').ready(function(){
					$('.delete-btn').each(function(){
						$(this).on('click', function(){
							$(this).parent().parent().remove();
						});
					});
					
				});
			</script>
	</body>
</html>