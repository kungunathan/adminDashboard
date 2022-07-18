<?php
	$prompt ="";
	require_once('logics\dbconnection.php');
	$queryMessage = mysqli_query($conn, "SELECT * FROM contactus WHERE no ='".$_GET['id']."' ");

	while($fetchMessage = mysqli_fetch_array($queryMessage))
	{
		$id = $fetchMessage['no'];
		$firstname = $fetchMessage['firstname'];
        $lastname = $fetchMessage['lastname'];
		$phonenumber =  $fetchMessage['phonenumber'];
		$email =  $fetchMessage['email'];
		$message = $fetchMessage['message'];
		$created_at =  $fetchMessage['created_at'];
	}

	//update user records
	if(isset($_POST['updateMessage']) )
	{
		//fetch form data
		$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
		$phonenumber =  $_POST['phonenumber'];
		$email =  $_POST['email'];
		$message = $_POST['message'];

		//update records
		$updateQuery = mysqli_query($conn,
		"UPDATE contactus SET firstname='$firstname', lastname='$lastname', phonenumber='$phonenumber', email='$email', message= '$message'
		WHERE no='".$_GET['id']."'");

		if($updateQuery)
		{
			$prompt= "Data captured";
            header('location:contactus.php');
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
                            <h4>Edit Message: </h4>
							<span><?php echo $prompt?></span>
                        </div>
						<div class="card-body">
							<!-- form design -->
							<form action="edit-message.php?id=<?php echo $id?>" method = "POST">
								<div class="row">
									<div class="col-lg-6">
										<label for="firstname" class="form-label"><b>First Name:</b></label>
										<input type="text" name = "firstname" class="form-control" value = "<?php echo $firstname?>">
									</div>
                                </div>
                                <div class="row">
									<div class="col-lg-6">
										<label for="lastname" class="form-label"><b>Last Name:</b></label>
										<input type="text" name = "lastname" class="form-control" value = "<?php echo $lastname?>">
									</div>
                                </div>
								<div class="row">
									<div class="col-lg-6">
										<label for="phonenumber" class="form-label"><b>Phone Number:</b></label>
										<input type="tel" name = "phonenumber" class="form-control" value = "<?php echo $phonenumber?>">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<label for="email" class="form-label"><b>E-mail Address:</b></label>
										<input type="email" name = "email" class="form-control" value = "<?php echo $email?>">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<label for="message" class="form-label"><b>Message:</b></label>
										<input type="text" name = "message" class="form-control" value = "<?php echo $message?>">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<button type="submit" name ="updateMessage" class = "btn btn-primary mt-5">Update Message</button>
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