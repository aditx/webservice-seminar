<?php
	$host='localhost';
	$uname='dev';
	$pwd='dev';
	$db="db_registrasi";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");

  $idTBL_T_SEMINAR = $_REQUEST['idTBL_T_SEMINAR'];

	if($r=mysql_query("DELETE FROM TBL_T_SEMINAR WHERE idTBL_T_SEMINAR = '$idTBL_T_SEMINAR'",$con))
	{
		$flag['res']="Delete Success";
    print(json_encode($flag));
	} else {
    $flag['res']="Delete Failed";
    print(json_encode($flag));
  }

	mysql_close($con);
?>
