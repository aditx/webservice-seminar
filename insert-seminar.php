<?php
	$host='localhost';
	$uname='dev';
	$pwd='dev';
	$db="db_registrasi";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");

  $idTBL_M_SEMINAR = $_REQUEST['idTBL_M_SEMINAR'];
  $NAMA = $_REQUEST['NAMA'];
  $ALAMAT = $_REQUEST['ALAMAT'];
  $JENIS_KELAMIN = $_REQUEST['JENIS_KELAMIN'];
  $KTP = $_REQUEST['KTP'];
  $EMAIL = $_REQUEST['EMAIL'];
  $NO_TELPON = $_REQUEST['NO_TELPON'];
  $TANGGAL_REGISTRASI = $_REQUEST['TANGGAL_REGISTRASI'];
  $TEMPAT_LAHIR = $_REQUEST['TEMPAT_LAHIR'];
  $UKURAN_KAOS = $_REQUEST['UKURAN_KAOS'];

	if($r=mysql_query("INSERT INTO TBL_T_REGISTRASI VALUES('$idTBL_M_SEMINAR', '$NAMA',
                    '$ALAMAT', '$JENIS_KELAMIN', '$KTP', '$EMAIL', '$NO_TELPON',
                    '$TANGGAL_REGISTRASI', '$TEMPAT_LAHIR', '$UKURAN_KAOS')",$con))
  {
		$flag['res']="Insert Success";
    print(json_encode($flag));
	} else {
    $flag['res']="Insert Failed";
    print(json_encode($flag));
  }

	mysql_close($con);
?>
