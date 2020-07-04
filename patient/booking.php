<?php
include('../config.php');
echo "success";exit;
if(!empty($_POST)){
    $sql = " INSERT INTO booking (name,email,phone,message,status, created_time,created_date,modified_time,modified_date) VALUES ('" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["phone"] . "','" . $_POST["message"] . "', '1','" .date('H:i') . "','". date("Y-m-d") . "','". date('H:i') . "','". date("Y-m-d") .  "' )";
if ($conn->query($sql) === TRUE){
   echo "success";exit;
}else {
    echo "error";
}
$conn->close();
}
?> 

