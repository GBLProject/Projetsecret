
<?php
require_once "./objet_tableau.php";

session_start();
$light = new objet_tableau(5,5);
$_SESSION["light"]= $light;

header("location: ./index.php");