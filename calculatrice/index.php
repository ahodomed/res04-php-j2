<?php
require "calculator.phtml";
$nombre1 = $_POST["nombre1"];
$nombre2 = $_POST["nombre2"];

if(isset($_POST["nombre1"]) && !empty($_POST["nombre1"])||isset($_POST["nombre2"]) && !empty($_POST["nombre2"]))
{
    echo $nombre1;
}

?>