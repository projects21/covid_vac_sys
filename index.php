<?php
require_once 'config.php';
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
    
    <body id="top">
    
        <main>

          <?Php
          require_once 'nav.inc.php';
          ?>

           <?Php
          require_once 'hero_sec.inc.php';
          ?>
    

            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="mb-lg-3 mb-3">Meet Dr. Zain</h2>

                            <p>Protect yourself and others by wearing masks and washing hands frequently. Outdoor is safer than indoor for gatherings or holding events. People who get sick with Coronavirus disease (COVID-19) will experience mild to moderate symptoms and recover without special treatments.</p>

                            <p>If you're ill with COVID-19 , you can help prevent the spread of the COVID-19 virus. Stay home from work, school and public areas unless it's to get medical care. Protect your family and yourself.</p>
                        </div>

                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                            <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                                <p class="featured-text"><span class="featured-number">12</span> Years<br> of Experiences</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="gallery">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-6 ps-0">
                            <img src="images/gallery/medium-shot-man-getting-vaccine.jpg" class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
                        </div>

                        <div class="col-lg-6 col-6 pe-0">
                            <img src="images/gallery/female-doctor-with-presenting-hand-gesture.jpg" class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="timeline">
                <div class="container">
                    <div class="row">

                        <h2 class="text-center mb-lg-5 mb-4">Our Timeline</h2>
                        
                        <div class="timeline">
                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Get the vaccine</h3>
                                    
                                    <p>Be loyal to you and your family health. Book the appointment for vaccine now. <button class="btn btn-primary btn-outline-light mt-3">Book an Appointment For Vaccination</button></p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-patch-check-fill timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-07-31 Saturday</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Covid-19 Hospitals</h3>

                                    <p class="mb-0 pb-0">The time is now when it becomes the most previous time in a person’s life. These are people that you can trust, because caring about others is what makes them all so great.</p>
                                    
                                    <p>Providing facility of vaccination in different hospitals. For looking a hospital nearby you.   <button type="button" href="booking.html" class="mt-2 btn btn-primary btn-outline-light ">Hospitals</button></p>

                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-globe timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-05-30 Sunday</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Certified Nurses</h3>

                                    <p>Our facilities, and especially our amazing staff, gave you excellent care and made you about as comfortable as you could be! You find everyone friendly, kind and caring from the moment you will enter.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-file-medical timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-06-28 Monday</time>
                                </div>
                            </div>

                       

                        
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="reviews">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Our Patients</h2>

                            <div class="owl-carousel reviews-carousel">

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Best Health Care</strong></p>

                                    <p class="reviews-text w-100">The staff was very cooperative and doctors were gentle and hospital is clean.</p>

                                    <img src="images/reviews/beautiful-woman-face-portrait-brown-background.jpeg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Marie</strong>

                                        <span class="text-muted">Patient</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Doctor cares everyone!</strong></p>

                                    <p class="reviews-text w-100">The care and hospitality is very incredible besides healty treatment , tests & consultations for my father.</p>

                                    <img src="images/reviews/senior-man-wearing-white-face-mask-covid-19-campaign-with-design-space.jpeg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Ben Walker</strong>

                                        <span class="text-muted">Recovered</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Great services!</strong></p>

                                    <p class="reviews-text w-100">The staff was outstanding. Everything was crystal and care since I entered and left.</p>

                                    <img src="images/reviews/portrait-british-woman.jpeg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Laura Zono</strong>

                                        <span class="text-muted">New Patient</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Best Advices</strong></p>

                                    <p class="reviews-text w-100">Very good Hospital. All staff member were very helpful and humble including doctors. </p>

                                    <img src="images/reviews/woman-wearing-mask-face-closeup-covid-19-green-background.jpeg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Rosey</strong>

                                        <span class="text-muted">Almost Recovered</span>
                                    </figcaption>
                                </figure>
                               
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                            
                                <form role="form" action="#booking" method="post">
                                    <div class="row">
                       


                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                           <a href='booking.php'> <button type="button" class="form-control" id="submit-button">Book Now</button></a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>
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