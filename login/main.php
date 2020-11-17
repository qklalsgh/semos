<?php
session_start();

$conn = mysqli_connect("localhost","root","111111","minho",3306);
?>
<!DOCTYPE html>
<html>
<head>
	<title>메인페이지</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	if(isset($_SESSION['userid'])){
		echo "<h2>{$_SESSION['userid']}님 환영합니다.</h2>";
	?>
	<a href="logout.php"><input type="button" value="로그아웃"></a>
	<?php
	} else{
		echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
	}
	?>

</body>
</html>