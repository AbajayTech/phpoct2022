<?php
//while loop
$nambari=10;
while($nambari<=20){
    echo "The number is $nambari<br>";
    $nambari++;

}
echo"<br>";

$nambari2=100;
while($nambari>=0){
    echo "The number is $nambari<br>";
    $nambari+=-10;

}
echo"<br>";
//do while loop

$nambari3=15;
do{
    echo"nambari zangu ni $nambari3<br>";
    $nambari3++;
}while($nambari3<=20);
echo"<br>";


$nambari4=160;
do{
    echo"nambari yangu ni $nambari4<br>";
    $nambari4+=-20;
}while($nambari4>=0);

echo"<br>";
//for loop
for ($nambari5=0; $nambari5<=100; $nambari5+=10){
    echo"This is a number for loop $nambari5<br>";
}

echo"<br>";
//for each loop

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";         //output the values of the given array
}

echo"<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
    echo "$x = $val<br>";                      //output both the keys and the values of the given array
}

