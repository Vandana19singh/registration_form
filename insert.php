<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $country = $_POST['country'];
     $phone = $_POST['phone'];
     $password = $_POST['password'];
     $sql = "INSERT INTO users (name,email,country,phone,password)
     VALUES ('$name','$email','$country','$phone','$password')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>