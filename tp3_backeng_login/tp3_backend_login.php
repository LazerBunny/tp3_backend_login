<?php
$usuario=$_POST ["user"];
$contra=$_POST ["pass"];

$nombre="nana";
$pase="dino123";

if ($usuario==$nombre & $contra==$pase){
    header ("location:https://lazerbunny.github.io/BrizuelaNadia_Potrero/");
}
else {
    header ("location:tp3_backend_error.html");
}
?>