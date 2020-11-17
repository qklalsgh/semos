<?php
session_start();

$conn = mysqli_connect("localhost","root","111111","minho",3306);
?>
<!DOCTYPE html>
<html>
<head>
	<title>회원가입</title>
	<meta charset="utf-8">
	<script> 
		function same(){
			var userid=document.getElementById("cid").value;
			var url="check.php?userid=";
			if(userid){
				url+=userid;
				window.open(url,"_blank","width=300, height=100");
			} else{
				alert("아이디를 입력하세요");
			}
		}
	</script>
</head>
<body>
	<form method="post" action="member_ok.php">
		<h1>회원가입</h1>
		<fieldset>
			<legend>입력사항</legend>
			<table>
				<tr>
					<td>아이디</td>
					<td><input type="text" size="35" name="userid" id="cid" placeholder="아이디">
						<input type="button" value="중복검사" onclick="same();">
						<input type="hidden" value="0"></td>
				</tr>
				<tr>
					<td>비밀번호</td>
					<td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
				</tr>
				<tr>
					<td>이름</td>
					<td><input type="text" size="35" name="name" placeholder="이름"></td>
				</tr>
				<tr>
					<td>주소</td>
					<td><input type="text" size="35" name="address" placeholder="주소"></td>
				</tr>
				<tr>
					<td>성별</td>
					<td>남<input type="radio" name="gender" value="남">여<input type="radio" name="gender" value="여"></td>
				</tr>
				<tr>
					<td>이메일</td>
					<td><input type="text" name="email">@<select name="emailaddress"><option value="naver.com">naver.com</option><option value="nate.com">nate.com</option><option value="hanmail.com">hanmail.com</option></select></td>
				</tr>
			</table>
			<input type="submit" value="가입하기"><input type="reset" value="다시쓰기">
		</fieldset>
	</form>

</body>
</html>