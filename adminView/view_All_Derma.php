<div id="ordersBtn" >
  <h2>Derma</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Bil</th>
        <th>ID_Derma</th>
        <th>Tarikh</th>
        <th>Jenis_Infak</th>
        <th>Jumlah</th>
        <th>ID_Infak</th>
        <th>Nama Penderma</th>
        <th>Phone Number</th>
        <th>Phone Model</th>
        <th>Phone Manufacture</th>
        <th>Phone OS</th>
        <th>Bank Name</th>
        <th>Bank Date</th>
        
        <th>Status Transaksi</th>
     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from pism_derma";
      
      $st=oci_parse($conn,$sql);
      oci_execute($st);
    

     $count=1;
      
     while ($r2=oci_fetch_assoc($st)) {
    ?>
       <tr>
       <td><?=$count?></td>
          <td><?=$r2["ID_DERMA"]?></td>
          <td><?=$r2["DERMA_DATE"]?></td>
          <td><?=$r2["JENIS_INFAK"]?></td>
          <td><?=$r2["TOTAL"]?></td>
          <td><?=$r2["ID_INFAK"]?></td>
          <td><?=$r2["NAMA_PENDERMA"]?></td>
          <td><?=$r2["PHONE_NO"]?></td>
          <td><?=$r2["PHONE_MODEL"]?></td>
          <td><?=$r2["PHONE_MANUFACTURE"]?></td>
          <td><?=$r2["PHONE_OS"]?></td>
          <td><?=$r2["BANK_NAME"]?></td>
          <td><?=$r2["BANK_DATE"]?></td>
          <td><?=$r2["STATUS_TRANSAKSI"]?></td>
          
           <?php 
     
     /*
                if($row["order_status"]==0){
                            
            ?>
                <td><button class="btn btn-danger" onclick="ChangeOrderStatus('<?=$row['order_id']?>')">Pending </button></td>
            <?php
                        
                }else{
            ?>
                <td><button class="btn btn-success" onclick="ChangeOrderStatus('<?=$row['order_id']?>')">Delivered</button></td>
        
            <?php
            }
                if($row["pay_status"]==0){
            ?>
                <td><button class="btn btn-danger"  onclick="ChangePay('<?=$row['order_id']?>')">Unpaid</button></td>
            <?php
                        
            }else if($row["pay_status"]==1){
            ?>
                <td><button class="btn btn-success" onclick="ChangePay('<?=$row['order_id']?>')">Paid </button></td>
            <?php
                }
            ?>
              
        <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachOrder.php?orderID=<?=$row['order_id']?>" href="javascript:void(0);">View</a></td>
        </tr>
    <?php
            */
        }
      
    ?> 
     
  </table>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script> 