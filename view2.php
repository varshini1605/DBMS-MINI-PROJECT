<html>
<h2><ceneter>EVENT DETAILS</h2></center>
<body bgcolor="ORANGE">	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'college event') or die(mysqli_error());
$var=mysqli_query($dbh,"SELECT * FROM event");
echo"<table border_size=20>";
	
echo " <tr> <th>Event_name</th> <th>EVENT_CODE</th> <th>Date</th> 
<th> Time</th> <th>University_code</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> 
	<td>$arr[4]</td> </tr>";
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
  
</table>

</body>
</html>



<!--<form>
<p><a href="qwe.html"> Back</a></p>
</form>-->










<html>
<head>
<body bgcolor="orange">



<FORM METHOD="POST" ACTION="backend.php">
<!--<h1><center>Branch details</h1>
<h2>For office(only):</h2>-->
<!--<h1><center>STUDENT DETAILS</h1>-->
<h2>Participant registration:</h2>

<TABLE BORDER="1">
  <TR>
    <TD>Student_Name</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="Student_Name" SIZE="20">
    </TD>
  </TR>
  <TR>
    <TD>USN</TD>
    <TD><INPUT TYPE="TEXT" NAME="USN" SIZE="25"></TD>
  </TR><TR>
<TD>STUDENT_UNIVERSITY</TD>


   <TD><INPUT TYPE="TEXT" NAME="STUDENT_UNIVERSITY" SIZE="25"></TD>
</TR>
  



</TR>
<TR>
    <TD>PHONE_NO</TD>
    <TD><INPUT TYPE="NUMBER" NAME="PHONE_NO" SIZE="25"></TD>
  </TR>


  <TR>
    <TD>EVENT_CODE</TD>
    <TD><INPUT TYPE="NUMBER" NAME="EVENT_CODE" SIZE="25"></TD>
  </TR>




</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" ></P>
</FORM>

<p><a href="backend.html"> </a></p>
</form>
</html>
</head>
</body>







