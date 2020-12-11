
<html>
<body bgcolor="orange">	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'college event') or die(mysqli_error());
$fn=$_REQUEST['University_name'];
$ln=$_REQUEST['University_code'];
$ln1=$_REQUEST['University_phno'];
$mn=$_REQUEST['University_address'];
$mn1=$_REQUEST['Eventhead_code'];
$query="INSERT INTO University VALUES('$fn','$ln','$ln1','$mn','$mn1')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"data entered successfully:";
$var=mysqli_query($dbh,"SELECT * FROM University");
echo"<table border_size=20>";
	
echo " <tr> <th>University_name</th> <th>University_code</th> <th>University_phno</th> 
<th>University_address</th> <th>Eventhead_code</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> 
	 </tr>";
}
echo"</table>";
?>


</html>
</body>
<form>
<p><a href="admin home.html">Admin Home page</a></p>
</form>





<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>



<table style="width:100%">
  
</table>

</body>
</html>
