<?php
  require_once 'config.php';
  require_once 'function.inc.php';
  $ftch_vac="SELECT*FROM vaccine_detail";
$res_vac=mysqli_query($con,$ftch_vac);
$tot_rows=mysqli_num_rows($res_vac);

if(isset($_GET['type']) && $_GET['type']!=''){

  $type=get_val_save($con,$_GET['type']);
  $operation=get_val_save($con,$_GET['operation']);

  if($type=='status'){
    $c_id=get_val_save($con,$_GET['cid']);
    if($operation=='active'){
      $status=1;
    }
    else{
      $status=0;
    }

    $update_status="UPDATE vaccine_detail SET Vac_status='{$status}' WHERE vac_code='{$c_id}'";
    $res_vc=mysqli_query($con,$update_status);
    if($res_vc){
      echo "<script>window.location.href='http://localhost/covid_vac_sys/admin/view_vac.php'</script>";
    }
  }
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Simple Tables</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
  <?php
  require_once 'sidebar.inc.php'
  ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php
  require_once 'header.inc.php'
  ?>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vaccine-Details Table</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Vaccine Table</h6>
                  <a href="add_vaccine.php"><input type="button" value='Add Vaccine' class='px-3 text-white btn btn-dark btn-outline-primary'></a> 
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Vaccine Code</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                  if($tot_rows!=0){
                    while($data=mysqli_fetch_assoc($res_vac)){
                  
                  ?>
                      <tr>
                
                        <td><?php echo $data['vac_code']?></td>
                        <td><?php echo $data['vac_name']?></td>
                        <td>
                        <?php
                          if($data['Vac_status']==1){
                          ?>  
                        <a class='btn btn-sm btn-primary' href='?type=status&operation=deactive&cid=<?php echo $data['vac_code']?>' class='text-white'>Active</a>
                        <?php
                          }
                          else{
                            ?> 
                            <a class='btn btn-sm btn-danger' href='?type=status&operation=active&cid=<?php echo $data['vac_code']?>' class='text-white'>Deactive</a>
                            <?php
                          } 
                           ?>
                      </td>
                       
                        <td><a href="del_vac.php?del=<?php echo $data['vac_code']?>" class="btn btn-sm btn-danger">Delete</a>
                     
                      </td>
                    
                      </tr>
                      <?php
                    }}
                      ?>
                 
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>