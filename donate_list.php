
<?php 
include("connection.php");
    $getdonarlist = mysqli_query($con,"SELECT * FROM `payment_list` ORDER BY id DESC" );
    $array = Array();
    while($result = $getdonarlist->fetch_assoc()){

        
        
        $array[] = $result;
    }

    print_r($array);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <!-- Css-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/vegas.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/css/agrikol_iconl.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<style type="text/css">
     .owl-nav{display: none;}
        .desk_hide{display: none;}
       @media only screen and (max-width: 767px){.mob_hide{display: none !important;}}
       /*new*/
h3{
        color: #d62444 !important;
}
p{
    color: #72523f;
}



</style>
<body class="com_bg">

   <!--  <div class="preloader">
        <img src="assets/images/loader.png" class="preloader__image" alt="">
    </div> -->
    <!-- /.preloader -->

    <div class="page-wrapper">

            <!-- Header Include -->
        <?php include 'header.php';?>
        <!-- Header Include -->

        <section class="page-header" style="background-image: url(assets/images/main-slider/banner.png);padding: 10%;">
            <div class="container">
                <!-- <h2>About</h2> -->
                
            </div>
        </section>

        <section class="about_two">
            <div class="container">

                <div class="block-title text-center title-boxs">
                    
                    <h3 style="padding-bottom: 10px;">Donar List</h3>
                    <!-- <p>The Hindu Temple is a place of worship for devotees of the All religion</p> -->
                    <div class="leaf">
                        <img src="assets/images/resources/leaf.png" alt="">
                    </div>
                </div>



                <div class="row">
                   <!--  <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="block-title text-left">
                            
                            <h3>SreeKollapuriamman Temple</h3>
                            <div class="leaf">
                                <img src="assets/images/resources/leaf.png" alt="">
                            </div>
                        </div>
                    </div> -->
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="about_two_text">
                        <table id="customers">
                    <tr>
                     <th>S.No</th>
                     <th>Name</th>
                     <th>Address</th>
                      <th>Amount</th>
                 </tr>
                   <tr>
                     <td>1</td>
                     <td>Maria Anders</td>
                     <td>Germany</td>
                      <td>Rs: 250</td>
                 </tr>
                </table>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>

      
    

       
           
    <!-- footer Include -->
    <?php include 'footer.php';?>
     <!-- footer Include -->



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/typed-2.0.11.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.bxslider.min.js"></script>
    <script src="assets/js/appear.js"></script>

    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>
</body>

</html>