<?php
session_start();

if($_SESSION["login"]=="teacher"){
    
}elseif($_SESSION["login"]=="principal"){
    
}else{
    header("location:error.php");
}
?>

<html>

<head>

<meta charset="utf-8">
<title>Teacher Page</title>

</head>

<body>

Wellcome, teacher!</br>

<?php
if($_SESSION["login"]=="principal"){
    echo '<a href="principal.php">'."Principal Page."."</a>"."</br>";
}elseif($_SESSION["login"]=="teacher"){
    echo '<a href="student.php">'."Student Page."."</a>"."</br>";
}
?>

<a href="logout.php">logout</a></br> 

</body>

</html>