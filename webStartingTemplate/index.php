<?php

?>

<!DOCTYPE html>
<html>
<head>
	<?php require_once('includes/headers.php')?> 
</head>
<body>
	<!-- All our code. write here   -->
	<div class="header">
		<?php require_once('includes/navbar.php')?>
	</div>	
	<div class="sidebar">
		<?php require_once('includes/sidebar.php')?>	
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Available courses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-folder-open fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Campuses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-graduation-cap fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Users</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-user fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student analysis</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-line-chart fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>	
				</div>
			</div>
		</div>
	</div>

	<?php require_once('includes/scripts.php')?>
	<!-- slide 202	 -->
</body>
</html>