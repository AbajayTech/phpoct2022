<?php

//this is my first variable
//manipulation of variables assigned as strings
$jina="Abajila ";
//two different variables(they are case-sensitive)
$JINA="eMOBILIS";
//datatypes
$jina2="Ray";
$fullname=$jina.$jina2;
echo$fullname;
echo "<br>";
echo"my first name is  $jina2 and my second name is ". $jina;
echo"<br>";

$nambari=567;
$nambari2=567.4567;
$bool=true;
var_dump($jina2);
echo"<br>";
var_dump($nambari);
echo"<br>";
var_dump($nambari);
echo"<br>";
var_dump($bool);


//manipulation of variables assigned as numbers
$numb1="10";
$numb2="5";
$sum=$numb1+$numb2;
echo"<br>";
echo"The sum is ".$sum;       //this is sum
echo"<br>";
$product=$numb1*$numb2;
echo"The product is ".$product;      //this is product
echo"<br>";
$subtraction=$numb1-$numb2;
echo"The outcome is ".$subtraction;    //this is subtraction
echo"<br>";
$division=$numb1/$numb2;
echo"The quotient is ".$division;      //this is quotient
echo"<br>";
$modulo=$numb1%$numb2;
echo"The modulo is ".$modulo;       //this is modulus
echo"<br>";
$exponential=$numb1**$numb2;
echo"The exponential is ".$exponential;     //this is exponential

//array
$myarray=array("Ray",452,23.456,true,false,null);      //this is arrayed
echo"<br>";
var_dump($myarray);
echo"<br>";
//printing array
print_r($myarray);