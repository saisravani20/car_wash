<?php
include 'db_connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];

// $uppercase = preg_match('@[A-Z]@',$pwd);
// $lowercase = preg_match('@[a-z]@',$pwd);
// $number = preg_match('@[0-9]@',$pwd);
// $splchar = preg_match('@[^\w]@',$pwd);

// if(!$uppercase && !$lowercase && !$number && !$splchar && !strlen($pwd)<=8){
//     echo 'Password does not match the requirements';

// }
// else{
//     echo 'Strong pwd';
    $query="insert into users (name,email,pwd) values('$name','$email','$pwd' )";

// }






$con-> query($query);
// $query1="insert into bonafide_sub(regno) values('$reg_no')";
// $con-> query($query1);
header("Location:login.php");
?>