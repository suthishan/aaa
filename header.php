 <div>
    <img src="assets/img/head.png" style="width: 100%;">
</div>
 <div class="site-header__header-one-wrap">

             <div class="topbar-one desk_hide">
                <div class="topbar_bg" style="background-image: url(assets/images/shapes/header-bg.png)"></div>
                <div class="container mob_hide">
                    <div class="topbar-one__left">
                        <a href="mailto:sreekollapuriamman@gmail.com"><span class="icon-message"></span>sreekollapuriamman@gmail.com</a>
                        <!-- <a href="tel:666-999-0000"><span class="icon-phone-call"></span>666 888 0000</a> -->
                    </div>
                    <div class="topbar-one__middle">
                        <a href="index.php" class="main-nav__logo">
                            <img src="assets/images/resources/logo.png" class="main-logo" alt="Awesome Image" />
                        </a>
                    </div>
                    <div class="topbar-one__right">
                        <div class="topbar-one__social">
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
              </div>
 
           

            <header class="main-nav__header-one">
                <nav class="header-navigation stricky">
                    <div class="container clearfix">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__left">
                        <!--     <a href="#" class="main-nav__search search-popup__toggler"><i
                                    class="icon-magnifying-glass"></i></a> -->
                            <a href="#" class="side-menu__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <div class="main-nav__main-navigation">
                            <ul class=" main-nav__navigation-box">
                                <li class="dropdown">
                                    <a href="index.php">Home</a>

                                </li>
                                <li class="dropdown">
                                    <a href="about.php">About Temple</a>
                                   
                                </li>
                                <li class="dropdown">
                                    <a href="Events.php">Special Events</a>
                                    
                                </li>
                                <li class="dropdown">
                                    <a href="gallery.php">Gallery</a>
                                    
                                </li>
                                <li class="dropdown">
                                    <a href="#">Music</a>
                                    
                                </li>
                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->

                        <div class="main-nav__right">
                            <div class="icon_cart_box">
                                <a href="donate.php">
                                    <!-- <span class="fas fa-donate"></span> -->
                                    <div id="div1" class="fa"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>


<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <script>
function smile() {
  var a;
  a = document.getElementById("div1");
  a.innerHTML = "&#xf4b9;";
  setTimeout(function () {
      a.innerHTML = "&#xf664;";
    }, 1000);
  setTimeout(function () {
      a.innerHTML = "&#xf4b9;";
    }, 2000);
  setTimeout(function () {
      a.innerHTML = "&#xf4c0;";
    }, 3000);
}
smile();
setInterval(smile, 4000);
</script>