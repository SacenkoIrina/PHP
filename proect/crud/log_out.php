<?php
require_once('logare.php');

if(isset($_POST["logout"]))
{
unset($_SESSION["username"]);


header("Location:../categories.php");

}
?>