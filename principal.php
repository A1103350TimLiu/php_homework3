<?php
session_start();

if($_SESSION["login"]=="principal"){
    
}else{
    header("location:error.php");
}
?>

<html>

<head>

<meta charset="utf-8">
<title>President Page</title>

</head>

<body>

Wellcome, principal!</br>
<a href="teacher.php">Teacher page.</a></br>
<a href="logout_.php">logout</a></br> 

</body>

</html>