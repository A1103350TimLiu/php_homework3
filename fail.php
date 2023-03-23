<?php
session_start();
ob_start();
if($_SESSION["login"]=="fail"){

}else{
    header("location:error.php");
}
?>

<html>

<head>

<title>Failed</title>

</head>

<body>

登入失敗</br>
網頁將在三秒後跳轉至登入頁面或</br>
<a href="index.php">點選這裡</a>

<?php
header("Refresh:3;url=index.php");
?>

</body>

</html>

<?php
ob_flush();
?>
