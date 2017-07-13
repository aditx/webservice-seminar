<?php
	$host='localhost';
	$uname='dev';
	$pwd='dev';
	$db="db_registrasi";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");


  $NAMA = $_REQUEST['NAMA'];

  $flag['code']=0;

  $result = mysql_query("INSERT INTO test VALUES ('$NAMA')", $con);
	if($result)
  {
		$flag['code']=1;
	}

  print(json_encode($flag));
	mysql_close($con);
?>
