<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title></title>
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
        <a class="nav-link " href="ten.php">End Election</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="one.php">Log Out</a>
      </li>
    </ul>
  </div>
</nav>
	<div class="container">
		<div class="card" style="margin-top: 100px;">
			<h3 class="card-title text-center"> New Elections</h3>
			<div class="card-body">
				<table style="margin-right: auto;margin-left: auto;" id="one">
					<form action="five.php" method="post">
					<tr style="">
						<th style="padding: 20px;">Election-title:</th>
						<th  style="padding: 20px;"><input type="text" name="elect"></th>
					</tr>


					<tr style="">
						<th style="padding: 20px;">select number of cadiadates:</th>
						<th  style="padding: 20px;"><input type="number" name="elect1"></th>
					</tr>

					<tr style="">
						<th style="padding: 20px;">Date:</th>
						<th  style="padding: 20px;"><input type="Date" name="elect2"></th>
					</tr>
					<tr style=" margin-left: auto;">
						<th>
					<button class="btn btn-outline-primary">Next</button></th>

					</tr>
					
					</form>

					
				</table>


				<?php
				session_start();
				if (isset($_POST['elect'])) {
					$e=$_POST['elect'];
					$_SESSION['identity']=$e;


					$num=$_POST['elect1'];
						$_SESSION['number']=$num;
					$date=$_POST['elect2'];
					$_SESSION['dating']=$date;
								
					$con=new mysqli('localhost','root','','varun');

					$query="INSERT INTO election (name,num,dat) VALUES ('$e','$num','$date') ";
					mysqli_query($con,$query);
					header("Location:six.php");
					


									}
				?>

			

				
				<?php
				if (isset($_POST['e'])) 
					{$n=$_POST['e'];
				$i=$_POST['t'];
				$con=new mysqli('localhost','root','','varun');
				$query="INSERT INTO candidate (name,info) VALUES ('$n','$i')";
				mysqli_query($con,$query);

									}
				?>
				 
				 
			</div>
			
		</div>
	</div>

	
</body>
</html>