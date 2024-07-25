<html>
<head>
<title>
data input
</title>
</head>
<body>
<form  method  ="POST">
Roll Number
<input type="text" name="roll"><br><br>
Name 
<input type="text" name="name"><br><br>
Mark 1
<input type="text" name ="mark1"><br><br>
Mark 2
<input type="text" name ="mark2"><br><br>
<input type= "SUBMIT">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$roll=$_POST["roll"];
echo  "Roll Number ", $roll,"<br>";
$name=$_POST["name"];
echo "Name  ",$name,"<br>";
$mark1=$_POST["mark1"];
echo " Mark1  ", $mark1,"<br>";
$mark2=$_POST["mark2"];
echo " Mark2  ", $mark2,"<br>";
$tot=$mark1+$mark2;
echo " Total  ", $tot;
}
?>

</body>
</html>
