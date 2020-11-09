<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Thank you!<br>
	<a href="test.html">돌아가기</a>
	<?php
file_put_contents('/data/'.$_POST['name'], "My name is ".$_POST['name'].".\nMy teacher is ".$_POST['center'].".\nI want to learn ".$_POST['sports'].".\nMy region is ".$_POST['region'].".");
 ?>
</body>
</html>

