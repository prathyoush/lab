<?php
$server="localhost";
$user="root";
$pwd="";
$con=mysqli_connect("$server","$user","$pwd");
if(!$con)
{
echo " mysqli_error($con)";
}
else
{
echo "connected";
}