<?php
$marks=-20;
//if statement
if ($marks==50){
    echo"It is true";
}

echo"<br>";
//if...else
if ($marks>=50){
    echo"You have passed";
}else{
    echo"You have failed";
}

echo"<br>";

//if...elseif...else
if ($marks>=0 && $marks<=39){
    echo"You have failed";
}elseif($marks>=40 and $marks<=100){
    echo"You have passed";
}else{
    echo"wrong input";

}

echo"<br>";
$day="Friday";
if ($day=="Monday"){
    Echo"Wear official,Go to Work!";
}elseif($day=="Tuesday"){
    Echo"Wear official,Go to Work!";
}elseif($day=="Wednesday"){
    Echo"Wear official,Go to Work!";
}elseif($day=="Thursday"){
    Echo"Wear Smart Casual,Go to Work!";
}elseif($day=="Friday"){
    Echo"Wear African Attire,Go to Work!";
}elseif($day=="Saturday"){
    Echo"Wear casual,Enjoy the Weekend!";
}elseif($day=="Sunday"){
    Echo"Wear Decent Clothing,Go to Church!";
}else{
    echo"Do not wear clothes!";
}

echo"<br>";
//switch statement
$day="Sunday";
switch ($day){
    case"Monday":
        echo"Wear official,Go to Work!";
        break;
    case"Teusday":
        echo"Wear official,Go to Work!";
        break;
    case"Wednesday":
        echo"Wear official,Go to Work!";
        break;
    case"Thursaday":
        echo"Wear Smart Casual,Go to Work!";
        break;
    case"Friday":
        echo"Wear African Attire,Go to Work!";
        break;
    case"Saturday":
        echo"Wear African Attire,Go to Work!";
        break;
    case"Sunday":
        echo"Wear Decent Clothing,Go to Church!";
        break;
    default:
        echo"PLEASE WEAR CLOTHES";


}


