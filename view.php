$var=mysqli_query($dbh,"SELECT * FROM event ");
echo"<table border_size=20>";
	
echo " <tr><th>Event_name</th><th>EVENT_CODE</th><th>Date</th><th>Time</th> 
<th>University_code
</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> 
	 </tr>";
}
echo"</table>";
?>