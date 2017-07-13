<?php
	$host='localhost';
	$uname='dev';
	$pwd='dev';
	$db="db_registrasi";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");


  $NAMA = $_REQUEST['NAMA'];
  $ALAMAT = $_REQUEST['ALAMAT'];

  $flag['code']=0;

  $result = mysql_query("INSERT INTO TBL_T_SEMINAR VALUES ('$NAMA', '$ALAMAT')", $con);
	if($result)
  {
		$flag['code']=1;
	}

  print(json_encode($flag));
	mysql_close($con);
?>
