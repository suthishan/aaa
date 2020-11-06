<?php require_once "constants.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <!-- <link rel="manifest" href="assets/images/favicons/site.webmanifest"> -->

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



.owl-nav {
    display: none;
}

.desk_hide {
    display: none;
}

@media only screen and (max-width: 767px) {
    .mob_hide {
        display: none !important;
    }
    .desk_hide{display: block !important;}
}

/*new*/
h3 {
    font-size: 24px !important;
}

p {
    color: #72523f;
}

.red {
    color: #d62444 !important;
}

.white {
    color: white !important;
}
</style>



<!-- fORM wIZARD -->

<!-- BASE CSS -->
<link href="regi/style.css" rel="stylesheet">
<link href="regi/responsive.css" rel="stylesheet">
<link href="regi/all_icons_min.css" rel="stylesheet">
<link href="regi/grey.css" rel="stylesheet">


<style type="text/css">
/*custom radio*/
.hide {
    display: none;
}
</style>


<link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css'>
<link rel="stylesheet" href="regi/radio/style.css">
<!-- fORM Wizard -->


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

                    <h3 class="red" style="padding-bottom: 10px;">Contribute</h3>
                    <p>IS A GREATEST ACHIEVEMENT AND AN ASSET OF HINDU COMMUNITY IN THE AREA. YOUR CONTRIBUTION HELPS
                        THE ORGANIZATION TO SERVE OUR COMMUNITY BETTER. PLEASE TAKE THE STEP TODAY.</p>
                    <div class="leaf">
                        <img src="assets/images/resources/leaf.png" alt="">
                    </div>
                </div>

                <div id="form_container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div id="left_form">
                                <!-- <figure><img src="img/registration_bg.svg" alt=""></figure> -->
                                <h2 class="mob_hide">Donation</h2>
                                 <h2 class="desk_hide" style="text-align: center;">Donation</h2>

                                <p class="desk_hide" style="text-align: center;"><img src="assets/images/amman/logo.png"></p>
                                <p  class="mob_hide" style="color: white;">IS A GREATEST ACHIEVEMENT AND AN ASSET OF HINDU COMMUNITY IN
                                    THE AREA. YOUR CONTRIBUTION HELPS THE ORGANIZATION TO SERVE OUR COMMUNITY BETTER.
                                    PLEASE TAKE THE STEP TODAY.</p>
                                <a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i
                                        class="pe-7s-info"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-7">

                            <div id="wizard_container">
                                <div id="top-wizard">
                                    <div id="progressbar"></div>
                                </div>
                                <!-- /top-wizard -->
                                <!-- <form> -->
                                <form name="razorpay_frm_payment" class="razorpay-frm-payment" id="razorpay-frm-payment"
                                    method="post">
                                    <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="12345">
                                    <input type="hidden" name="language" value="EN">
                                    <input type="hidden" name="currency" id="currency" value="INR">
                                    <input type="hidden" name="surl" id="surl"
                                        value="http://192.168.60.251/amman/success.php">
                                    <input type="hidden" name="furl" id="furl"
                                        value="http://192.168.60.251/amman/failed.php">


                                    <!-- Leave for security protection, read docs for details -->
                                    <div id="middle-wizard">

                                        <div class="step">
                                            <h3 class="main_question"><strong>1/3</strong>I Would Like to Give?</h3>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- partial:index.partial.html -->
                                                    <div class="section over-hide z-bigger">
                                                        <div class="section over-hide z-bigger">
                                                            <div class="container">
                                                                <div class="row justify-content-center pb-0">
                                                                    <div class="" style="text-align: center;">

                                                                        <input type="text" class="form-control"
                                                                            id="amount" name="amount"
                                                                            placeholder="Enter amount" value="">

                                                                        <input class="checkbox-tools required"
                                                                            type="radio" value="10" required=""
                                                                            onclick="show1(this);" name="tools"
                                                                            id="tool-1" checked>
                                                                        <label class="for-checkbox-tools" for="tool-1">
                                                                            <!-- <i class='uil uil-line-alt'></i> -->
                                                                            ₹10
                                                                        </label>
                                                                        <!--
                        --><input class="checkbox-tools" type="radio" value="50" name="tools" onclick="show1(this);"
                                                                            id="tool-2">
                                                                        <label class="for-checkbox-tools" for="tool-2">
                                                                            <!-- <i class='uil uil-vector-square'></i> -->
                                                                            ₹50
                                                                        </label>
                                                                        <!--
                        --><input class="checkbox-tools" type="radio" value="100" name="tools" onclick="show1(this);"
                                                                            id="tool-3">
                                                                        <label class="for-checkbox-tools" for="tool-3">
                                                                            <!-- <i class='uil uil-ruler'></i> -->
                                                                            ₹100
                                                                        </label>
                                                                        <!--
                        --><input class="checkbox-tools" type="radio" value="250" name="tools" onclick="show1(this);"
                                                                            id="tool-4">
                                                                        <label class="for-checkbox-tools" for="tool-4">
                                                                            <!-- <i class='uil uil-crop-alt'></i> -->
                                                                            ₹250
                                                                        </label>
                                                                        <!--
                        --><input class="checkbox-tools" type="radio" value="500" name="tools" onclick="show1(this);"
                                                                            id="tool-5">
                                                                        <label class="for-checkbox-tools" for="tool-5">
                                                                            <!-- <i class='uil uil-brush-alt'></i> -->
                                                                            ₹500
                                                                        </label>
                                                                        <!--
                        --><input class="checkbox-tools" type="radio" name="tools" onclick="show2();" id="tool-6">
                                                                        <label class="for-checkbox-tools" for="tool-6"
                                                                            style="font-size: 12px;
    padding-left: 12px;">
                                                                            <!-- <i class='uil uil-image-resize-landscape'></i> -->
                                                                            Others
                                                                        </label>

                                                                        <div class="container hide" id="div1">
                                                                            <div class="row">
                                                                                <div class="col-md-12"><br>
                                                                                    <div class="form-group">
                                                                                        <input
                                                                                            style="background: #fecc1e2e;border: 2px solid #fda30e;"
                                                                                            type="text" name="Message"
                                                                                            class="form-control"
                                                                                            placeholder="Enter Amount">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                        name="billing_name"
                                                                                        class="form-control required"
                                                                                        id="billing-name"
                                                                                        Placeholder="Name" required>

                                                                                    <!-- <input type="text" name="firstname" class="form-control required" placeholder="First name"> -->
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" name="lastname"
                                                                                        id="lastname"
                                                                                        class="form-control required"
                                                                                        placeholder="Last name">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /row -->

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="email" name="email" id="billing-email"
                                                                                        class="form-control required"
                                                                                        placeholder="Your Email">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" id="billing-phone"
                                                                                        name="billing-phone"
                                                                                        class="form-control required"
                                                                                        placeholder="Your Phone Number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /row -->

                                                                        <div class="row">

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <select
                                                                                        class="form-control required"
                                                                                        name="state" id="state">
                                                                                        <option value="" selected="">
                                                                                            Select your State</option>
                                                                                        <option value="Europe">Europe
                                                                                        </option>
                                                                                        <option value="Asia">Asia
                                                                                        </option>
                                                                                        <option value="North America">
                                                                                            North America</option>
                                                                                        <option value="South America">
                                                                                            South America</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <select
                                                                                        class="form-control required"
                                                                                        name="city" id="city">
                                                                                        <option value="" selected="">
                                                                                            Select your City</option>
                                                                                        <option value="Europe">Europe
                                                                                        </option>
                                                                                        <option value="Asia">Asia
                                                                                        </option>
                                                                                        <option value="North America">
                                                                                            North America</option>
                                                                                        <option value="South America">
                                                                                            South America</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /row -->

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <input type="text" name="Message"
                                                                                        id="message"
                                                                                        class="form-control"
                                                                                        placeholder="Your Message">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /row -->
                                                                        <div class="row">
                                                                            <div class="col-md-12" style="text-align: center;">
                                                                               <!--  <div class="form-group terms">
                                                                                    <input name="terms" type="checkbox"
                                                                                        class="icheck required"
                                                                                        value="yes"> -->
                                                                                    <label><a href="#"
                                                                                            data-toggle="modal"
                                                                                            data-target="#terms-txt"><i class="pe-7s-info"></i> Terms
                                                                                            and Conditions</a></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="padding-top: 12px;padding-bottom: 12px;">
                                                                            <div class="col"
                                                                                style="text-align: center;">
                                                                                <button type="button"
                                                                                    style="position: relative;width: 165px;min-height: 49px;font-size: 16px;font-weight: bold;line-height: 20px;float: right;border-radius: 0;text-align: center;color: #fff;background-color: rgb(243,43,86);color: #fff !important;border: none;;"
                                                                                    class=""
                                                                                    id="razor-pay-now"><i
                                                                                        class="fa fa-credit-card"
                                                                                        aria-hidden="true"></i>
                                                                                    Pay</button>
                                                                            </div>

                                                                        </div>
                                                                         <div class="row" style="text-align: center;">
                                                                            <div class="col">
                                                                             <img style="width: 50%;" id="fin-logo" alt="pay-methods" src="https://cdn.razorpay.com/static/assets/pay_methods_branding.png">
                                                                         </div></div>
                                                                    </div>
                                                                     <!-- <div style="clear: both;">&nbsp;</div> -->
                                                                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>

                                        <!-- /step-->
                                    </div>




                                </form>
                            </div>
                            <!-- /Wizard container -->
                        </div>
                    </div><!-- /Row -->
                </div><!-- /Form_container -->

            </div>
        </section>





        
       
        <!-- footer Include -->
    <?php include 'footer.php';?>
     <!-- footer Include -->



