<!DOCTYPE html>
<html>
<head>
	<title>utama</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
$absen = $_POST['absen'];

echo var_dump($absen);

if($absen==1){
?>
<i class="fa fa-check" style="font-size:48px;color:green"></i>
<?php
}else if($absen==0){
 ?>
<i class="fa fa-close" style="font-size:48px;color:red"></i>
 <?php
}else if($absen==2){
?>
<i class="fa fa-info" style="font-size:48px;color:red"></i>
<?php }else{ ?>
<i class="fa fa-medkit" style="font-size:48px;color:red"></i>
<?php } 
// header('location:index.php');

?>



<!-- <form action="direct.php" method="post">
	<input type="submit" name="a" value="kembali">
</form> -->
</body>
</html>