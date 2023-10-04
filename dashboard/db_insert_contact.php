<?php 

if(isset($_POST['name'])){
    $db_connect=new mysqli("localhost","root","","website");
   
    $name =$_POST['name'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];
    $insert_data = "INSERT INTO contact ( name, email, subject, message) VALUES ('$name', '$email' ,'$subject','$message')";
    $data=$db_connect->query($insert_data);
   //
   // header("Location:index.php");

}


?>