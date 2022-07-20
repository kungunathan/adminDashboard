<?php
	$prompt ="";
	require_once('logics\dbconnection.php');
	$querySubscriber = mysqli_query($conn, "SELECT * FROM contactus WHERE no ='".$_GET['id']."' ");

	while($fetchSubscriber = mysqli_fetch_array($querySubscriber))
	{
		$id = $fetchSubscriber['no'];
		$email =  $fetchSubscriber['email'];
		$created_at =  $fetchSubscriber['created_at'];
	}

	//update user records
	if(isset($_POST['updateSubscriber']) )
	{
		//fetch form data
		$email =  $_POST['email'];

		//update records
		$updateQuery = mysqli_query($conn,
		"UPDATE subscribers SET email='$email'
		WHERE no='".$_GET['id']."'");

		if($updateQuery)
		{
			$prompt= "Data captured";
            header('location:subscribers.php');
		}
		else
		{
			$prompt= "Error occured";
		}
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Edit subscriber: </h4>
							<span><?php echo $prompt?></span>
                        </div>
						<div class="card-body">
							<!-- form design -->
							<form action="edit-Subscriber.php?id=<?php echo $id?>" method = "POST">
								<div class="row">
									<div class="col-lg-6">
										<label for="email" class="form-label"><b>E-mail Address:</b></label>
										<input type="email" name = "email" class="form-control" value = "<?php echo $email?>">
									</div>
								</div>
								
								<div class="row">
									<div class="col-lg-6">
										<button type="submit" name ="updateSubscriber" class = "btn btn-primary mt-5">Update Subscriber</button>
									</div>
								</div>
								</div>
							</form>
						</div>
                    </div>
                </div>
            </div>
		</div>
	</div>

	<?php require_once('includes/scripts.php')?>
	<!-- slide 202	 -->
</body>
</html>