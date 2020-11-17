<?php
session_start();

$conn = mysqli_connect("localhost","root","111111","minho",3306);

session_destroy();
?>

<meta charset="utf-8">
<script>alert("로그아웃되었습니다."); location.href="login_main.php";</script>