<!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                </div>
               <!--  <div class="modal-footer">
                    <button type="button" class="btn_1" data-dismiss="modal">Close</button>
                </div> -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal info -->
    <div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="more-infoLabel">Frequently asked questions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                </div>
               <!--  <div class="modal-footer">
                    <button type="button" class="btn_1" data-dismiss="modal">Close</button>
                </div> -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

<!--  -->
    <!-- <script src="regi/jquery-3.5.1.min.js"></script> -->
    <!-- Common script -->
    <script src="regi/common_scripts.js"></script>
    <!-- Wizard script -->
    <!-- <script src="regi/questionare_wizard_func.js"></script> -->

    <!-- <script src="regi/functions.js"></script> -->
<!--  -->

    <script type="text/javascript">
    window.onload = function() {
        document.getElementById('amount').value = '10';
    }
    $(document).ready(function() {
        document.getElementById('amount').value = '10';
    });

    function show1(selectObject) {
        var value1 = selectObject.value;
        document.getElementById('amount').value = value1;
        document.getElementById('div1').style.display = 'none';
    }

    function show2() {
        document.getElementById('div1').style.display = 'block';
    }
    </script>
    <!-- fORM wIZARD -->
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

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="assets/js/checkout.js"></script> -->
<!-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script> -->
<!-- <script>





