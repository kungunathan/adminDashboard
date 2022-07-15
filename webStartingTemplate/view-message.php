<?php
	//database connection
	require_once('logics/dbconnection.php');
	$sqlFetchMessage = mysqli_query($conn,
		"SELECT * FROM contactus WHERE no='".$_GET['id']."'");
	while($fetchMessageRecords=mysqli_fetch_array($sqlFetchMessage))
	{
		$firstname = $fetchMessageRecords['firstname'];
        $lastname = $fetchMessageRecords['lastname'];
		$phone = $fetchMessageRecords['phonenumber'];
		$email = $fetchMessageRecords['email'];
		$message = $fetchMessageRecords['message'];
		$time = $fetchMessageRecords['created_at'];
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
                            <h4 class="card-title" >Detailed information</h4>
                        </div>
                        <div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">First name: <span class ="float-right badge-primary"><?php echo $firstname?></span></li>
								<li class="list-group-item">Last Name: <span class ="float-right badge-primary"><?php echo $lastname?></span></li>
								<li class="list-group-item">Phone Number: <span class ="float-right badge-secondary"><?php echo $phone?></span></li>
                                <li class="list-group-item">Email: <span class ="float-right badge-primary"><?php echo $email?></span></li>
								<li class="list-group-item">Message: <span class ="float-right badge-info"><?php echo $message?></span></li>
								<li class="list-group-item">Messaged at: <span class ="float-right badge-success"><?php echo $time?></span></li>	
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