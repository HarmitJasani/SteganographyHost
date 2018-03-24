<?php 
session_start();
function loggedin()
{
	if(isset($_SESSION['user_name']))
	{
		$loggedin=TRUE;
		return $loggedin;
	}
}
?>