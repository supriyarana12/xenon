<?php

$email = $_POST["username"];
$pswd = $_POST["pwd1"];

$db = mysqli_connect("localhost","root","","testdb");

if(!$db)
{
    die("Connection failed: ");
}

    $sql="INSERT INTO signup(Email_address,Password) VALUES ('$email','$pswd')";
    $result=mysqli_query($db,$sql);
 
 if(!$result)
 {
    echo mysqli_error();
 }
 else
 {
   echo "records added successfully.";
 }
 header("location:http://localhost/New%20folder/home.php");
mysqli_close($db);

?>
