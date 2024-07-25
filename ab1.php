<HTML>
<BODY>
<?php
include ("connection1.php");
$roll=$_REQUEST["roll1"];
$nam=$_REQUEST["name"];
$m1=$_REQUEST["mark1"];
$m2=$_REQUEST["mark2"];
$m3=$_REQUEST["mark3"];
$m4=$_REQUEST["mark4"];
$m5=$_REQUEST["mark5"];
$sql ="INSERT INTO stud3 (roll,name,mark1,mark2,mark3,mark4,mark5) VALUES ($roll,'$nam',$m1,$m2,$m3,$m4,$m5)";  
$res=mysqli_query($con,$sql);
if ($res)
{
 echo "record inserted successfully";
 header ("refresh:1;url=tabledeletestud3.php");
} 
else
{ 
echo "record not inserted";
}

?>

</BODY>
</HTML>


