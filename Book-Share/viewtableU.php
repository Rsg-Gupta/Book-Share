 <?php
 session_start();
 if(!isset($_SESSION['user_email']))
 {    
   header("location:buybooks.php");
 }
$con=mysqli_connect("localhost","root","","book_bank");
$query=("select * from seller_registeration");

$run=mysqli_query($con,$query);
  ?> 
<htmL>
<head>
<title>Book Bank</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="..\coproj\css\table.css"> 
<style>
button {
  background-color:rgb(255, 255, 115);
  color: red;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  text-decoration:none;
  width: 100%;
  opacity: 0.9;
}

 
</style>
</head>  
<body>
  <div id="a">
    <div id="b">
	<!--<img src="mainimagew.jpg">-->
	</div>
    <div id="c">
<h2>Select book and contact seller to buy book....Thank You</h2>
<table border="1">
<caption><b>Seller Info</b></caption>
<tr>
    <th>Name</th>
    <th>Gender</th>
    <th>Phone</th>
	<th>Address</th>
	<th>Email</th>
	<th>Book Name</th>
	<th>Category</th>
	<th>Writer</th>
	<th>Price</th>
	<th colspan="2">Edit</th>
</tr>
<?php
    while( $arr=mysqli_fetch_array($run))
	{
 ?>
<tr>

<td><?php echo $arr['name'];?></td>
<td><?php echo $arr['gender'];?></td> 
<td><?php echo $arr['phone'];?></td>
<td><?php echo $arr['address'];?></td>
<td><button><a href="mailto:<?php echo $arr['email'];?>">Mail</a></button></td>
<td><?php echo $arr['book_name'];?></td>
<td><?php echo $arr['category'];?></td>
<td><?php echo $arr['writer'];?></td>
<td><?php echo $arr['selling_price'];?></td>
   <?php if($_SESSION['user_email'] ==$arr['email'])
         {
	  ?>

         <td><button><a href="deleteB.php?id=<?php echo $arr['id'];?>"> Delete</a></button></button></td>
          <td><button>Update</button></td>
    <?php
	     }
		 else
		 {
      ?>
	   
	     <td></td>
		 <td></td>
    <?php
		 }
	?>

</tr>
<?php

	}
?>
</table>
<button ><a href="logoutbuy.php">Logout</a></button>
</div>

</div>
</body>
</html>