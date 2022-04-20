<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:https://myproject45.000webhostapp.com/major-project/");
?>