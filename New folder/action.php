<?php

$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$country = $_POST["country_name"];
$email = $_POST["email_address"];
$subject = $_POST["subject_detail"];

$db = mysqli_connect("localhost","root","","testdb");

if(!$db)
{
    die("Connection failed: ");
}

    $sql="INSERT INTO tblemp(First_name,Last_name,Country,Email,Subject) VALUES ('$firstname','$lastname','$country','$email','$subject')";
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

