<?php
session_start();
include('db_config.php');
//echo $_GET['postdata'];
if(isset($_POST['formData']))
{
$frmresults = $_POST['formData'];
//echo $frmresults;
//print_r($frmresults);
$arr = explode("&",$frmresults);
$countsss = count($arr);
//echo $countsss;
foreach($arr as $test)
{
	//echo $test;
	$arr123 = explode("=",$test);
	foreach($arr123 as $a)
	{
		echo $a;
	}	
}

//echo $frmresults = explode("MANGESH",$_POST['formData']);
//echo $splittedstringg=explode("&",$frmresults);

}


?>