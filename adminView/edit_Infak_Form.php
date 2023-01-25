
<div class="container p-5">

<h4>Edit Infak</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM pism_infak WHERE ID_INFAK='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["JENIS_INFAK"];
?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="ID_INFAK" value="<?=$row1['ID_INFAK']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" id="NAMA_INFAK" value="<?=$row1['NAMA_INFAK']?>">
    </div>
    <div class="form-group">
      <label for="desc">Product Description:</label>
      <input type="text" class="form-control" id="DESCRIPTION" value="<?=$row1['DESCRIPTION']?>">
    </div>
    <div class="form-group">
      <label for="price">Unit Price:</label>
      <input type="number" class="form-control" id="TOTAL" value="<?=$row1['TOTAL']?>">
    </div>
    <div class="form-group">
      <label>Category:</label>
      <select id="JENIS_INFAK">
        <?php
          $sql="SELECT * from jenis_infak WHERE JENIS_INFAK='$catID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['JENIS_INFAK'] ."'>" .$row['NAMA_INFAK'] ."</option>";
            }
          }
        ?>
        <?php
          $sql="SELECT * from jenis_infak WHERE JENIS_INFAK!='$catID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['JENIS_INFAK'] ."'>" .$row['NAMA_INFAK'] ."</option>";
            }
          }
        ?>
      </select>
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["IAMGE"]?>'>
         <div>
            <label for="file">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['IMAGE']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Infak</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>