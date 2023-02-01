<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;">Hello, Admin</h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    
    <a href="./home.php" ><i class="fa fa-home"></i> Dashboard</a> 

    <a href="./adminView/view_Admin"  onclick="showCustomers()" ><i class="fa fa-users"></i> Admin</a>
    
    <a href="./adminView/view_Jenis_Infak"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Kategori Infak</a>
    
    <a href="./adminView/view_All_Infak"   onclick="showProductItems()" ><i class="fa fa-th"></i> Infak</a>
     
    <a href="./adminView/view_All_Derma" onclick="showOrders()"><i class="fa fa-list"></i> Derma</a>

    

  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>


