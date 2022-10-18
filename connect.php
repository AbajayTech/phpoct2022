<?php  //standard way to connect php code to database
//$myserver="localhost";
//$myusername="root";
//$password="";
//$connect=new mysqli($myserver,$myusername,$password);

//shortcut
$connect=new mysqli("localhost","root","","mit_sept2022");

if($connect->connect_error){
    die("Failed to connect !" .$connect->connect_error);
}else{
    echo"You have successfully connected !";
}
