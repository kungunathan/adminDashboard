<?php
    require_once('logics/dbconnection.php');
    $sqlDeleteMessage= mysqli_query($conn, "DELETE FROM contactus WHERE no ='".$_GET['id']."'");
    if( $sqlDeleteMessage)
    {
        echo "Message deleted";
        header('location:contactus.php');
    }
    else
    {
        echo "Error occured";
    }
?>