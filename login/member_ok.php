<?php
session_start();

$conn = mysqli_connect("localhost","root","111111","minho",3306);

$userid=$_POST['userid'];
$userpw=password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$username=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$email=$_POST['email'].'@'.$_POST['emailaddress'];

$sql="
insert into member(uid, pw, name, address, gender, email)
values('".$userid."','".$userpw."','".$username."','".$address."','".$gender."','".$email."')
";
mysqli_query($conn,$sql);

?>

<meta charset="utf-8">
<script type="text/javascript">alert('회원가입이 완료되었습니다.'); location.href="login_main.php";</script>

