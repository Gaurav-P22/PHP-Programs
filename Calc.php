<html>
    <head>

    </head>
    <body>
         <center>
             <div>
        <form action="#">
        Enter First No
         <input type="number" name="First">
                <br>
Enter Second Number<input type="Number" name="Second">
<br>
Enter Choice Number Btn 1,2,3,4 : <input type="Number" name="Third">
<input type="Submit" name="Addition">
        </form>
             </div>
  </center>
  <?php
$a =$_REQUEST['First'];
$b=$_REQUEST['Second'];
$c=$_REQUEST['Third'];

if(isset($_GET['First']))
{
switch($c)
{
case 1:
    $d=$a+$b;
    echo"<br> Addition=".$d;
    break;
    case 2:
        $d=$a-$b;
        echo"<br> Substraction=".$d;
        break;
        case 3:
            $d=$a*$b;
            echo"<br>Multiplication=".$d;
break;
case 4:
    $d=$a/$b;
            echo"<br>Divide=".$d;
            break;
            default: echo"Wrong Choice";

}
}

  ?>
       
        </body>
    </html>