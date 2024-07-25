<?php
include ("connection1.php");
$sql = "SELECT * FROM stud3";
$result=mysqli_query($con,$sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc())
 {
    echo "Roll Number: " , $row["roll"];
    echo "&nbsp Name &nbsp&nbsp         ", $row["name"];
 echo " &nbsp&nbsp Mark 1         ", $row["mark1"];
 echo "&nbsp Mark 2 &nbsp&nbsp         ", $row["mark2"];
 echo " &nbsp Mark 3 &nbsp&nbsp         ", $row["mark3"];

 echo "&nbsp Mark 4 &nbsp&nbsp", $row["mark4"];
  
 echo "&nbsp Mark 5 &nbsp&nbsp", $row["mark5"];
$tot=$row["mark1"]+$row["mark2"]+$row["mark3"]+$row["mark4"]+$row["mark5"];
echo "&nbsp Total &nbsp ",$tot, "<br>";
} 
}
else {
  echo "0 results";
}mysqli_close($con);
?>