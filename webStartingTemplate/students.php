<!DOCTYPE html>
<html>
<head>
	<title>Students info</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- All our code. write here   -->
	<div class="header">
		<img src="zalego.jfif" alt="Zalego" height="50" width="50" class="rounded-circle">
		<a href="index.php" class="navbar-trigger"><span></span></a>
	</div>
	<div class="sidebar">
		<nav>
			<ul>
				<li>
					<a href="students.php">
						<span><i class="fa fa-group"></i></span>
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="">
						<span><i class="fa fa-folder-open"></i></span>
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="">
						<span><i class="fa fa-graduation-cap"></i></span>
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>
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
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Course</th>
                            <th>Enrolled on</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Nathaniel Kung'u</td>
                                <td>+254790909090</td>
                                <td>nathan@gmail.com</td>
                                <td>Male</td>
                                <td>Wed Design & Development</td>
                                <td>23rd Aug 2022</td>
                                <td>
                                    <a href="#" class=" btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class=" btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class=" btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	</div>

	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- slide 202	 -->
</body>
</html>