
<html>
<body bgcolor="orange">	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'college event') or die(mysqli_error());
$fn=$_REQUEST['Coordinator_name'];
$ln=$_REQUEST['Coordinator_usn'];
$ln1=$_REQUEST['Phone_no'];
$query="INSERT INTO Coordinator VALUES('$fn','$ln','$ln1')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"data entered successfully:";
$var=mysqli_query($dbh,"SELECT * from Coordinator");
echo"<table border_size=20>";
	
echo " <tr> <th>Coordinator_name</th> <th>Coordinator_usn</th> <th>Phone_no</th> 
</tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td>
	 </tr>";
}
echo"</table>";
?>


</html>
</body>
<form>
<p><a href="admin home.html"> Admin Home page</a></p>
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
