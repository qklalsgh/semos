<!DOCTYPE html>
<html>
<head>
	<title>semos</title>
	<meta charset="utf-8">
</head>
<body>
	<p>감사합니다. </p>
	<a href="test.html">돌아가기</a>
	<?php
	$conn = mysqli_connect("localhost","root","111111","minho",3306);

	$filtered=array(
	  'name'=>mysqli_real_escape_string($conn,$_POST['name']),
	  'center'=>mysqli_real_escape_string($conn,$_POST['center']),
	  'sports'=>mysqli_real_escape_string($conn,$_POST['sports']),
	  'region'=>mysqli_real_escape_string($conn,$_POST['region'])

	);

	$sql="
	  INSERT INTO semos
	    (name,center,sports, region)
	    VALUES(
	      '{$filtered['name']}',
	      '{$filtered['center']}',
	      '{$filtered['sports']}',
	      '{$filtered['region']}'
	      )
	    ";

	mysqli_query($conn,$sql);

	?>

</body>
</html>
