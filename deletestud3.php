<?php
$con=mysqli_connect("localhost","root","","bca23");
$sql="select * from stud3";
IF ($con)
{
 echo "connected";
}

$sql = "DELETE FROM  stud3  WHERE roll='$_POST[rollno]'";
echo $sql;
$res=mysqli_query($con,$sql);
mysqli_close($con);
if ($res)
{
 header ("refresh:1;url=tabledeletestud3.php");
} 
else
{ 
echo "record not deleted";
}
?>