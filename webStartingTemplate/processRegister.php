<?php
    require_once('connection.php');

    if(isset($_POST['signUp']))
    {
        //fetch form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpass = $_POST['cpassword'];

        //check if username exists in the database
        $sqlUsername= mysqli_query($conn,"SELECT * FROM account
        WHERE username = '$username '");
        $checkUsername=mysqli_num_rows($sqlUsername);

        if($checkUsername != 0)
        {
            $msg ="Username already exist";
        }
        //check for email
        $sqlEmail= mysqli_query($conn, "SELECT * FROM account WHERE email = '$email'");
        $checkEmail= mysqli_num_rows($sqlEmail);

        if($checkUsername != 0)
        {
            $msg ="Username already exist";
        }
        elseif($checkEmail != 0)
        {
            $msg ="Email alredy in use. Please try another email address";
        }
        //password confirmation
        elseif($password != $cpass)
        {
            $msg ="Passwords do not match";
        }
        //submit data to table
        else
        {
            //create insert query
            $sql = mysqli_query($conn, "INSERT INTO account(username,email,password)
            VALUES('$username','$email','$password')");

            if($sql)
            {
                $msg= "Data submitted successfully";
            }
            else
            {
                $msg= 'Error';
            }
        }
    }
?>