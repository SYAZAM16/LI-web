<?php

    include_once "../config/dbconnect.php";
    
    $p_id=$_POST['record'];
    $query="DELETE FROM pism_infak where ID_INFAK='$p_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Infak Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>