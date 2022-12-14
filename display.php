<?php
session_start();
$connection=new mysqli('localhost','root','','loginn');
if($connection){
if(isset($_POST['submit'])){
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$sql="select *from admins where user='$username' and pass='$password'";
	$query=mysqli_query($connection,$sql);
	$row=mysqli_num_rows($query);
		if($row==1){
			echo "login success";
			$_SESSION['user']=$username;
			header("location: display.php");

	}
	else{
		echo "Login failed";
		exit;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
   
    <title>Dental Website</title>
</head>
<body>
<div class="container">
    <button type="button" class="btn btn-info my-5" ><a href="addpatient.php" style="text-decoration:none; color:white;">Add Patient</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Date</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php

  $servername="localhost";
$username="root";
$pass="";
$database="formoperation";
$connection=new mysqli($servername,$username,$pass,$database);
if ($connection->connect_error) {
	die("connection failed: ".$connection->connect_error);
}
    $sql ="SELECT * FROM formop";
    $result=$connection->query($sql);
    each($result);
    if(!$result){
    
    die("invail query: " .$connection->connect_error);
    
    }
    
    while($row=$result->fetch_assoc()){
    echo"<tr>
            <td>" .$row["id"]. "</td>
            <td> " .$row["name"]. "</td>
            <td>" .$row["email"]. " </td>
            <td>" .$row["number"]. "</td>
            <td>" .$row["date"]. "</td>
            <td> 
                <a  href='update.php?id=$row[id]'> update</a>
                <a  href='delete.php?id=$row[id]'> delete</a>
                
    </td>  
    </tr>";
    }
    ?>

  </tbody>
</table>
</div>

<script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>