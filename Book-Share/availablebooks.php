<?php
$con=mysqli_connect("localhost","root","","book_bank");
$query=("select * from seller_registeration");

$run=mysqli_query($con,$query);
  ?>
<htmL>
<head>
<title>Book Bank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="..\coproj\css\table.css"> 
</head>  
<body>
<div>
<h2>These are listed books for sale. Please login to Contact the seller of book in order to make purchase.</h2>
<table border="1">
<caption><b>Available Book Information. </b></caption>
<tr>
   <!-- <th>Name</th>
    <th>Gender</th>
    <th>Phone</th>
	<th>Address</th> 
	<th>Email</th>-->
	<th>Book Name</th>
	<th>Category</th>
	<th>Writer</th>
	<th>Price</th>
</tr>
<?php
    while( $arr=mysqli_fetch_array($run))
	{
 ?>
<tr>

<!-- <td><?php echo $arr['name'];?></td>
<td><?php echo $arr['gender'];?></td> 
<td><?php echo $arr['phone'];?></td>
<td><?php echo $arr['address'];?></td>
<td><?php echo $arr['email'];?></td>-->
<td><?php echo $arr['book_name'];?></td>
<td><?php echo $arr['category'];?></td>
<td><?php echo $arr['writer'];?></td>
<td><?php echo $arr['selling_price'];?></td>

<!--<td><a href="delete.php?phone_no=<?php echo $arr['phone_no'];?> delete</a></td>-->


</tr>
<?php
	}
?>
</table>
</div>
</body>
</html>