<?php
    require_once('logics/dbconnection.php');
    $sqlDeleteMessage= mysqli_query($conn, "DELETE FROM subscribers WHERE no ='".$_GET['id']."'");
    if( $sqlDeleteMessage)
    {
        echo "Message deleted";
        header('location:subscribers.php');
    }
    else
    {
        echo "Error occured";
    }
?>