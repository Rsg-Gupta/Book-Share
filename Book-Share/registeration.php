<?php
$conn=mysqli_connect("localhost","root","","book_bank");
if(isset($_POST['btn']))
{
	$name=$_POST['name'];
	$gender=$_POST['gender']; 
	$phone=$_POST['phone_no'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$book_name=$_POST['b_name'];
	$book_category=$_POST['category'];
	$writer=$_POST['writer'];
	$price=$_POST['price'];
	$query="insert  into seller_registeration(name,gender,phone,address,email,book_name,category,writer,selling_price) 
	                                 values('$name','$gender','$phone','$address','$email','$book_name','$book_category','$writer','$price')";
	$run=mysqli_query($conn,$query);
	if($run)
	{
		echo "Success";
	}
	else
	
	{
		echo "something wrong";
		
	}
}



?>


<html>
<head>
<title>Book Bank</title>
<link rel="stylesheet" type="text/css" href="..\coproj\css\body.css"> 
<style>
/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}
#registeration 
{ 
 position:absolute;
 top:20px;
  color:rgb(220,220,220);
  z-index:999;
  margin-left:8%;
  width:80%;
  padding: 16px;
  background: rgba(0, 0, 0, 0.3);
  }
/* Full-width input fields */	
input[type=text],select,option,textarea{
  width: 60%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: rgb(255, 255, 115);
  color: Green;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 90%;
  opacity: 0.9;
}
 
.registerbtn:hover {
  background-color: rgb(239, 226, 0);
}
#a{
	position:static;
	
}
#a #b img{
	width: 100%;
	position:fixed;
	top:-25px;
	z-index:-1;
}
</style>
</head>
<body>
<!-- Registeration form-->
  <div id="a">
    <div id="b" >
	<img src="aaron-burdenw.jpg">
    </div>
    <div  id= "registeration" >
  <form method="post" align="center">
  
  <h1>Registration Form</h1>
  <h3>Fill the bellow form<h3>
  <hr> 
  <label><b>Name</b></label><br>
  <input type="text" name="name" placeholder="name"><br><br>
  <label><b>Gender</b></label>
  <br>
  <input type="radio" name="gender" value="male"/>Male
  <input type="radio" name="gender" value="female"/>Female
  <input type="radio" name="gender" value="Other"/>Other<br><br>
  <label><b>Phone</b></label><br>
  
  <input type="text" name="phone_no" size="10"/><br><br>
  <label><b>Address</b></label><br>
  <textarea cols="100%" rows="5" value="address" name="address" placeholder="Address"></textarea><br><br>
  <label><b>Email</b></label><br>
  <input type="text" name="email" placeholder="Email"><br><br>
  <h2>Book information</h2><hr>
  <label><b>Book name</b></label><br>
  <input type="text" name="b_name" placeholder="Book Name"><br><br>
  <label><b>Book Category</b></label><br>
  <select name="category">
  <option value="Academic">Academic</option>
  <option value="Other">Other</option>
   </select> <br><br>
  <label><b>Writer</b></label><br>
  <input type="text" name="writer" placeholder="Writer"><br><br>
  <label><b>Selling Price</b></label><br>
  <input type="text" name="price" placeholder="Price"><br><br>
 
  
  <button name="btn" type="Submit"  class="registerbtn"><b>Submit</b></button>
   
 
 </form>
 </div>
 
 </div>

</body>

</html>