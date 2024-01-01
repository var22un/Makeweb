<?php

$sarvername = "localhost";
$name = "root";
$passw = "";
$datab = "appointment_data";

$can = mysqli_connect($sarvername,$name,$passw,$datab);

if($can)
{
    //echo "ok";
}
else
{
    echo "no";
}

?>