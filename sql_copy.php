<!DOCTYPE html>
<html>
<head>
	<title>semos</title>
	<meta charset="utf-8">
</head>
<body>
	<p>감사합니다. </p>
	<a href="test_copy.html">돌아가기</a>
	<?php
	$conn = mysqli_connect("localhost","root","111111","minho",3306);

	$uploaddir = 'C:\BitNami\wampstack-7.4.12-0\apache2\htdocs\test_education\image_file\\';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	$filtered=array(
	  'name'=>mysqli_real_escape_string($conn,$_POST['name']),
	  'center'=>mysqli_real_escape_string($conn,$_POST['center']),
	  'sports'=>mysqli_real_escape_string($conn,$_POST['sports']),
	  'region'=>mysqli_real_escape_string($conn,$_POST['region'])

	);

	move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);

	$sql="
	  INSERT INTO semos2
	    (name,center,sports,region,image)
	    VALUES(
	      '{$filtered['name']}',
	      '{$filtered['center']}',
	      '{$filtered['sports']}',
	      '{$filtered['region']}',
	      './image_file/{$_FILES['userfile']['name']}'
	      )
	    ";

	mysqli_query($conn,$sql);
	//echo ($uploaddir.$_FILES['userfile']['name']);

	?>

</body>
</html>
