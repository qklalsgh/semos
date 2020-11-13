<!DOCTYPE html>
<html>
<head>
      <title>semos</title>
      <meta charset="utf-8">
</head>
<body>
      <h1>강사명 목록</h1>
      <?php
      $conn = mysqli_connect("localhost","root","111111","minho",3306);

      $sql="
      SELECT * FROM semos2 WHERE center='{$_POST['center1']}'
      ";

      $result=mysqli_query($conn,$sql);

      if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
          echo "<p>이름 : ".$row['name'].", 종목 : ".$row['sports'].", 지역 : ".$row['region']." <img src={$row['image']}>"."</p>";
        }
      }
        else{
          echo "테이블에 데이터가 없습니다.";
      }

      mysqli_close($conn);

      // $uploaddir = 'C:\BitNami\wampstack-7.4.12-0\apache2\htdocs\test_education\image_file\\';
      // $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

      // $filtered=array(
      //   'name'=>mysqli_real_escape_string($conn,$_POST['name']),
      //   'center'=>mysqli_real_escape_string($conn,$_POST['center']),
      //   'sports'=>mysqli_real_escape_string($conn,$_POST['sports']),
      //   'region'=>mysqli_real_escape_string($conn,$_POST['region'])

      // );

      //move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);

    

      //mysqli_query($conn,$sql);


      ?>

</body>
</html>
