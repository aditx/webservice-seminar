<?php
  $host='localhost';
  $uname='dev';
  $pwd='dev';
  $db="db_registrasi";
  $response = array();
  $response["data_seminar"] = array();

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");

	$result = mysql_query("SELECT * FROM TBL_M_SEMINAR", $con);

  while ($row = mysql_fetch_assoc($result)) {
    $tmp = array();
    $tmp["idTBL_M_SEMINAR"] = $row["idTBL_M_SEMINAR"];
    $tmp["NAMA_SEMINAR"] = $row["NAMA_SEMINAR"];

    array_push($response["data_seminar"], $tmp);
  }

  header('Content-Type: application/json');
	echo json_encode($response);

	mysql_close($con);
?>
