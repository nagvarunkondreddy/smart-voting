<!DOCTYPE html>
<html>
<head>
	<title>Smart Voting</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: lightblue;">
	<div class="container" style="margin-top: 200px;">
		<div class="card text-center" style="width: 500px;height: auto;padding: 10px;margin-left: auto;margin-right: auto;">
			<h3 class="card-title mt-3" >Login</h3>
			<br>
		<form class="form-group" action="one.php" method="post">
			<input type="text" name="username" class="form-control" placeholder="Enter Your Username:">
			<br>
				<input type="password" name="password" class="form-control" placeholder="Enter Your Password:">
				<br>
			
<input type="submit" name="submit" value="Login" class="form-control btn btn-outline-primary">


		</form>
		<div>
	<label>
		<?php
		session_start();
	if (isset($_POST['username'])) {
		$n=$_POST['username'];
		$_SESSION['na']=$n;
		$p=$_POST['password'];
		$con=new mysqli('localhost','root','','varun');
		$query="SELECT * FROM vote WHERE name='$n' ";
		$result=mysqli_query($con,$query);
		error_reporting(E_ERROR | E_PARSE);
		$row=mysqli_fetch_array($result);
		if($n =='admin' && $p=='1234')
		{
			header("Location:four.php");
		}
		else if( $row['name'] == $n)
		{if($row['password']==$p)
			{header("Location:three.php");
			


		}}
		else
		{
			echo "First Please Register.";
		}
		
	}
	?>
		

	</label>
</div>
		<div class="card-footer">
			<a href="two.php">Click Here For Register</a>
			
		</div>



		
	</div>

	

</div>
</body>
</html>
	
	