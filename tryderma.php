<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');


include("dbconnect.php");


$id_infak = $_POST['id_infak'];
$total = $_POST['total'];
$jenis_infak= $_POST['jenis_infak'];
$nama_penderma= $_POST['nama_penderma'];
$phone_no= $_POST['phone_no'];

$stmt = "INSERT INTO PISM_DERMA (DERMA_DATE, JENIS_INFAK, TOTAL, ID_INFAK, NAMA_PENDERMA, PHONE_NO) VALUES 
			(sysdate, '$jenis_infak', '$total', '$id_infak', '$nama_penderma', '$phone_no')";

 	$s = oci_parse($conn, $stmt);
 	$r = oci_execute($s); 

$value = array(
    "message"=>"Rekod Masuk",
    "status"=>true);
   
// Use json_encode() function
$json = json_encode($value);

echo $json;






?>