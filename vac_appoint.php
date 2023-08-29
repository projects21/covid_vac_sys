<?php
require_once 'config.php';
$hsp_id=$_GET['id'];
$fetch_hosp="SELECT*FROM hospitals WHERE hospital_id='{$hsp_id}'";
$res_hsp=mysqli_query($con,$fetch_hosp);
$total_row=mysqli_num_rows($res_hsp);
$vac_dt="SELECT * FROM vaccine_detail";
$res_vac=mysqli_query($con,$vac_dt);
$tot_rows=mysqli_num_rows($res_vac);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Medic Care-A vaccine booking website</title>

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
    <body id='top'>
    <?Php
          require_once 'nav.inc.php';
          ?>

           <?Php
          require_once 'hero_sec.inc.php';
          ?>

<section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                            
                                <form role="form" action="ins_vac_app.php" method="GET">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 ">
                                         
                                        <select name="" id=""  class='form-control'>
                                        <?php
                                          if($tot_rows!=0){
                                            while($data=mysqli_fetch_assoc($res_vac)){
                                          ?>
                                            <option><a href='ins_vac_app.php?vac=<?php echo $data['vac_code']?>'><?php echo $data['vac_name']?></a></option>
                                            <?php
                                            }}
                                            ?>
                                        </select>
                                        </div>
                                           

                                        <div class="col-lg-6 col-12">
                                            <input type="date" name="date" id="date" value="" class="form-control">
                                            
                                        </div>
                                        
                                         <?php 
                                         if($total_row!=0){
                                         while($dt=mysqli_fetch_assoc($res_hsp)){
                                         ?>
                                        <div class="col-lg-6 col-12">
                                           <input type="text"  class="form-control"  disabled  value='<?php echo $dt['hospital_name']?>' name='hosp'>
                                        </div>
                                        <?php
                                         }}
                                        ?>
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="cnic" id="name" class="form-control" placeholder="CNIC" required>
                                        </div>


                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" id="submit-button">Book Now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
          </div>

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>