<?php
    $prompt="";
    //database connection
    require_once('logics/dbconnection.php');

    if( isset($_POST["submitApplication"]))
    {
        //fetch form data
        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];

        $insertData = mysqli_query($conn, "INSERT INTO 
        enrollment(fullname,phonenumber,email,gender,course)
        VALUES('$fullname','$phonenumber','$email','$gender','$course')");
         if($insertData){
           $prompt= "Data submitted successfully";
           header('location:students.php');
        }
        else{
            echo "Error occured";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <?php require_once('includes/headers.php')?>
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
                <div class="card-header bg-dark text-white text-center">
                    <span>
                        <h4><b>Add a new student:</b></h4>
                        <?php echo $prompt ?>
                    </span>
                </div>
                <div class="card-body">
                    <form action="enroll-student.php" method = "POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fullname" class="form-label"><b>Full Name:</b></label>
                                <input type="text" name = "fullname" class="form-control" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="phonenumber" class="form-label"><b>Phone Number:</b></label>
                                <input type="tel" name = "phonenumber" class="form-control" placeholder="+2547.....">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="email" class="form-label"><b>E-mail Address:</b></label>
                                <input type="email" name = "email" class="form-control" placeholder="Your e-mail address">
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-lg-6">
                                <label for="gender" class="form-label"><b>What's your gender?</b></label>
                                <select class="form-select form-control" aria-label="Default select example" name = "gender">
                                    <option selected>--Select your gender--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row m-1">
                            <p>
                                Inorder to complete your registration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the two weeks immersion.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="course" class= "form-label"><b>What's your preffered course?</b></label>
                                <select class="form-select form-control" aria-label="Default select example" name = "course">
                                    <option selected>--Select your course--</option>
                                    <option value="Web Design">Web Design</option>
                                    <option value="Data analysis">Data analysis</option>
                                    <option value="Cyber security">Cyber security</option>
                                </select>
                            </div>
                        </div>
                        <div class="row m-1">
                            <p>
                                You agree by providing your information you understand allour data privacy and protection policy outlined in our Terms & conditions and the privacy policy statements.
                            </p>
                        </div>
                        <div class="row pt-2">
                            <div class="col-lg-4">
                                <button type="submit" name ="submitApplication" class = "btn btn-primary form-control">Submit application</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>  
    </body>        
</html> 