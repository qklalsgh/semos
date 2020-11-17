<meta charset="utf-8">
<?php
session_start();

$conn = mysqli_connect("localhost","root","111111","minho",3306);

if($_POST["userid"]==""||$_POST["userpw"]==""){
	echo '<script> alert("아이디나 패스워드를 입력하세요"); history.back();</script>';
} else{
	$password=$_POST['userpw'];
	$sql="select * from member where uid='".$_POST['userid']."'";
	$query=mysqli_query($conn,$sql);
	$member=$query->fetch_array();
	$hash_pw=$member['pw'];

	if(password_verify($password,$hash_pw)){
		$_SESSION['userid']=$member["uid"];
		$_SESSION['userpw']=$member['pw'];

		echo "<script>alert('로그인되었습니다.'); location.href='main.php';</script>";
	} else{
		echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
	}
}
?>