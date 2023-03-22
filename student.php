<?php
session_start();
if($_SESSION["login"]=="teacher"){
    
}elseif($_SESSION["login"]=="student"){
    
}else{
    header("location:error.php");
}
?>

<html>

<head>

<meta charset="utf-8">
<title>Student Page</title>

</head>

<body>

Wellcome, student!</br>

<a href="logout.php">logout</a></br> 

</body>

</html>
