<?php
$con=mysqli_connect("localhost","root","","bca23");
$sql="select * from stud3";
IF ($con)
{
 echo "connected";
}

$sql = "UPDATE stud3 SET name='$_POST[sname]',mark1='$_POST[m1]',mark2='$_POST[m2]' ,mark3='$_POST[m3]',mark4='$_POST[m4]',mark5='$_POST[m5]' WHERE roll='$_POST[rollno]'";
echo $sql;
$res=mysqli_query($con,$sql);
mysqli_close($con);
if ($res)
{
 //header ("refresh:1;url=tableupdatestud3.php");//
} 
else
{ 
echo "record not deleted";
}
?>