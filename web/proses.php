<?php
include_once("koneksi.php");
$id = isset($_GET['id']) ? $_GET['id'] : false;

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE RFID='$id' " );
if (mysqli_num_rows($query) == 0) {
  echo "Kartu Belum terdaftar";
  mysqli_query($koneksi, "INSERT INTO log VALUES('', '$id', 'Kartu Belum Terdaftar', now())" );
}else{
  $row = mysqli_fetch_assoc($query);
  $myObj = new \stdClass();
  $myObj->RFID = $row['RFID'];
  $myObj->Nama = $row['Nama'];
  $nama =  $row['Nama'];
  $Saldo = $row['Saldo'] - 10000;
  mysqli_query($koneksi,"UPDATE user SET Saldo='$Saldo' WHERE RFID='$id' AND $Saldo>0");
  mysqli_query($koneksi, "INSERT INTO log VALUES('', '$id', '$nama', now())" );
  $myObj->Saldo = $Saldo;
  $myJSON = json_encode($myObj);

  echo $myJSON;
}




 ?>
