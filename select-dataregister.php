<?php
  $host='localhost';
  $uname='dev';
  $pwd='dev';
  $db="db_registrasi";
  $response = array();
  $response["data_seminar"] = array();

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");

	$result = mysql_query("SELECT * FROM TBL_T_SEMINAR a left outer join TBL_M_SEMINAR b on a.idTBL_M_SEMINAR = b.idTBL_M_SEMINAR order by a.idTBL_T_SEMINAR desc", $con);

  while ($row = mysql_fetch_assoc($result)) {
    $tmp = array();
    $tmp["idTBL_T_SEMINAR"] = $row["idTBL_T_SEMINAR"];
    $tmp["idTBL_M_SEMINAR"] = $row["idTBL_M_SEMINAR"];
    $tmp["NAMA"] = $row["NAMA"];
    $tmp["ALAMAT"] = $row["ALAMAT"];
    $tmp["JENIS_KELAMIN"] = $row["JENIS_KELAMIN"];
    $tmp["KTP"] = $row["KTP"];
    $tmp["EMAIL"] = $row["EMAIL"];
    $tmp["NO_TELPON"] = $row["NO_TELPON"];
    $tmp["TANGGAL_REGISTRASI"] = $row["TANGGAL_REGISTRASI"];
    $tmp["TEMPAT_LAHIR"] = $row["TEMPAT_LAHIR"];
    $tmp["UKURAN_KAOS"] = $row["UKURAN_KAOS"];
    $tmp["NAMA_SEMINAR"] = $row["NAMA_SEMINAR"];

    array_push($response["data_seminar"], $tmp);
  }

  header('Content-Type: application/json');
	echo json_encode($response);

	mysql_close($con);
?>
