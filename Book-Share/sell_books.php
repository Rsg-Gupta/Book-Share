
<!-- LOGIN -->
<?php

$con=mysqli_connect("localhost","root","","book_bank");
if(isset($_POST['btn1']))
{ session_start();
  $name= $_POST['user_email'];
  $pass=$_POST['password'];
  $sql=mysqli_query($con ,"select * from user_signin where email='$name' && password='$pass'");
  $result=$sql;
  $num=mysqli_num_rows($result);
  if($num==1)
  {  
      $_SESSION['user_email']=$name;
	  header("location:registeration.php");     
  }
  else{
	  echo "not matched";
  }


}  





if(isset($_POST['btn2']))
{
	$name=$_POST['name'];
    $email=$_POST['email'];
	$password=$_POST['password'];
	
	$query="insert into user_signin(name,email,password) 
	        value('$name','$email','$password')";
	$run=mysqli_query($con,$query);
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



<!DOCTYPE html>
<html>
<head >
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Book Bank</title>
	  <link rel="stylesheet" type= "text/css" href="..\coproj\css\topmenu.css">
	  <link rel="stylesheet" type="text/css" href="..\coproj\css\body.css"> 
	 
      <!--<link rel="stylesheet" type="text/css" href="..\coproj\css\body.css"> -->
		
 <style>
	  body
{
	margin:0;
	padding:0;
}
img
{
	width: 100%;
		
}
* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url('pexels-tatiana-2898170.jpg');
  
  
   
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  
  
}

/* Add styles to the form container */
.container1 {
	position: absolute;
  left:500px;
  top:200px;
  padding: 16px;
  background-color: white;
}
.container2 {
  position: absolute;
  left:300px;
  top:0px;
  min-width:400px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
img
{
	width: 100%;
	
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color:rgb(255, 255, 115);
  color: red;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  background-color: rgb(239, 226, 0);
}
</style>

</head>
<!-- ..................................................................................................................-->
 <body>
        <div class="topmenu">
		    <a href="..\coproj\adminlogin.php">Admin</a>
			<a href="">About Us</a>
			<a href="..\coproj \buybooks.php">Buy Books</a>
			<a href="..\coproj\availablebooks.php">View Books</a>
			<a href="..\coproj\sell_books.php">Sell Books</a>
			<a href="..\coproj\index.php">Home</a>
	    </div> 
		
		<div class="big-img" >
		<div id="container">
		<img src="pexels-tatiana-2898170.jpg">
        </div>
		 
		<!--USER LOG-IN FORM-->
		<form method="post"  class="container1">
           <h1>LogIn</h1>
		   <h3>If have an ID</h3>
		   <label><b>User E-mail</b></label>
           <input type="text" name="user_email" placeholder="Enter User E-mail" required><br></br>
		   <label><b>Password</b></label>
           <input type="text" name="password" placeholder="Enter Password" required><br></br>
           <button  class="btn" name="btn1" type="submit"><b>LogIn<b></button>
        </form>
		<form method="post" class="container2">
		<!--USER SIGN-IN FORM -->
           <h1>Sign-In</h1>
		   <h3>If you are new</h3>
		   <label><b>Name</b></label>
           <input type="text" name="name" placeholder="Enter your name" required><br></br>
		   <label><b>E-mail</b></label>
           <input type="text" name="email" placeholder="Enter your Email" required><br></br>
		   <label><b>Password</b></label>
           <input type="text" name="password" placeholder="Set Password" required><br></br>
           <button  class="btn" name="btn2" type="submit"><b>Sign-In<b></button>
        </form>
		</div>
	</body>
<!-- .......................................................................................................................-->
</html>	 