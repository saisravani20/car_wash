<?php
include 'includes/config.php';

session_start();
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
     
    $query="select * from users where   email='$email' and  pwd='$pwd' ";
    $result=$dbh-> query($query);
     
    if($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION["email"] = $row["email"];
        header("Location:washing-plans.php"); 
    }

    else{
        session_destroy();
        header("Location:login.php?msg=Invalid Credentials"); 
    }
?>
