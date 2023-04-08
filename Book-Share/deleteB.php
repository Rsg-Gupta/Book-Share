<?php
$con=mysqli_connect("localhost","root","","book_bank");
$id=$_GET['id'];
$del=mysqli_query($con,"delete from seller_registeration where id='$id'");
if($del)

 {   
	  header("location:viewtableU.php");   
  }
  else{
	  echo "something wrong";
  }
?>