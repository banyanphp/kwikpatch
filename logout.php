<?php
session_start();
if (isset($_SESSION['username']))
{
	
	session_destroy();
	header("Location:product-categories.php");
}
else
{
	header("Location:login.php");
}