<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img src="2.jpg" style="height: 50px;width: 50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="four.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="five.php">New Elections</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link " href="seven.php">View Result</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">End Election</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="one.php">Log Out</a>
      </li>
    </ul>
  </div>
</nav>
	<div class="container" style="margin-top: 200px;">
		<table style="margin-right:auto;margin-left: auto;" id="two">

			


					<form action="" method="post" enctype="multipart/form-data">
					<tr style="">
						<th style="padding: 20px;">Candidate Name:</th>
						<th  style="padding: 20px;"><input type="text" name="e"></th>
					</tr>


					<tr style="">
						<th style="padding: 20px;">Info:</th>
						<th  style="padding: 20px;"><input type="text" name="t"></th>
					</tr>

					<tr style="">
						<th style="padding: 20px;">image :</th>
						<th  style="padding: 20px;"><input type="file" name="p"></th>
					</tr>

					<tr style=" margin-left: auto;">
						<th>
					<button class="btn btn-outline-primary" >Submit</button></th>

					</tr>
					</form>
				</table>
				</div>
				<?php
				session_start();
				$e=$_SESSION['identity'];
				?>


				<?php
				if(isset($_POST['e']))
				{$n=$_POST['e'];
					$i=$_POST['t'];
					$x=$_SESSION['identity'];
					

					$filename=$_FILES['p']['name'];
					$tempname=$_FILES['p']['tmp_name'];
					$folder="images/".$filename;
					move_uploaded_file($tempname,$folder);
				

				
					$con= new mysqli('localhost','root','','varun');
				$query="INSERT INTO candidate (name,info,image) VALUES ('$n','$i','$folder')";
				mysqli_query($con,$query);
				$query1="UPDATE election SET num=num-1 WHERE name='$e' ";
				mysqli_query($con,$query1);
			
					
			}
				
			     
			?>

			<?php
				
				
					
				
				$con=new mysqli('localhost','root','','varun');
				$query="SELECT * FROM election WHERE name='$e' ";
				$result=mysqli_query($con,$query);
				$t=mysqli_fetch_assoc($result);
				$s=$t['num'];
				if($s==0)
				{
					echo "<script>alert('Two candidate have been registered.');</script>";
					header("Location:four.php");

				}
				
				
				

				
				
				
				



				?>
				

</body>
</html>