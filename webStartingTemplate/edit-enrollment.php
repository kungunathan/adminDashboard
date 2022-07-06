<?php
	require_once('logics/dbconnection.php');
	$queryUser = mysqli_query($conn, "SELECT * FROM enrollment WHERE no ='".$_GET['id']."'  ");

	while($fetchUser = mysqli_fetch_array($queryUser))
	{
		$fullname = $fetchUser['fullname'];
		
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
                            <h4>Edit Student: <?php echo $fullname?></h4>
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