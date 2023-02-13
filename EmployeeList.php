<html>
    <head><title>Empoyee list</title></head>
    <body bgcolor="grey">
        <center>
            <h2>Employee list</h2>
            <table width="1000" cellspacing="0" border="1">
                <tr bgcolor="yellow">
                    <th>Sr.No.</th><th>Employee Code</th><th>Employee Name</th><th>Employee Post</th>
                    <th>Employee Address</th><th>Employee City</th><th>Contact Number</th>
                    <th>E Mail Address</th>

                </tr>
<?php
$count=1;
$con=mysql_connect("localhost","root","");
mysql_select_db("empdb",$con);
$query="select * from emp_info";
$res=mysql_query($query);
while($row=mysql_fetch_array($res))
{
    echo"<tr><td>".$count."</td><td>".$row['ecode']."</td> <td>".$row['ename']."</td><td>".$row['epost']."</td><td>".$row['eadd']."</td><td>".$row['ecity']."</td><td>".$row['econt']."</td><td>".$row['email']."</td></tr>";
    $count++;
}

?>
            </table>
        </center>
        
    </body>
</html>