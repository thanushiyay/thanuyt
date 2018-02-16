<?php

$sn="localhost";
$un="root";
$p="";
$db="entry";
$conn=mysqli_connect($sn,$un,$p,$db);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}

?>