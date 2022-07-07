<?php
	require_once('logics/dbconnection.php');
	$queryUser = mysqli_query($conn, "SELECT * FROM enrollment WHERE no ='".$_GET['id']."'  ");

	while($fetchUser = mysqli_fetch_array($queryUser))
	{
		$fullname = $fetchUser['fullname'];
		$phonenumber =  $fetchUser['phonenumber'];
		$email =  $fetchUser['email'];
		$gender = $fetchUser['gender'];
		$course =  $fetchUser['course'];
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
                            <h4>Edit Student: </h4>
                        </div>
						<div class="card-body">
							<form action="" method = "">
								<div class="row">
									<div class="col-lg-6">
										<label for="fullname" class="form-label"><b>Full Name:</b></label>
										<input type="text" name = "fullname" class="form-control" value = "<?php echo $fullname?>">
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
										<label for="gender" class="form-label"><b>What's your gender?</b></label>
										<select class="form-control" aria-label="Default select example" name = "gender">
											<option selected><?php echo $gender?></option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
								</div>
								<div class="row">
									<label for="course" class= "form-label"><b>What's your preffered course?</b></label>
										<select name = "course" class="form-control" aria-label="Default select example">
											<option selected><?php echo $course?></option>
											<option value=">Web Design">Web Design</option>
											<option value="Data analysis">Data analysis</option>
											<option value="Cyber security">Cyber security</option>
										</select>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<button type="submit" name ="updateRecords" class = "btn btn-primary mt-5">Update Records</button>
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