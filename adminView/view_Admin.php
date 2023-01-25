<div >
  <h2>All Admin</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username </th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">Joining Date</th>
      </tr>
    </thead>
    <?php 
      include_once "../config/dbconnect.php";
      
    $sql="SELECT * from pism_admin";
      $st=oci_parse($conn,$sql);
      oci_execute($st);
    
     $count=1;
    
       while ($r2=oci_fetch_array($st)) {
      
    ?> 
    <tr> 
      <td><?=$count?></td>
      <td><?=$r2["EMAIL"]?></td>
      <td><?=$r2["NAME"]?></td>
      <td><?=$r2["PASSWORD"]?></td>
      <td></td>
      <td></td>
    </tr>
    <?php 
     $count=$count+1;
           
       } 
    //}
    ?>
  </table>