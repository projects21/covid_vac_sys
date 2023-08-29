<?php
require_once 'config.php';
$fetch_hosp="SELECT * FROM hospitals";
$res_hosp=mysqli_query($con,$fetch_hosp);
$tot_rows=mysqli_num_rows($res_hosp);
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
  <title>RuangAdmin - Form Basics</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
<?php
require_once 'sidebar.inc.php';
?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php
        require_once 'header.inc.php';
        ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Basics</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Form Basics</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
             

              <!-- Form Sizing -->
             

              <!-- Horizontal Form -->
              <div class="card mb-4 py-3 d-flex flex-row align-items-center justify-content-between">
               
                <div class="card-body">
                  <form method='GET' action='ins_pt.php'>
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Patient id</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" value='<?php echo rand(120,2100)?>' name='p_id'>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Patient name" name='p_nm'>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name='p_mail'>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name='p_pass'>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Phone No.</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter a phone number" name='p_ph'>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">DOB</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" id="inputEmail3" placeholder="Date of Birth" name='dob'>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Age</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="Patient's Age" name='p_age'>
                      </div>
                    </div>

                    
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Gender</label>
                      <div class="col-sm-9">
                      <select class="form-control mb-3" name='p_gen'>
                        
                    <option>Male</option>
                    <option>Female</option>
                 
                  </select>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-5 col-form-label">Hospital</label>
                      <div class="col-sm-7">
                      <select class="form-control mb-3">
                        <?php
                        if($tot_rows!=0){
                           while($data=mysqli_fetch_assoc($res_hosp)){
                        ?>
                    <option><a href='ins_pt.php?hosp_id=<?php echo $data['hospital_id']?>'><?php echo $data['hospital_name']?></a></option>
                    <?php
                           }}
                    ?>
                  </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-4 col-form-label">Image</label>
                      <div class="col-sm-8">
                      <input type="File" class="form-control" id="exampleInput" placeholder="Your image" name='p_img'>
                      </div>
                    </div>
                    
                
                    <div class="form-group row">
                      <div class="col-sm-10 px-4">
                        <button type="submit" class="btn btn-primary">Add Patient</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <!-- General Element -->
          
              <!-- Input Group -->
        
            </div>
          </div>
          <!--Row-->

          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
                  target="_blank">
                  bootstrap forms documentations.</a> and <a
                  href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                  groups documentations</a></p>
            </div>
          </div>

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