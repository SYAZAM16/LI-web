<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $namaInfak = $_POST['NAMA_INFAK'];
       
         $insert = mysqli_query($conn,"INSERT INTO jenis_infak
         (NAMA_INFAK) 
         VALUES ('$namaInfak')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../home.php?category=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../home.php?category=success");
         }
     
    }
        
?>