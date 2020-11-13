<!DOCTYPE html>
<html>
<head>
	<title>board</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>세모스 게시판</h1>
	 <form method="post">
      <p>센터명 검색 : <input type="text" name="center1" placeholder="검색어를 입력하세요"></p>
      <p><input type="submit" value="검색"></p>
  	 </form>
  	 <h1>강사명 목록</h1>
	<?php
	$conn = mysqli_connect("localhost","root","111111","minho",3306);

	  
	$sql="
	SELECT * FROM semos2 WHERE center LIKE '%{$_POST['center1']}%'
	";

	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
	  echo "<p>이름 : ".$row['name'].", 종목 : ".$row['sports'].", 지역 : ".$row['region']."<br><img src={$row['image']} width=200px height=100px>"."</p>";
	}
	}
	else{
	  echo "테이블에 데이터가 없습니다.";
	}

	mysqli_close($conn);
   ?>
  </form>
</body>
</html>