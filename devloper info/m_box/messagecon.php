<?php

$sarvername = "localhost";
$name = "root";
$passw = "";
$datab = "message_form";

$cann = mysqli_connect($sarvername,$name,$passw,$datab);

if($cann)
{
   // echo "ok";
}
else
{
    echo "no";
}

?>