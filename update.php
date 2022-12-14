<?php
$servername="localhost";
$username="root";
$pass="";
$database="formoperation";

$connection=new mysqli($servername,$username,$pass,$database);

$id="";
$name="";
$email="";
$number="";
$date="";

$errorMessage="";
$successMessage="";


if($_SERVER['REQUEST_METHOD']=='GET')
{
    if(!isset($_GET["id"])){

header("location: display.php");
 exit;

    }
    $id=$_GET["id"];
    $sql="SELECT * FROM formop WHERE id=$id";
    $result=$connection->query($sql);
    $row=$result->fetch_assoc();
    if(!$row){
        header("location:display.php");
        exit;
    }
$name=$row["name"];
$email=$row["email"];
$number=$row["number"];
$date=$row["date"];

}
else{
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$date=$_POST["date"];
do{
    if(empty($id)||empty($name)||empty($email)||empty($number)||empty($date)){

$errorMessage="All the fields are required";
break;

    }
    $sql ="UPDATE formop set id=$id,name='$name',email='$email',number='$number',date='$date' where id=$id ";

 $result=$connection->query($sql);
 if(!$result)  {
$errorMessage="inavalid query:".$connection->error;

break;

 } 
$successMessage="correct add";

header("location: display.php");
 exit;
}while(true);
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Patient</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body>
    <div class= "container my-5">
        <h2>Update data</h2>
        <?php
         if(!empty($errorMessage)){

         echo"
         <div class='alert alert-waring alert-dismissible fade show' role='alert'> 
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
";

         }

        ?>
        <form method="post">
            <input type="hidden"  name ="id" value ="<?php echo $id;?>">
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Name</label>  
              <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="<?php echo $name;?>" placeholder="patient name" >

</div>

       </div>
              <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Email</label>  
              <div class="col-sm-6">
                <input type="text" class="form-control" name="email" value ="<?php echo $email;?>"placeholder="patient email" >

</div>

</div>
          <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Number</label>  
              <div class="col-sm-6">
                <input type="text" class="form-control" name="number"  value = "<?php echo $number;?>" placeholder="patient number" >

</div>

</div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Date</label>  
              <div class="col-sm-6">
                <input type="datetime-local" class="form-control" name="date"  value="<?php echo $date;?>">

</div>

</div>
          <?php

if(!empty($successMessage)){

         echo"
          <div class='row mb-3'>
            <div class='offset-sm-3 col-sm-3'>
         <div class='alert alert-success alert-dismissible fade show' role='alert'> 
            <strong>$successMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='submit'></button>
</div>
</div>
</div>
";

         }

          ?>
          <div class="row mb-3" >
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>         
            </div>       
          </div>
        </form>
    </div>
</body>
</html>