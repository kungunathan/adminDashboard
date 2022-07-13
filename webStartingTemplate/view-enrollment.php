<?php
	//database connection
	require_once('logics/dbconnection.php');
	$sqlFetchStudent = mysqli_query($conn,
		"SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
	while($fetchStudentRecords=mysqli_fetch_array($sqlFetchStudent))
	{
		$fullname = $fetchStudentRecords['fullname'];
		$phone = $fetchStudentRecords['phonenumber'];
		$email = $fetchStudentRecords['email'];
		$gender =  $fetchStudentRecords['gender'];
		$course = $fetchStudentRecords['course'];
		$time = $fetchStudentRecords['created_at'];

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
                            <h4 class="card-title" >Personal Information.</h4>
                        </div>
                        <div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">Full name: <span class ="float-right badge-primary"><?php echo $fullname?></span></li>
								<li class="list-group-item">Email: <span class ="float-right badge-secondary"><?php echo $email?></span></li>
								<li class="list-group-item">Phone Number: <span class ="float-right badge-danger"><?php echo $phone?></span></li>	
							</ul>  
                        </div>
                    </div>
                </div>
				<div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title" >Other Information.</h4>
                        </div>
                        <div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">Gender: <span class ="float-right badge-primary"><?php echo $gender?></span></li>
								<li class="list-group-item">Course: <span class ="float-right badge-secondary"><?php echo $course?></span></li>
								<li class="list-group-item">Enrolled on: <span class ="float-right badge-danger"><?php echo $time?></span></li>	
							</ul>  
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