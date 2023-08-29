<?php
require_once 'config.php';
$fetch_hosp="SELECT * FROM hospitals";
$res_hosp=mysqli_query($con,$fetch_hosp);
$tot_rows=mysqli_num_rows($res_hosp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking-Medic_care</title>
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
<body>

   
<?Php
          require_once 'nav.inc.php';
          ?>

           <?Php
          require_once 'hero_sec.inc.php';
          ?>

    <div class="container mt-2">
    <h2 class="text-center mb-lg-5 mb-4">--Select the hospital-- </h2>
    <p class='text-center'>First choose the name of hospital where you are convinient to go for vaccination.</p>
        <div class="row">
        <?php
                if($tot_rows!=0){
                    while($data=mysqli_fetch_assoc($res_hosp)){
                ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card mt-3 mb-4">
                    <div class="card-body">
                    <img src="images/gallery/<?php echo $data['Hosp_img']?>" width="220px" height="150px">
                </div>
                    <div class="card-footer">
                        <h4><a href="vac_appoint.php?id=<?php echo $data['hospital_id']?>"><?php echo $data['hospital_name']?></a></h4>
                      </div>
                </div>
            </div>
            <?php
                    }};
                ?>
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