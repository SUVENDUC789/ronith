<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $add=$_POST['des'];

    include 'dbconnect.php';

    $sql="INSERT INTO `ronith` (`sl`, `name`, `email`, `addr`, `date_Time`) VALUES (NULL, '$name', '$email', '$add', current_timestamp())";

    
    $result=mysqli_query($conn,$sql);

    if($result)
    {
        echo "<h1>Data Insert successfull .</h1>";
    }
    else
    {
        echo "<h1>Something went to wrong..</h1>";

    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link rel="stylesheet" href="apform.css">
</head>
<body>
   <div class="container">
        <h2>SUBMITED SUCCESSFULLY :><br> <?php echo $_POST['name'];  ?></h2>
   </div> 
</body>
</html>