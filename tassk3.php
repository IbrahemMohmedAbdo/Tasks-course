<?php

$name=$_POST["name"];
$email= $_POST["email"];
$pass =$_POST["pass"];
$address=$_POST["address"];
$linkedin=$_POST["linkedin"];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(preg_match("/^([a-zA-Z' ]+)$/",$name)){
        echo $name;
       } 
       else{echo "Enter string only";}

       echo $email;
           
              if(strlen($pass)>=6)
{
    echo $pass;
} else{
    echo "too small";
}

if (strlen($address)>=10)
{
    echo $address;
}

echo $linkedin;


}




















    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="page.php" method="post" >
    <br>
    <input type="text" placeholder="Enter Username" name="name" required><b>Username</b>
    <br>
    <input type="email" placeholder="Enter Email" name="email" required><b>Email</b>
    <br>
    <input type="password" placeholder="Enter Your Pass" name="pass" required><b>Password</b>
    <br>
    
    <input type="text" placeholder="Enter Your Address" name="address" required><b>Address</b>
   
    <br>
    <input type="email" placeholder="Enter Your linkedin" name="linkedin" required><b>LinkedIn</b>
<br>
    <button type="submit" name="signup">Sign Up</button>




</form>
</body>
</html>




