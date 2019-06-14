<html>
<body background="69246225-electric-wallpapers.jpg">
</body>
</html>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("computerdetails",$con);
$sql="select dept,count(*) from comdetails where prtype='$_POST[prtype]' group by dept";
$res=mysql_query($sql,$con);
echo "<center>";
echo "<table bgcolor=white border=1>";
echo "<tr><th>DEPARTMENT</th><th>COUNT OF PROCESSOR</th></tr>";
while($row=mysql_fetch_array($res))
{
echo "<tr><td>".$row['dept']."</td><td>".$row['count(*)']."</td></tr>";
}
echo "</table>";
echo"</center>";
?>