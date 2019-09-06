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
        <a class="nav-link" href="four.php">Home<span class="sr-only">(current)</span></a>
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
  <div class="container" style="margin-top: 25px;">
    <div class="row">
      <div class="col-12">
      <div class="card" style="width: 100%;">
        <h3 class="card-title text-center">Results</h3>
        <div class="card-body" >
          <select style="margin-left:500px;">
            <?php
            $con=new mysqli('localhost','root','','varun');
            $query="SELECT * FROM election";
            $row=mysqli_query($con,$query);
            while($result=mysqli_fetch_array($row)) {
              # code...
            
            ?>
            <option>
              <?php
              $t=$result['name'];
              echo "$t";
              ?>
              
            </option>

            <?php
                }
            ?>
          </select>
          <br>
          <button class="btn btn-outline-primary" onclick="credentials()" style="margin-left: 530px; margin-top: 20px;">View</button>
          
        </div>
        
      </div>
      </div>
      <br>
      <div class="col-12" >
        <div class="card" style="width: 100%" >
          <div class="card-body" style="display: none;" id="details" >
            <table style="width: 100%;  " >
              <tr style="width: 100%;">
                <th class="text-center" >Candidate Name</th>
                <th class="text-center">Candidate Image</th>
                <th class="text-center">Candidate Information</th>
                <th class="text-center">Candidate Votes</th>
              </tr>
              <?php
              $con=new mysqli('localhost','root','','varun');
              $query="SELECT * FROM candidate";
              $result=mysqli_query($con,$query);
              while ($row=mysqli_fetch_assoc($result)) {
                # code...
              
              ?>
              <tr>
                <td class="text-center" style="padding:10px;"><?php
                $row2=$row['name'];
                echo "$row2";

                ?></td>
                <td class="text-center" style="padding:10px;"> <?php
                $row3=$row['info'];
                echo "$row3";?></td>
                <td class="text-center" style="padding:10px;"> <?php

                $row2=$row['image'];
                echo "<img src='$row2'>";?></td>
                <td  class="text-center" style="padding: 10px;"> <?php
                $row10=$row['voting'];
                echo "$row10";


                ?></td>
              </tr>
              <?php 
                 }
              ?>


            </table>
            
          </div>
          
        </div>
        
      </div>
      <script type="text/javascript">
    function credentials(){
      var t =document.getElementById('details');
      t.style.display="inline-block";

    }
  </script>

      
    </div>
    
  </div>



</body>
</html>