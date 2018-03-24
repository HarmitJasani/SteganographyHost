<?php
require("connect.php");
include("function.php");
if(!loggedin())
{
	header("Location: index.php");
	exit();
}
error_reporting(0);
session_start();
session_destroy();
header("Location: index.php");

?>