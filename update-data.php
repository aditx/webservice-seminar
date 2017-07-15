<?php
	$host='localhost';
	$uname='dev';
	$pwd='dev';
	$db="db_registrasi";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");

  $idTBL_T_SEMINAR = $_REQUEST['idTBL_T_SEMINARs'];
  $idTBL_M_SEMINAR = $_REQUEST['idTBL_M_SEMINARs'];
  $NAMA = $_REQUEST['NAMAs'];
  $ALAMAT = $_REQUEST['ALAMATs'];
  $JENIS_KELAMIN = $_REQUEST['JENIS_KELAMINs'];
  $KTP = $_REQUEST['KTPs'];
  $EMAIL = $_REQUEST['EMAILs'];
  $NO_TELPON = $_REQUEST['NO_TELPONs'];
  $TEMPAT_LAHIR = $_REQUEST['TEMPAT_LAHIRs'];

  $result = mysql_query("UPDATE TBL_T_SEMINAR SET idTBL_M_SEMINAR = '$idTBL_M_SEMINAR', NAMA = '$NAMA', ALAMAT = '$ALAMAT', KTP = '$KTP', EMAIL = '$EMAIL', NO_TELPON = '$NO_TELPON', TEMPAT_LAHIR = '$TEMPAT_LAHIR' WHERE idTBL_T_SEMINAR = '$idTBL_T_SEMINAR'", $con);
	if($result)
  {
		$flag['code']= "Update sukses";
    print(json_encode($flag));
	} else {
    $flag['code']= "Update gagal";
    print(json_encode($flag));
  }

	mysql_close($con);
?>
