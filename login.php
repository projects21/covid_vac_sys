<?php
require_once 'config.php';
require_once 'function.inc.php';
if(isset($_POST['login'])){
  $mail=get_val_save($con,$_POST['p_mail']);
  $pass=get_val_save($con,$_POST['p_pass']);

  $pat_login="SELECT * FROM patients WHERE p_mail='{$mail}' AND p_pass='{$pass}'";
  $res_login=mysqli_query($con,$pat_login);
  $tot_rows=mysqli_num_rows($res_login);

  if($tot_rows!=0){
    while($data=mysqli_fetch_assoc($res_login)){
      $_SESSION['pat_name']=$data['p_name'];
      $_SESSION['pat_email']=$data['p_mail'];
      
      echo "<script>window.location.href='http://localhost/covid_vac_sys/medic-care/index.php';</script>";
    }
  }
  else{
    echo "<script>alert('Email or Password is inncorrect')</script>";
  }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Medic Care Bootstrap 5 CSS Template</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/owl.theme.default.min.css" rel="stylesheet">

        <link href="css/templatemo-medic-care.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    #profile{
        margin-left: 20px;
    }
</style>
   
</head>
<body>
  <?php
  require_once 'nav.inc.php';
  require_once 'hero_sec.inc.php';
  ?>
<div class="container">
    <div class="row">
        <h2 class="text-primary">Validate the form for account access</h2>
        <div class="col-7">
            <form>
               
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form2Example1" class="form-control" name='p_mail' />
                  <label class="form-label" for="form2Example1">Email address</label>
                </div>
              
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form2Example2" class="form-control" name='p_pass'/>
                  <label class="form-label" for="form2Example2">Password</label>
                </div>
              
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                 
                  </div>
              
                  
                </div>
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4"  name='login'>Sign in</button>
              
                <!-- Register buttons -->
                <div class="text-center">
                  <p>Not a member? <a href="#!">Register</a></p>
            
              
                  <button type="button" class="btn btn-link btn-floating mx-1">
                 
                  </button>
                </div>
              </form>
        </div>
    </div>
</div>
<?php
  require_once 'footer.inc.php';
  ?>
         

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>