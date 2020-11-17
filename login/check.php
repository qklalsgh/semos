<?php
session_start();

$conn=mysqli_connect("localhost","root","111111","minho",3306);

$cid=$_GET['userid'];
$sql="select * from member where uid='".$cid."'";
$query=mysqli_query($conn,$sql);
$member=$query->fetch_array();

if($member==0){
?>
<div style='font-family:"malgun gothic"'><?php echo $cid;?>는 사용가능한 아이디입니다.</div>
<?php
}else{
?>
<div style='font-family:"malgun gothic"; color: red;'><?php echo $cid; ?>는 중복된 아이디입니다.</div>
<?php
	}
?>
<button value="닫기" onclick="window.close()">닫기</button>
<script></script>

