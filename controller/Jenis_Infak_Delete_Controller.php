<?php

    include_once "../config/dbconnect.php";
    
    $c_id=$_POST['record'];
    $query="DELETE FROM jenis_infak where JENIS_INFAK='$c_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Jenis Infak Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>