$('body').on('click', 'razor-pay-now', function(e){



var totalAmount = $(this).attr("data-amount");
var product_id =  $(this).attr("data-id");
var options = {
"key": "rzp_live_ILgsfZCZoFIKMb", // secret key id
"amount": (1*100), // 2000 paise = INR 20
"name": "Tutsmake",
"description": "Payment",
"image": "//www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
"handler": function (response){
$.ajax({
url: 'https://www.tutsmake.com/Demos/php/razorpay/payment-proccess.php',
type: 'post',
dataType: 'json',
data: {
razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
}, 
success: function (msg) {
window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
}
});
},
"theme": {
"color": "#528FF0"
}
};
var rzp1 = new Razorpay(options);
rzp1.open();
e.preventDefault();







});
</script> -->



<script type="text/javascript">

$("button").click(function(e) {
    e.preventDefault();

    var total = (jQuery('form#razorpay-frm-payment').find('input#amount').val() * 100);
    var merchant_order_id = jQuery('form#razorpay-frm-payment').find('input#merchant_order_id').val();
    var merchant_surl_id = jQuery('form#razorpay-frm-payment').find('input#surl').val();
    var merchant_furl_id = jQuery('form#razorpay-frm-payment').find('input#furl').val();
    var card_holder_name_id = jQuery('form#razorpay-frm-payment').find('input#billing-name').val();
    var card_holder_lastname = jQuery('form#razorpay-frm-payment').find('input#lastname').val();
    var card_holder_message = jQuery('form#razorpay-frm-payment').find('input#message').val();
    // var card_holder_telephone = jQuery('form#razorpay-frm-payment').find('input#telephone').val();


    var merchant_total = total;
    var merchant_amount = jQuery('form#razorpay-frm-payment').find('input#amount').val();
    var currency_code_id = jQuery('form#razorpay-frm-payment').find('input#currency').val();
    var key_id = "<?php echo RAZOR_KEY_ID; ?>";
    var store_name = 'Kolla Puri Amman';
    var store_description = 'Payment';
    var store_logo = 'assets/images/amman/logo.png';
    var email = jQuery('form#razorpay-frm-payment').find('input#billing-email').val();
    var phone = jQuery('form#razorpay-frm-payment').find('input#billing-phone').val();
    var e = document.getElementById("state");
    var e1 = document.getElementById("city");
    var strUser = e.value;
    var strcity = e1.value;

    if (card_holder_name_id == "") {
        jQuery('input#billing-name').after('<small class="text-danger">Please enter full mame.</small>');
        return false;
    }
    if (card_holder_lastname == "") {
        jQuery('input#lastname').after('<small class="text-danger">Please enter last mame.</small>');
        return false;
    }
    if (email == "") {
        jQuery('input#billing-email').after('<small class="text-danger">Please enter valid email.</small>');
        return false;
    }
    if (phone == "") {
        jQuery('input#billing-phone').after('<small class="text-danger">Please enter valid phone.</small>');
        return false;
    }


    $.ajax({
        type: "POST",
        url: "send_payment.php",
        data: { 
            razorpay_payment_id: "1",
            merchant_order_id: merchant_order_id,
            merchant_surl_id: merchant_surl_id,
            merchant_furl_id: merchant_furl_id,
            card_holder_name_id: card_holder_name_id,
            card_holder_lastname: card_holder_lastname,
            card_holder_email: email,
            card_holder_phone: phone,
            merchant_total: merchant_total,
            merchant_amount: merchant_amount,
            currency_code_id: currency_code_id,
            state: strUser,
            city: strcity,
            card_holder_message: card_holder_message
        },
        
        success: function(result) {
            alert(result);

            if(result == "Success"){
                console.log(result);
                window.location = "pay.php";
            }else{
                console.log(result);
            }
        },
        error: function(result) {
            alert('error');
        }
    });
});

