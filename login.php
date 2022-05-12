<?php
     $email = $_POST['email'];
     $password = $_POST['psw'];

     
     $conn = new mysqli($localhost, $root, '', $login);
     if($conn->connect_error){
     	die("Connection Failed : " . $conn->connect_error);
     }else{
     	$stmt = $conn->prepare("Insert into login_form(email,password)value(?,?)");
     	$stmt->bind_param("ss",$email,$password);
     	$stmt->execute();
     	echo "login successful..";
     	$stmt->close();
     }
?>


