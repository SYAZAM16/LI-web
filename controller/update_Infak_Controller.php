<?php
    include_once "../config/dbconnect.php";

    $id_infak=$_POST['INFAK_ID'];
    $nama_infak= $_POST['NAMA_INFAK'];
    $description= $_POST['DESCRIPTION'];
    $total= $_POST['TOTAL'];
    $jenis_infak= $_POST['JENIS_INFAK'];

    if( isset($_FILES['newImage']) ){
        
        $location="./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir.$image);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }
    $updateItem = mysqli_query($conn,"UPDATE pism_infak SET 
        NAMA_INFAK='$nama_infak', 
        DESCRIPTION='$description', 
        TOTAL=$total,
        JENIS_INFAK=$jenis_infak,
        IMAGE='$image' 
        WHERE ID_INFAK=$id_infak");


    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>