
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

 <link rel="stylesheet" href="regi/style.css">

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

</head>
<style type="text/css">
     .owl-nav{display: none;}
        .desk_hide{display: none;}
       @media only screen and (max-width: 767px){.mob_hide{display: none !important;}}
       /*new*/
h3{font-size: 24px !important;
}
p{
    color: #72523f;
}

.red{color: #d62444 !important;}
.white{color: white !important;}

.submits{
    position: relative;
    width: 165px;
    min-height: 49px;
    font-size: 16px;
    font-weight: bold;
    line-height: 20px;
    border-radius: 0;
    text-align: center !important;
    color: #fff !important;
    background-color: rgb(243,43,86) !important;
    color: #fff !important !important;
    border: none;
}

input.form-control, select.form-control, textarea.form-control {
margin-bottom: 4px !important;
}
.error{color: red !important;}
</style>
<body class="com_bg">

   <!--  <div class="preloader">
        <img src="assets/images/loader.png" class="preloader__image" alt="">
    </div> -->
    <!-- /.preloader -->

    <div class="page-wrapper">

  


         <!-- Header Include -->
        <?php
         // include 'header.php'
         ;?>
        <!-- Header Include -->

     <!--    <section class="page-header" style="background-image: url(assets/images/main-slider/banner.png);padding: 10%;">
            <div class="container">
                
            </div>
        </section>
 -->
        <section class="about_two">
            <div class="container">
           <!--    <div class="block-title text-center title-boxs">
                    <h3 class="red" style="padding-bottom: 10px;">Contact Us</h3>
                    <div class="leaf">
                        <img src="assets/images/resources/leaf.png" alt="">
                    </div>
              </div>
 -->

            <!-- TEXT    -->

           <div class="row">
            <div class="col-md-3"> </div>
            <div class="col-md-6">
               <form method="post" id="frmContactus" name="registration">
                    <div class="contact-form card" style="padding: 25px;">
                      <div class="form-group">
                         <label class="control-label col-sm-5" for="name">Name:</label>
                         <div class="col-sm-12">          
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="control-label col-sm-5" for="email">Email:</label>
                         <div class="col-sm-12">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="control-label col-sm-5" for="mobile">Mobile:</label>
                         <div class="col-sm-12">
                            <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" required>
                         </div>
                      </div>
                      
                      <div class="form-group">
                         <label class="control-label col-sm-5" for="message">Message:</label>
                         <div class="col-sm-12">
                            <textarea class="form-control" rows="5"  placeholder="Message here..." id="message" name="message"></textarea>
                         </div>
                      </div>

                      <div class="row">
                        <div class="col" style="text-align: center;">
                            <div class="form-group">
                            <!-- <input type="button" value="Submit" name="submit" onclick="getcontact()">  -->
                            <button type="submit" class="submits" name="submit" id="submit">Submit</button>
                            <span style="color:red;" id="msg"></span>
                         
                      </div>
                        </div>
                    </div>


                      
                   </div>
               </form>
            </div>
            <div class="col-md-3"> </div>
         </div>

            </div>
        </section>

       <!--  <script type="text/javascript">

function getcontact()
  {
    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var mobile=document.getElementById("mobile").value;
    var message=document.getElementById("message").value;
    console.log(name);
    console.log(email);
    console.log(mobile);
    console.log(message);
    $.ajax({
    type: 'GET',
    url: 'p.php',
    data: {for:name, for1:email, for2:mobile, for3:message},
    success: function(data)
    {
      console.log(data);
    if(data)
    {
      
    }
    else
    { 
      
    }
    }
    });
  }

</script>
 -->


       <script>
      jQuery('#frmContactus').on('submit',function(e){
        jQuery('#msg').html('');
        jQuery('#submit').html('Please wait');
        jQuery('#submit').attr('disabled',true);
        jQuery.ajax({
            url:'submit.php',
            type:'post',
            data:jQuery('#frmContactus').serialize(),
            success:function(result){
              console.log(result);
                jQuery('#msg').html(result);
                jQuery('#submit').html('Submit');
                jQuery('#submit').attr('disabled',false);
                jQuery('#frmContactus')[0].reset();
            }
        });
        e.preventDefault();
      });
      </script>
    



    <script type="text/javascript">
      // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      // name: "required",
      name:{required: true,lettersonly: true,minlength:5,maxlength:64 },
      mobile: {required:true,numbersonly3: true,minlength:10,maxlength:10},
      email:  {required:true,charactersonly2:true,minlength:15,maxlength:50},
      // email: {
      //   required: true,
      //   // Specify that email should be validated
      //   // by the built-in "email" rule
      //   email: true
      // },
      // password: {
      //   required: true,
      //   minlength: 5
      // }

      message:{required: true,lettersonly: true,minlength:5,maxlength:64}
    },
    // Specify validation error messages
    messages: {
         name:{required:"Please Enter your Name",lettersonly:"Enter your the valid characters",minlength:'Atleast Type 5 Characters',maxlength:"Max Length is 64 Characters..!"},
      // name: "Please enter your firstname",
      mobile: {required:"Please Enter The Mobile Number",numbersonly3:"Enter The Vaild Phone number",minlength:'Atleast Type 10 Numbers',maxlength:"Max Length Is 10 numbers..!"},
      message : "Please Enter Your Messsage",
      // password: {
      //   required: "Please provide a password",
      //   minlength: "Your password must be at least 5 characters long"
      // },
      email: {required:"Please Enter The Email Id",charactersonly2:"Enter The Valid Email Id",minlength:'Atleast type 15 character',maxlength:"Max Length is 50 Characters..!"},
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });


   jQuery.validator.addMethod("lettersonly", function(value, element) {
     return this.optional(element) || /^[a-z\s]+$/i.test(value);
     }, "Only alphabetical characters");

         jQuery.validator.addMethod("numbersonly3", function(value, element) {
      return this.optional(element) || /^[7-9]{1}[0-9]{9}$/i.test(value);
      }, "Only Numbers");

    jQuery.validator.addMethod("charactersonly2", function(value, element) {
     return this.optional(element) || /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i.test(value);
      }, "Only characters");

});



   
    </script>

       
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