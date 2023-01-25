<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $ProductName = $_POST['NAMA_INFAK'];
        $desc= $_POST['DESCRIPTION'];
        $price = $_POST['TOTAL'];
        $category = $_POST['JENIS_INFAK'];
       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO pism_infak
         (NAMA_INFAK,IMAGE,TOTAL,DESCRIPTION,JENIS_INFAK) 
         VALUES ('$ProductName','$image',$price,'$desc','$category')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>