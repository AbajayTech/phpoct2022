<?php
//indexed array
$fruits=array("apple","oranges","mangoes","pineapples");  //array can contain strings,numbers,null,boolean
$fruits[1]="avocado";   //you can change an element on the array with the index
echo"I like eating $fruits[1]";
echo"<br>";
echo count($fruits);
echo"<br>";

echo "There are  " .count($fruits) . " elements in the array";

echo"<br>";
$car=array("Rolls Royce","1904","Rolls Royce Ghost","Pearl White");
echo"My dream car is the $car[0]<br>";
echo"It was first manufactured in $car[1]<br>";
echo"My favourite model is the $car[2]<br>";
echo"I love it in $car[3] color<br>";

echo"<br>";

//associative array
$majina=array("Erick"=>"20","Jane"=>30,'Daniel'=>"12");
echo"Jane is ".$majina['Jane']." Years old";  //use single quotes when calling the key
