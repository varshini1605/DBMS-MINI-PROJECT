<html>
<body bgcolor="orange">	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'college event') or die(mysqli_error());
$fn=$_REQUEST['Student_Name'];
$ln=$_REQUEST['USN'];
$ln1=$_REQUEST['STUDENT_UNIVERSITY'];
$mn=$_REQUEST['PHONE_NO'];
$mn1=$_REQUEST['EVENT_CODE'];
$query="INSERT INTO participant VALUES('$fn','$ln','$ln1','$mn','$mn1')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"data entered successfully:";

$var=mysqli_query($dbh,"SELECT * from participant"); 
echo"<table border_size=20>";
	
echo " <tr> <th>Student_name</th> <th>USN</th> <th>STUDENT_UNIVERSITY</th> 
<th> PHONE_NO</th> <th>EVENT_CODE</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td>
	 </tr>";
}
echo"</table>";
?>


<!--</html>
</body>
<form>
<p><a href="qwe.html"> click here:(Home page)</a></p>
</form>-->





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



<p></p>


<html>
<h2><center>YOU HAVE REGISTERED TO THE EVENT</h2></center>
<h3><center>THANK YOU</h3></center>
<form>
<p><center><a href="view2.php">Submit Another Response</a></center></p>
<p><center><a href="2.html">LOGOUT</a></center></p>
</form>
<body bgcolor="ORANGE">	
<!--<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'college event') or die(mysqli_error());
$var=mysqli_query($dbh,"SELECT * FROM event");
echo"<table border_size=20>";
	
echo " <tr> <th>Event_name </tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0] </td></tr>";
}
echo"</table>";
?>




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
  
</table>-->

</body>
</html>


