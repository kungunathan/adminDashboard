<?php
    require_once('logics/dbconnection.php');

    $sqlQuery= mysqli_query($conn,"SELECT * FROM enrollment");
?>


<!DOCTYPE html>
<html>
	<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<div class="header">
		<img src="zalego.jfif" alt="Zalego" height="50" width="50" class="rounded-circle">
		<a href="index.php" class="navbar-trigger"><span></span></a>
	</div>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
				<div class="card-body">
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
							<tr>
								<th>No.</th>
								<th>Full Name</th>
								<th>Phone Number</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Course</th>
								<th>Enrolled on</th>
								<th>Action</th>
							</tr>
                        </thead>
                        <tbody>
						<?php while($fetchRecords=mysqli_fetch_array($sqlQuery)) { ?>
                                <tr>
                                    <td><?php echo $fetchRecords['no']?></td>
                                    <td><?php echo $fetchRecords['fullname']?></td>
                                    <td><?php echo $fetchRecords['phonenumber']?></td>
                                    <td><?php echo $fetchRecords['email']?></td>
                                    <td><?php echo $fetchRecords['gender']?></td>
                                    <td><?php echo $fetchRecords['course']?></td>
                                    <td><?php echo $fetchRecords['created_at']?></td>
                                    <td>
                                        <a href="">Edit</a>
                                        <a href="">View</a>
                                        <a href="">Delete</a>
                                    </td>
                                </tr>
                                <?php }?>
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	</div>

	<?php require_once('includes/scripts.php')?>
	<!-- slide 202	 -->
</body>
</html>