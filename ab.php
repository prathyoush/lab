<?php

{
echo "<h2> Student details are </h2><br>";
$roll=$_POST["roll"];
echo  "Roll Number ", $roll,"<br>";
$name=$_POST["name"];
echo "Name  ",$name,"<br>";
$mark1=$_POST["mark1"];
echo " Mark1  ", $mark1,"<br>";
$mark2=$_POST["mark2"];
echo " Mark2  ", $mark2,"<br>";
$tot=$mark1+$mark2;
echo " Total  Marks ", $tot;
}
?>
