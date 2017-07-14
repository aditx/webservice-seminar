<?php
	$host='localhost';
	$uname='dev';
	$pwd='dev';
	$db="db_registrasi";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");

  $idTBL_T_SEMINAR = $_REQUEST['idTBL_T_SEMINAR'];
  $idTBL_M_SEMINAR = $_REQUEST['idTBL_M_SEMINAR'];
  $NAMA = $_REQUEST['NAMA'];
  $ALAMAT = $_REQUEST['ALAMAT'];
  $JENIS_KELAMIN = $_REQUEST['JENIS_KELAMIN'];
  $KTP = $_REQUEST['KTP'];
  $EMAIL = $_REQUEST['EMAIL'];
  $NO_TELPON = $_REQUEST['NO_TELPON'];
  $TEMPAT_LAHIR = $_REQUEST['TEMPAT_LAHIR'];

  $result = mysql_query("UPDATE TBL_T_SEMINAR SET idTBL_M_SEMINAR = '$idTBL_M_SEMINAR', NAMA = '$NAMA', ALAMAT = '$ALAMAT', KTP = '$KTP', EMAIL = '$EMAIL', NO_TELPON = '$NO_TELPON', TEMPAT_LAHIR = '$TEMPAT_LAHIR' WHERE idTBL_T_SEMINAR = '$idTBL_T_SEMINAR'", $con);
	if($result)
  {
		$flag['code']= $NAMA;
    print(json_encode($flag));
	} else {
    $flag['code']= "Update gagal";
    print(json_encode($flag));
  }

	mysql_close($con);
?>
