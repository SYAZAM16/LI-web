
<div >
  <h3>Category Items</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Kategori Infak</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      
      $sql="SELECT * from JENIS_INFAK";
      $st=oci_parse($conn,$sql);
      oci_execute($st);
      
      $count=1;
      
      while ($r2=oci_fetch_array($st)) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$r2["NAMA_INFAK"]?></td>   
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
      <td><button class="btn btn-danger" style="height:40px" onclick="categoryDelete('<?=$row['JENIS_INFAK']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Tamab Kategori
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Kategori Baru</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/add_Jenis_Controller.php" method="POST">
            <div class="form-group">
              <label for="NAMA_INFAK">Nama Kategori:</label>
              <input type="text" class="form-control" name="NAMA_INFAK" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Tambah Infak</button>
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
   