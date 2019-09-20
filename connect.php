<?php
$con = pg_connect("host=localhost dbname=yadav user=postgres");
if($con == null)
echo "Connection failed";
else
echo "Connected";
function getMaxid($tablename)
{
	$max = "select max(id) from user_details;";
	$result = pg_query($max);
	$row = pg_fetch_array($result);
	return $row[0];
}

?>
