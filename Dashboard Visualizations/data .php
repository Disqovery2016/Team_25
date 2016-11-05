<?php
$opt = $_GET['opt'];
if($opt == "xvalues")
	xvalues();
else if($opt == "y")
	yvalues();
else if($opt == "z")
	zvalues();
else if($opt == "l")
	longs(); 
function xvalues()
{
	$con1 = mysqli_connect("localhost","kowndinya","1234","table1");
	$result = mysqli_query($con1,"SELECT `COL 1` AS x FROM `table 1` WHERE `COL 1` NOT IN ('Accelerometer','X','Alert , drastic change in values')");
	$xarr = array();
	while($row = mysqli_fetch_array($result))
	{
		array_push($xarr,$row['x']);
	}
	
		echo json_encode($xarr,JSON_NUMERIC_CHECK);
}
function yvalues()
{
	$con1 = mysqli_connect("localhost","kowndinya","1234","table1");
	$result = mysqli_query($con1,"SELECT `COL 2` FROM `table 1` WHERE `COL 1` NOT IN ('Accelerometer','X','Alert , drastic change in values')");
	$xarr = array();
	while($row = mysqli_fetch_array($result))
	{
		array_push($xarr,$row['COL 2']);
	}
	
		echo json_encode($xarr,JSON_NUMERIC_CHECK);
}

function zvalues()
{
	$con1 = mysqli_connect("localhost","kowndinya","1234","table1");
	$result = mysqli_query($con1,"SELECT `COL 3` FROM `table 1` WHERE `COL 1` NOT IN ('Accelerometer','X','Alert , drastic change in values')");
	$xarr = array();
	while($row = mysqli_fetch_array($result))
	{
		array_push($xarr,$row['COL 3']);
	}
	
		echo json_encode($xarr,JSON_NUMERIC_CHECK);
}
function longs()
{
	$con1 = mysqli_connect("localhost","kowndinya","1234","table1");
	$result = mysqli_query($con1,"SELECT concat(`COL 4`,`COL 5`) as val FROM `table 1` WHERE `COL 1` NOT IN ('Accelerometer','X','Alert , drastic change in values')");
	$xarr = array();
	while($row = mysqli_fetch_array($result))
	{
		array_push($xarr,$row['val']);
	}
	
		echo json_encode($xarr,JSON_NUMERIC_CHECK);
}

?>