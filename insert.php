<html>
<head>
<center>
<font color=white>
INSERT DETAILS
</font>
</head>
<body background="69246225-electric-wallpapers.jpg">
<form action="" method=POST>
<table>
<tr><td><font color=blue>Processor Type</td><td><input type="text" name=prtype></td></tr>
<tr><td><font color=blue>Speed</td><td><input type="text" name=spd></td></tr>
<tr><td><font color=blue>Ram Size</td><td><input type="text" name=rsize></td></tr>
<tr><td><font color=bluee>Hard disk Size</td><td><input type="text" name=hsize></td></tr>
<tr><td><font color=blue>Department</td><td><input type="text" name=dept></td></tr>
<tr><td></td><td><input type="submit" value="INSERT" name=btnsubmit></td></tr>
</table>
</center>
</form>
</body>
</html>
<?php
if (isset($_POST["btnsubmit"]))
{
$con=mysql_connect("localhost","root","");
mysql_select_db("computerdetails",$con);
$sql="insert into comdetails values('$_POST[prtype]',$_POST[spd],$_POST[rsize],$_POST[hsize],'$_POST[dept]')";
echo $sql;
mysql_query($sql,$con);
}

?>