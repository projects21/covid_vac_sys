<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medic Care-Feed back</title>

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
<style>
    

      .container{
           
        margin: 0 auto;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: center;
        display: flex;
        flex-direction: row;
    }
    .card1{
        background-color: rgb(129, 209, 201);
        margin-top: 30px;
        box-shadow: 2px 2px 20px 2px rgba(0,0,0,0.5);
        width: 500px;
        height: 550px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .fancy {
  @supports (background-clip: text) or (-webkit-background-clip: text) {
    background-image: 
      url("data:image/svg+xml,%3Csvg width='2250' height='900' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg%3E%3Cpath fill='%2300A080' d='M0 0h2255v899H0z'/%3E%3Ccircle cx='366' cy='207' r='366' fill='%2300FDCF'/%3E%3Ccircle cx='1777.5' cy='318.5' r='477.5' fill='%2300FDCF'/%3E%3Ccircle cx='1215' cy='737' r='366' fill='%23008060'/%3E%3C/g%3E%3C/svg%3E%0A");
    background-size: 110% auto;
    background-position: center;
    color: transparent;
    -webkit-background-clip: text;
    background-clip: text;
  }
}
    #msg{
        height: 300px;
    }
    .box{
        margin: 0 auto;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: center;
        display: flex;
        flex-direction: row;

    }
    .text_area{
        margin-left: 20px;
        margin-right: 20px;
    }
.sel{
    width:190px;
    height:31px;
}
</style>
</head>
<body>
    
<?php
require_once 'nav.inc.php';
?>

<?Php
          require_once 'hero_sec.inc.php';
          ?>
<div class="container">
    <h1 class="fancy"><i>Share your valuable comments<br> regarding the staff and the hospital.</i></h1>
    <form action="ins_feedbck.php" method='POST'>
    <div class="card1">
        <h3><i>FEEDBACK FORM</i></h3> <br>
        
        <input type="text" placeholder="Full Name" name='r_name'> <br>
        <input type="email" placeholder="Email" name='r_mail'> <br>
        <select type="text" class='sel' name='r_st'>
                        
                        <option>Recovered</option>
                        <option>Almost Recovered</option>
                        <option>New patient </option>
                      </select> <br>
         
            <TEXTAREA class="text_area" rows="6" cols="50" name="commentfield" placeholder="Your text here...."></TEXTAREA> <br>
        <button type="submit" class="btn btn-primary btn-outline-light">Send Feedback</button><br>
       
        
    </div > 
    </form>
</div>

<section class="section-padding" id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-8 col-sm-12 mt-4">
                <h2 class="mb-lg-3 mb-3">Meet Dr. Suman</h2>

                <p>Protect yourself and others by wearing masks and washing hands frequently. Outdoor is safer than indoor for gatherings or holding events. People who get sick with Coronavirus disease (COVID-19) will experience mild to moderate symptoms and recover without special treatments.</p>

                <p>    <button class="btn btn-success btn-outline-light">Book an Appointment For Vaccination</button><br></p>
            </div>
            <div class='col-lg-6 col-md-4 col-sm-12'>
            <div class="card" style="width: 18rem;">
  <img src="images/gallery/r1.jpg" class="img-fluid card-img-top " alt="..." width='150px' height='150px'>
  <div class="card-body">
    <p class="card-text">"Cure is better than treatment" <br> Get vaccinated today !</p>
  </div>
</div>
            </div>


        </div>
    </div>
</section>

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