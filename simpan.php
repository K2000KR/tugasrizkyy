<?php

include "koneksi.php";

$NomorIndukKependudukan		= $_POST['NomorIndukKependudukan'];
$NomorIndukSiswaNasional		= $_POST['NomorIndukSiswaNasional'];
$NomorPokokSiswaNasional	= $_POST['NomorPokokSiswaNasional'];
$Email	= $_POST['Email'];

$simpan = "INSERT INTO yandex(NomorIndukKependudukan,NomorIndukSiswaNasional,NomorPokokSiswaNasional,Email) VALUES ('$NomorIndukKependudukan' , '$NomorIndukSiswaNasional' , '$NomorPokokSiswaNasional', '$Email')";


$proses = mysqli_query ($conn, $simpan);

if($proses) {
	echo "BERHASIL";
}else{
	echo "Input data tidak berhasil";
	
}

?>