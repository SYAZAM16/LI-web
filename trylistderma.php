<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');


include("dbconnect.php");


$q="SELECT ID_INFAK, JENIS_INFAK, DESCRIPTION, IMAGE FROM PISM_INFAK";
$sq=OCIParse($conn,$q);
$rs=OCIExecute($sq);
	if ($rs) {
	
		while ($x=oci_fetch_assoc($sq)) {
			$data[]=array("ID_INFAK"=>$x["ID_INFAK"], "JENIS_INFAK"=>$x["JENIS_INFAK"], "DESCRIPTION"=>$x["DESCRIPTION"], "IMAGE"=>$x["IMAGE"]);
		}
	}
	else {
		$data[]= array("ID_INFAK"=>"null", "JENIS_INFAK"=>"null", "DESCRIPTION"=>"null", "IMAGE"=>"null");
	}


$value = array(
    "message"=>"tEST LIST REKOD",
    "status"=>true,
	"data"=>$data);

$json2 = json_encode($value);

echo($json2);

?>