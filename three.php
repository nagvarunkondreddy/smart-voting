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
        <a class="nav-link" href="eight.php">Vote</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link " href="nine.php">View Result</a>
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
<div class="container">
	<div class="card" style="margin-top: 150px;">
		<h4 class="card-title text-center">View Elections</h4>
		<div class="card-body">
			<table style="margin-right: auto;margin-left: auto;">
        <tr>
          <th style="padding: 10px;">Select election to view candidate</th>

          <th style="padding: 10px;">
            <select>
               <?php
                $con= new mysqli('localhost','root','','varun');
                $query="SELECT name FROM election ";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($result)){
                 

              
                ?>
              <option>
                <?php
                $row1=$row['name'];
                 echo "$row1";
                ?>

              </option>
              <?php
                }
              ?>

            </select>
          </th>

        </tr>
     
        <tr>
          <td>
          <button style="" class="btn btn-outline-primary" onclick="creek()">Search</button>
          </td>
        </tr>
				
			</table>
				



		
		</div>
		
	</div>
	
</div>


<div class="container" style="display: none;" id="hide">
  <table style="width: 100%;margin-top: 80px;">
    <tr>
      <th class="text-center">Name:</th>
      <th class="text-center">Image:</th>
      <th class="text-center">Information:</th>
    </tr>
   
      <?php
      $con=new mysqli('localhost','root','','varun');
      $query="SELECT * FROM candidate";
      $result=mysqli_query($con,$query);
      error_reporting(0);
      while($row=mysqli_fetch_assoc($result))
      {
          ?>
      
        <tr style="">
    
      <td class="text-center" style="padding:10px;"><?php
       $row1=$row['name']; echo "$row1";
      ?></td>
      <td  class="text-center" style="padding:10px;"> <?php
      $row3=$row['image']; echo "<img src='$row3' style='height:130px;width:130px;'>";

      ?></td>
      <td  class="text-center" style="padding:10px;"> <?php
        $row2=$row['info']; echo "$row2";

      ?></td>
      </tr>
      <?php

      }
      ?>

    

  </table>
  
</div>
<script type="text/javascript">
  function creek(){
    var p=document.getElementById('hide');
    p.style.display="block";
  }
</script>

</body>
</html>