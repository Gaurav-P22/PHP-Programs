<?php
$ar=array(1,3,2,4,5,-1,4,-5,9,7,-3,3,-5,8,1);
$evesum=0;
$negeve=0;
$oddsum=0;
$negodd=0;
foreach($ar as $value)
{
if($value>0&& $value%2==0)
{
   
    $evesum=$evesum+$value;
}
elseif($value>0&& $value%2==1)
{
    
    $oddsum=$oddsum+$value;
}
elseif($value<0&& $value%2==1)
{
    $negodd=$negodd+$value;
}
else
{
    $negeve=$negeve+$value;
}
}
echo"<br>The Sum of positive even integer Numbers:= $evesum";
echo"<br>The Sum of positive odd integer Numbers:= $oddsum";
echo"<br>The Sum of negative even Numbers:= $negeve";
echo"<br>The Sum of negative odd Numbers:= $negodd";
$arrLength=count($ar);
echo"".$arrLength;
echo "The size of the array".count($ar);
?>