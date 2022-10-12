<?php

//Assignment operator
$num=45;
$num+=89;
echo$num;
echo"<br>";

//comparison operator
$nambari=59;
$nambari2=65;
$nambari3=100;
$nambari4=27;

var_dump($nambari>=$nambari2 and $nambari3>$nambari4 );   // (& use for AND operator)   (! use for NOT)
var_dump($nambari>=$nambari2 or $nambari3>$nambari4 );    // (|| use for OR operator)

echo"<br>";
//increment/decrement of operators
$x=10;
echo$x;
echo"<br>";
$y=15;
echo++$y;      //add 1 to variable y and then echo the outcome
echo"<br>";
$z=20;
echo$z++;       //echo variable z and then add 1 afterwards
echo"<br>";
echo$z;       //echo variable z again gives you the incremented value now
echo"<br>";
$a=25;
echo--$a;     //minus 1 from variable a and the echo the outcome
echo"<br>";
$b=30;
echo$b--;    //echo variable b and then minus one afterwards
echo"<br>";
echo$b;      //echo variable b now gives the decremented value now
echo"<br>";

//string operators
//concatenation (.)
$txt1="Dark";
$txt2=" Chocolates!";
echo$txt1 . $txt2;
echo"<br>";
//concatenation assignment (.=)
$word1="My";
$word2=" Program";
$word1.=$word2;
echo$word1;


