<?php
$server="localhost";
$user="root";
$pwd="";
$db="bca23";
$con=mysqli_connect("$server","$user","$pwd",$db);
if(!$con)
{
echo " mysqli_error($con)<br>";
}
else
{
echo "connected <br>";
}

$sql = 'CREATE TABLE stud3(roll integer, name varchar(20),mark1 integer,mark2 integer, mark3 integer,mark4 integer, mark5 integer)';  
if(mysqli_query($con, $sql)){  
 echo "table created  successfully";  
}else{  
echo "Could not create table: ". mysqli_error($con);  
}  
  
mysqli_close($con);  
?>  


