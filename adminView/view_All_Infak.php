
<div >
  <h2>Infak</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Bil</th>
        <th class="text-center">Image</th>
        <th class="text-center">Nama Infak</th>
        <th class="text-center">Penerangan</th>
        <th class="text-center">Jenis Infak</th>
        <th class="text-center">Jumlah(RM)</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      
      $sql="SELECT * from pism_infak ";
      $st=oci_parse($conn,$sql);
      oci_execute($st);
      
      $count=1;
      
      while ($r2=oci_fetch_assoc($st)) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$r2["IMAGE"]?>'></td>
      <td><?=$r2["NAMA_INFAK"]?></td>
      <td><?=$r2["DESCRIPTION"]?></td>      
      <td><?=$r2["NAMA_INFAK"]?></td> 
      <td><?=$r2["TOTAL"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['ID_INFAK']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['ID_INFAK']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Tambah Infak
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"> 
        <div class="modal-header">
          <h4 class="modal-title">Infak Baru</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="NAMA_INFAK">Nama Infak:</label>
              <input type="text" class="form-control" id="NAMA_INFAK" required>
            </div>
            <div class="form-group">
              <label for="TOTAL">Jumlah(RM):</label>
              <input type="number" class="form-control" id="TOTAL" required>
            </div>
            <div class="form-group">
              <label for="DESCRIPTION">Penerangan:</label>
              <input type="text" class="form-control" id="DESCRIPTION" required>
            </div>
            <div class="form-group">
              <label>Jenis Infak:</label>
              <select id="jenis_infak" >
                <option disabled selected>Pilih Jenis Infak</option>
                <?php

                  $sql="SELECT * from jenis_infak";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['JENIS_INFAK']."'>".$row['NAMA_INFAK'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   