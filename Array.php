<?php
echo"The Numbers:- ";
$ar=array(10,20,30,40,50,60,70,80,90,100);
$sum=0;
foreach($ar as $value)
{
    $sum=$sum+$value;
    echo"$value ";
}
echo"<br><br>The Sum of the array: ".$sum;
$avg=$sum/10;
echo"<br>The Average of the array: ".$avg;

?>