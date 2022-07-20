<?php
    $prompt="";
    //database connection
    require_once('logics/dbconnection.php');

    if( isset($_POST["submitSubscriber"]))
    {
        //fetch form data
        $email = $_POST['email'];

        $insertData = mysqli_query($conn, "INSERT INTO 
       subscribers(email)
        VALUES('$email')");
         if($insertData){
           $prompt= "Data submitted successfully";
           header('location:subscribers.php');
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
                        <h4><b>Add a subscriber:</b></h4>
                        <?php echo $prompt ?>
                    </span>
                </div>
                <div class="card-body">
                    <form action="add-subscriber.php" method = "POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="email" class="form-label"><b>E-mail Address:</b></label>
                                <input type="email" name = "email" class="form-control" placeholder="Your e-mail address">
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-lg-4">
                                <button type="submit" name ="submitSubscriber" class = "btn btn-primary form-control">Submit Subscriber</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>  
    </body>        
</html> 