</script>


<!-- <script type="text/javascript">
jQuery(document).on('click', '#razor-pay-now', function(e) {
    var total = (jQuery('form#razorpay-frm-payment').find('input#amount').val() * 100);
    var merchant_order_id = jQuery('form#razorpay-frm-payment').find('input#merchant_order_id').val();
    var merchant_surl_id = jQuery('form#razorpay-frm-payment').find('input#surl').val();
    var merchant_furl_id = jQuery('form#razorpay-frm-payment').find('input#furl').val();
    var card_holder_name_id = jQuery('form#razorpay-frm-payment').find('input#billing-name').val();
    var card_holder_lastname = jQuery('form#razorpay-frm-payment').find('input#lastname').val();
    var card_holder_message = jQuery('form#razorpay-frm-payment').find('input#message').val();
    // var card_holder_telephone = jQuery('form#razorpay-frm-payment').find('input#telephone').val();


    var merchant_total = total;
    var merchant_amount = jQuery('form#razorpay-frm-payment').find('input#amount').val();
    var currency_code_id = jQuery('form#razorpay-frm-payment').find('input#currency').val();
    var key_id = "<?php echo RAZOR_KEY_ID; ?>";
    var store_name = 'Kolla Puri Amman';
    var store_description = 'Payment';
    var store_logo = 'assets/images/amman/logo.png';
    var email = jQuery('form#razorpay-frm-payment').find('input#billing-email').val();
    var phone = jQuery('form#razorpay-frm-payment').find('input#billing-phone').val();
    var e = document.getElementById("state");
    var e1 = document.getElementById("city");
    var strUser = e.value;
    var strcity = e1.value;
   
    

    jQuery('.text-danger').remove();

    if (card_holder_name_id == "") {
        jQuery('input#billing-name').after('<small class="text-danger">Please enter full mame.</small>');
        return false;
    }
    if (card_holder_lastname == "") {
        jQuery('input#lastname').after('<small class="text-danger">Please enter last mame.</small>');
        return false;
    }
    if (email == "") {
        jQuery('input#billing-email').after('<small class="text-danger">Please enter valid email.</small>');
        return false;
    }
    if (phone == "") {
        jQuery('input#billing-phone').after('<small class="text-danger">Please enter valid phone.</small>');
        return false;
    }

    var razorpay_options = {
        key: key_id,
        amount: '100',
        name: store_name,
        description: store_description,
        image: store_logo,
        netbanking: true,
        currency: currency_code_id,
        prefill: {
            name: card_holder_name_id,
            email: email,
            contact: phone
        },
        
        notes: {
            soolegal_order_id: merchant_order_id,
        },
        handler: function(transaction) {
            jQuery.ajax({
                url: 'pay.php',
                type: 'post',
                data: {
                    razorpay_payment_id: transaction.razorpay_payment_id,
                    merchant_order_id: merchant_order_id,
                    merchant_surl_id: merchant_surl_id,
                    merchant_furl_id: merchant_furl_id,
                    card_holder_name_id: card_holder_name_id,
                    card_holder_lastname: card_holder_lastname,
                    card_holder_email: email,
                    card_holder_phone: phone,
                    merchant_total: merchant_total,
                    merchant_amount: merchant_amount,
                    currency_code_id: currency_code_id,
                    state: strUser,
                    city: strcity,
                    card_holder_message: card_holder_message
                },
                dataType: 'json',
                success: function(res) {
                    alert(res);
                    console.log("test");
                    console.log(res);
                    if (res.msg) {
                        alert(res.msg);
                        return false;
                    }
                    window.location = res.redirectURL;
                }
            });
        },
        "modal": {
            "ondismiss": function() {

            }
        }
    };
    // obj        
    var objrzpv1 = new Razorpay(razorpay_options);
    objrzpv1.open();
    e.preventDefault();

});
</script>  -->

</html>