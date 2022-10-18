<?php

$connect=new mysqli("localhost","root","","mit_sept2022");
//require'connect.php';  use this method if you have multiple files just call the connect page and proceed instead of rewriting code
if($connect->connect_error){
    die("Failed to connect !".$connect->connect_error);
}
$insert="INSERT INTO admin(firstname,lastname,email,reg_date)
values('Mercy','Wanjira','mercy@gmail.com','2022-10-03 04:23:12:98765')";

if($connect->query($insert)===TRUE){
    echo"New variable added successfully";
}else{
    echo"Error".$insert . "<br>,".$connect->error;
}
$connect->close();
