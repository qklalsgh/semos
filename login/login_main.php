<!DOCTYPE html>
<html>
<head>
	<title>로그인 화면 만들기</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="login_box">
		<h1>로그인</h1>
		<form method="post" action="loginok.php">
			<table align="center" border="0" cellspacing="0" width="300">
				<tr>
					<td width="130" colspan="1">
						<input type="text" name="userid" class="inph">
					</td>
					<td rowspan="2" align="center" width="100">
						<button type="submit" id="btn">로그인</button></td>
				</tr>
				<tr>
					<td width="130" colspan="1">
						<input type="password" name="userpw" class="inph">
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center" class="mem">
						<a href="member.php">회원가입</a>
					</td>
				</tr>
			</table>
		</form>
	</div>


</body>
</html>