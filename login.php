<?php
$insert = false;
if(isset($_POST['fname'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    
    //create the database connection
    $con = mysqli_connect($server, $username, $password);
    
    //check for connection success
    if(!$con){
        die("connection to this database failed due to".
        mysqli_connect_error());
    }
    //echo "success connecting to the db";

    //collect post variables
    $fname= $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $date = $_POST['date'];
    $sql = "INSERT INTO `sign-in page`.`sign-in` (`fname`, `lname`, `email`, `password`, `phone`, `address`, `pincode`, `date`) VALUES ('$fname', '$lname', '$email', '$password', '$phone', '$address', '$pincode', '$date')";
    //echo $sql;

    //execute the query
    if($con->query($sql) == true){
       
       // echo "successfully inserted";

        //Flag for successfull insertion
        $insert =true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    //close the database connection
    $con->close();
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link rel="stylesheet" href="style.css">
   

    <style>
body{
    /* background-image: url(Image3.jpeg); */
    background: linear-gradient(  #79a7d3, #8a307f, #6883bc);
    background-repeat: no-repeat;
    background-size: 2000px 1000px;
}
h1{
    color: #ff523b
}
h2{
    color: rgb(38, 133, 161);
}
.container{
   
    background: conw,,,ii999ic-gradient(#f69d3c, #3f87a6);
    border-radius: 35px;
    width: 700px;
    height: 850px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    margin: auto;
    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body >
    <div class="box1"><h1> <center> Welcome To Red Shop </center></h1>
    
</div>
    
    
<div class="container">
    <h3>
<form action="login.php" method="POST">
    <div>
<label for ="fname">First Name</label>
<input type="text" id="fname" name="fname" require placeholder="Enter your name here">
</div>
<br>
<div>w
<label for="lname">Last Name</label>
<input type="text" id="lname" name="lname" require placeholder="Enter surname here">
</div>
<br>
<div>
<label for="email">E-Mail</label>
<input type="email" id="email" name="email" require placeholder="Enter E-Mail here">
</div>
<br>
<div>
<label for="password">Password</label>
<input type="password" id="password" name="password" require placeholder="Enter Password here">
</div>
<br>
<div>
<label for="phone">Contact</label>
<input type="tel" id="phone" name="phone" require placeholder="0000000000"
pattern="[0-9]{10}">
</div>
<br>
<div>
<label for="address">Address</label>
<input type="text" id="address" name="address" require placeholder="Enter your Address here">
</div>
<br>
<div>
<label for="pincode">Pincode</label>
<input type="text" id="pincode" name="pincode" require placeholder="Enter Pincode Here">
</div>
<br>
<div>
<label for="date">Today's Date</label>
<input type="date" id="date" require name="date">
</div>
<input type="submit" class="btn" value="Sign-In">
<br>
<?php
if ($insert == true){
    echo "<p  class='submitmsg'>Thanks for Sign-in. Welcome to Red Shop.Enjoy!!!</p>";
}
?>
 </form>
    </h3>
</div>
</body>
</html>