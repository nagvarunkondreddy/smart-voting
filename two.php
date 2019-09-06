	<!DOCTYPE html>
<html>
<head>
	<title>Smart Voting</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: lightblue;">
	<div class="container" style="margin-top: 200px;">
		<div class="card text-center" style="width: 500px;height: auto;padding: 10px;margin-left: auto;margin-right: auto;">
			<h3 class="card-title mt-3" >Register</h3>
			<br>
		<form class="form-group" action="two.php" method="post">
			<input type="text" name="username" class="form-control" placeholder="Enter Your Username:">
			<br>
				<input type="password" name="password" class="form-control" placeholder="Enter Your Password:">
				<br>
			
                 <input type="submit" name="submit" value="Register" class="form-control btn btn-outline-primary">
                 <div style="margin-top: 15px;">
                 <label>


		<?php
if(isset($_POST['submit']))
{$n=$_POST['username'];
$p=$_POST['password'];
$con = new mysqli('localhost','root','','varun');
$query1="SELECT * FROM vote WHERE name='$n' ";
$result1=mysqli_query($con,$query1);

    $row= mysqli_fetch_array($result1);
    if($row['name']==$n && $row['password']==$p)

				{

				echo "This Credential Already Exist.";}



else
{$query="INSERT INTO vote (name,password) VALUES('$n','$p')";
$result=mysqli_query($con,$query);
	echo "<script>
	alert('You Have Been Successfully Register.');
	window.location.href='one.php';
	</script>";
	
}
}

?>
                 	
                 </label>
                 </div>

		</form>
	
	


		
	</div>

</div>
</body>
</html>

