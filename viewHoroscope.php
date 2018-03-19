<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){ 
if (isset($_SESSION["horoscope"]))
{
    echo $_SESSION["horoscope"];
    exit();
}
}
?>