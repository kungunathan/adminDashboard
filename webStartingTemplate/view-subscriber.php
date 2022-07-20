<?php
	//database connection
	require_once('logics/dbconnection.php');
	$sqlFetchSubscriber = mysqli_query($conn,
		"SELECT * FROM subscribers WHERE no='".$_GET['id']."'");
	while($fetchSubscriberRecords=mysqli_fetch_array($sqlFetchSubscriber))
	{
		$email = $fetchSubscriberRecords['email'];
		$time = $fetchSubscriberRecords['created_at'];
	}
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title" >Extra information</h4>
                        </div>
                        <div class="card-body">
							<ul class="list-group">
                                <li class="list-group-item">Email: <span class ="float-right badge-secondary"><?php echo $email?></span></li>
								<li class="list-group-item">Subscriberd at: <span class ="float-right badge-info"><?php echo $time?></span></li>	
							</ul>  
                        </div>
                    </div>
                </div>
            </div>
			
		</div>
	</div>

	<?php require_once('includes/scripts.php')?>
</body>
</html>