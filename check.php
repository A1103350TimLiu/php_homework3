<?php
session_start();

$prID="principal";
$prPWD="123";
$trID="teacher";
$trPWD="456";
$stuID="student";
$stuPWD="789";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($prID==$id)&&($prPWD==$pwd)){
    $_SESSION["login"]="principal";
    header("location:principal.php");
}elseif(($trID==$id)&&($trPWD==$pwd)){
    $_SESSION["login"]="teacher";
    header("location:teacher.php");
}elseif(($stuID==$id)&&($stuPWD==$pwd)){
    $_SESSION["login"]="student";
    header("location:student.php");
}else{
    $_SESSION["login"]="fail";
    header("location:fail_hw3.php");
}

?>