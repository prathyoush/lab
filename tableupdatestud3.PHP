<html>
<head>
<style>
table,th,td {
             
             align:center;
            border:2px solid;
            text-align: center;
            padding:3px;
            border-collapse:collapse;


};
</style>
<title>
update and delete records
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
<th>Update</th>

</tr> 
<?php
$con=mysqli_connect("localhost","root","","bca23");
$sql="select * from stud3";
$res=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($res))
  {
  echo "<form  action=updatestud3.php  method=POST>";
  echo "<tr>";
  echo "<td>".$row['roll']."</td>";
  echo "<td><input type=text  name=sname value='".$row['name']."'></td>";
  echo "<td><input type=text size=2 name=m1 value='".$row['mark1']."'></td>";
  echo "<td><input type=text size=3 name=m2 value='".$row['mark2']."'></td>";
  echo "<td><input type=text size=4 name=m3 value='".$row['mark3']."'></td>";
  echo "<td><input type=text size=4 name=m4 value='".$row['mark4']."'></td>";
  echo "<td><input type=text size=4 name=m5 value='".$row['mark5']."'></td>";

  echo "<td><input type=hidden name=rollno value='".$row['roll']."'>";
  echo "<td><input type=Submit Value=Submit></td></tr></form>";

}

?>
</table>
</body>
</html>