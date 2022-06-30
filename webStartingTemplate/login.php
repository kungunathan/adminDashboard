<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
    <div class="container-fluid">
		<div class="header mb-3 p-3">
			<p class="text text-center ">
				<b>Zalego Training|Admin Login</b>
			</p>
		</div>
	</div>
	<div class="container">
		<img src="zalego.jfif" alt="Zalego" height="100" width="100" class="rounded-circle m-5 p-3 mx-auto d-block ">
        <form action="login.php" method="POST">
            <div class="card">
                <div class="row">
                    <div class="col-lg-12">
						<label for="username" class="form-label"><b>Username:</b></label>
						<input type="text" name="username" class="form-control">
					</div>
                    <div class="col-lg-12">
						<label for="password" class="form-label"><b>Password:</b></label>
						<input type="password" name="password" class="form-control">
					</div>
                </div>
                <button type="submit" name="loginButton" class="btn btn-primary mt-3 mb-3">Submit</button>
                <p>
					Have an account? sign in <a href="login.php">Here</a>
				</p>
            </div>
        </form>
    </div>
	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>