<html>
<head></head>
<body>
<form action="#">
<label>Input The Last Number </label>
<input type="text" name="Number1">
<br>
<br>
<input type="Submit" name="btn" value="Press Here">
</form>
<?php
$a=$_REQUEST['Number1'];
if(isset($_GET['Number1']));
{
    for($n=1;$n<=$a;$n++)
    {
        echo"<div style='color: Orangered; font-style :Italic;'>$n</div> ";
    }
}
?>
</body>

</html>