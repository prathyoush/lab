<html>
<head>
<style>
table,th,td {
            border:2px solid;
            text-align: center;
            padding:3px;
            border-collapse:collapse;
           };
</style>
<title>
delete records from table
</title>
</head>
<body>
<h2 > STUDENT DETAILS</H3>
<table>
<tr>
 <th> Roll Number</th>
<th> Name  </th>
<th>Mark1</th>
<th>Mark2</th>
<th>Mark3</th>
<th>Mark4</th>
<th>Mark5</th>
<th>Delete</th>

</tr> 
<?php
$con=mysqli_connect("localhost","root","","bca23");
$sql="select * from stud3";
$res=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($res))
  {
  echo "<form  action=deletestud3.php  method=POST>";
  echo "<tr>";
  echo "<td>".$row['roll']."</td>";
  echo "<td>",$row['name'],"</td>";
  echo "<td>",$row['mark1'],"</td>";
  echo "<td>",$row['mark2'],"</td>";
  echo "<td>",$row['mark3'],"</td>";
  echo "<td>",$row['mark4'],"</td>";
  echo "<td>",$row['mark5'],"</td>";

  echo "<td><input type=hidden name=rollno value='".$row['roll']."'>";
  echo "<td><input type=Submit Value=Delete></td></tr></form>";

}

?>
</table>
</body>
</html>