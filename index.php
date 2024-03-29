<!-- images download from pixabay.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eagle-IOT GPS Tracking</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/eagle-icon.png">
    <link rel="stylesheet" href="../../../www.w3schools.com/w3css/4/w3.css">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet"> -->
    <script>
        function switchLanguage() {
            var htmlTag = document.getElementsByTagName('html')[0];
            if (htmlTag.getAttribute('lang') === 'en') {
                htmlTag.setAttribute('lang', 'ar');
                document.getElementById('language-switch').innerHTML = 'English';
            } else {
                htmlTag.setAttribute('lang', 'en');
                document.getElementById('language-switch').innerHTML = 'العربية';
            }
        }
    </script>
</head>
<style type="text/css">
@media (min-width: 768px) {
    .navbar-collapse.collapse {
        padding-top: unset;
    }
}
</style>
<body>
    <div class="main-page-wrapper">

        <!-- Theme Header
			==============================================-->
        <header class="theme-main-header">
            <div class="container">
                <a href="index.php" class="logo float-left tran4s" style="display: flex;align-items: center;">
                    <img src="images/logo/eagle-logo.png" alt="Logo" id="logosize" style="margin-bottom: 4px;">
                    <p style="font-size: 2rem;color: #ffff;">Eagle-</p> <p style="font-size: 2rem;color: #ff9900">IOT</p>
                </a>
                <!-- ========================= Theme Feature Page Menu ======================= -->
                <nav class="navbar float-right theme-main-menu one-page-menu" id="navva">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            Menu
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about-us">About us</a></li>
                            <!-- <li><a href="#service-features">Features</a></li> -->
                            <li><a href="#project-product">Features</a></li>
                            <li><a href="#download">our platrofm</a></li>
                            <li><a href="javascript:void(0);" onclick="redirectToHiddenFolder();">Products</a></li>
                            <!-- <li><a href="#our-client">Clients</a></li> -->
                            <li><a href="#parteners">Partners</a></li>
                            </li>
                            <li><a href="#contact-section">Contact</a></li>
                        </ul>   
                    </div><!-- /.navbar-collapse -->
                </nav> <!-- /.theme-feature-menu -->
            </div>
        </header> <!-- /.theme-main-header -->
        
        <!-- Theme Main SLider
			=====================================================-->
        <div id="home" class="banner">
            <div class="rev_slider_wrapper">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="main-banner-slider" class="rev_slider video-slider" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE1  -->
                        <li data-index="rs-280" data-transition="fade" data-slotamount="default" data-easein="default"
                            data-easeout="default" data-masterspeed="default" data-delay="1000" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/cover1.jpg" alt="image" class="rev-slidebg" data-bgparallax="3"
                                data-bgposition="center center">
                            <!-- LAYERS -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-58','-33','-33','-100']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="20"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 6; white-space: nowrap;">
                                <h1>
                                    GPS Tracking System
                                </h1>
                            </div>
                        </li>
                        <!-- SLIDE2  -->
                        <li data-index="rs-20" data-transition="fade" data-slotamount="default" data-easein="default"
                            data-easeout="default" data-masterspeed="default" data-thumb="images/cover3.jpg"
                            data-rotate="0" data-saveperformance="off" data-delay="5000" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/cover3.jpg" alt="image" class="rev-slidebg" data-bgparallax="3"
                                data-bgposition="center center">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-58','-33','-33','-100']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="20"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 6; white-space: nowrap;">
                                <!-- <h1>
									EagleTrack GPS
								</h1> -->
                                <!-- <h3>Track Anything Important To You</h3> -->
                            </div>
                        </li>
                        <!-- SLIDE3  -->
                        <li data-index="rs-18" data-transition="fade" data-slotamount="default" data-easein="default"
                            data-easeout="default" data-masterspeed="default" data-thumb="images/.jpg" data-rotate="0"
                            data-saveperformance="off" data-delay="5000" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/cover2.jpg" alt="image" class="rev-slidebg" data-bgparallax="3"
                                data-bgposition="center center">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-58','-33','-33','-100']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="20"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 6; white-space: nowrap;">
                                <h1>
                                    eagle-IOT GPS
                                </h1>
                                <p>Track Everything You Care About...</p>

                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- END REVOLUTION SLIDER -->
        </div> <!--  /#banner -->

        <!-- About us Section
		=====================================================-->
        <section id="about-us">
            <div class="container">
                <div class="theme-title">
                    <h2>ABOUT US</h2>
                    <p></p>
                </div>
                <div class="row" style="">
                    <div class="col-lg-6">
                        <div class="row">
                            <img src="images/gps.jpg" alt="image" class="img-thumbnail img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5>WHO WE ARE ?</h5>
                        <hr>
                        <p>EALGE-IOT GPS TECHNOLOGY is one of the companies that now operates 10000+ vehicles. We have
                            highly skilled and trained employees that are ready to provide you with the finest service
                            at any time and from any location.</p><br>
                    </div>
                </div>
            </div>
        </section>

        <!--Service Section HIDDEN
		=====================================================-->
        <div id="project-product"></div>
        <div id="service-section">
            <div class="container">
                <div class="theme-title">

                    <h2>FEATURES</h2>
                    <p>Here is the Most-Used features in our platform</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-service-content">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s"><i class="fa fa-video-camera"></i></div>
                                <h6><a class="tran3s">MONITOR</a></h6>
                            </div>
                            <p>Real-Time location displayed on the map, It can monitor all vehicles under the same
                                account simultaneously. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-service-content">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s"><i class="fa fa-history"></i></div>
                                <h6><a class="tran3s">HISTORY PLAYBACK</a></h6>
                            </div>
                            <p>Specific history route displayed on the map.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-service-content">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s"><i class="fa fa-unlink"></i></div>
                                <h6><a class="tran3s">GEOFENCE</a></h6>
                            </div>
                            <p>Notification of enter into or depart from the GEO-fence</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-service-content">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s"><i class="fa fa-car"></i></div>
                                <h6><a class="tran3s">STOP VEHICLE REMOTLY</a></h6>
                            </div>
                            <p>Stoping the Engine of your car by one click with the ability to reset it. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-service-content">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s"><i class="fa fa-bell "></i></div>
                                <h6><a class="tran3s">ALERTS</a></h6>
                            </div>
                            <p>SMS, Call, E-mail, Help-Desk & GeoLocation alerts, that secure your valuable vehicle
                                easily.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-service-content">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s"><i class="fa fa-file"></i></div>
                                <h6><a class="tran3s">REPORTS</a></h6>
                            </div>
                            <p>User Reports feature to acquire all-round statistics and analytics. The summary data can
                                be shown in various perspectives, in tables and graphs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="download"></div>

        <!--Page middle banner
			=====================================================-->
        <div>
            <div class="theme-title">

                <h2>OUR PLATFORM</h2>
                <p class="platform-text">You can use our platform through the website or by downloading our applications
                    on your smart phone through the links below</p>
            </div>
            <div class="page-middle-banner">
                <div class="opacity">
                    <div class="row" style="display: flex;align-items: center;">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img src="./images/platform.jpeg" alt=""
                                style="width: 56rem;height: 44rem;margin-left: 0rem;">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <a href="https://etrack.vip/" class="hvr-bounce-to-right " target=”_blank”><i
                                    class="fa fa-globe fa-2x"></i> Website</a></br>
                            <a href="https://apps.apple.com/bw/app/etrack-gps/id1584776063" class="hvr-bounce-to-right "
                                target=”_blank”><i class="fa fa-apple fa-2x"></i> Ios </a>
                            <a href="https://play.google.com/store/apps/details?id=vip.etrack.gps"
                                class="hvr-bounce-to-right " target=”_blank”><i class="fa fa-android fa-2x"></i>
                                Android</a>
                        </div>
                    </div>
                </div> <!-- /.opacity -->
            </div> <!-- /.page-middle-banner -->
        </div>

        <!--Partner Section
			=====================================================-->
        <div id="parteners">
            <div class="container-fluid">
                <div class="theme-title">
                    <h2>PARTNERS</h2>
                </div>
                <div id="partner-section">
                    <div class="container">
                        <div id="partner_logo" class="owl-carousel owl-theme">
                            <div class="item"><img src="images\logo\images.png" alt="logo"></div>
                            <div class="item"><img src="images\ampere-logo.jpg" alt="logo"></div>
                            <div class="item"><img src="images\logo\images.png" alt="logo"></div>
                            <div class="item"><img src="images\ampere-logo.jpg" alt="logo"></div>
                            <div class="item"><img src="images\logo\images.png" alt="logo"></div>
                            <div class="item"><img src="images\ampere-logo.jpg" alt="logo"></div>
                            <div class="item"><img src="images\logo\images.png" alt="logo"></div>
                            <div class="item"><img src="images\ampere-logo.jpg" alt="logo"></div>
                            <!-- <div class="item"><img src="images/logo/company2.svg" alt="logo"></div>
							<div class="item"><img src="images/logo/company4.svg" alt="logo"></div>
							<div class="item"><img src="images/logo/company1.svg" alt="logo"></div>
							<div class="item"><img src="images/logo/company2.svg" alt="logo"></div>
							<div class="item"><img src="images/logo/company3.svg" alt="logo"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section
			=====================================================-->
        <div id="contact-section">
            <div class="container">
                <div class="theme-title">
                    <h2>Contact</h2>
                </div>
                <div class="clear-fix contact-address-content">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="left-side">
                            <ul class="list-inline">
                                <!-- <div class="col-sm-4 col-md-4 col-lg-4 col-xs-0">
									 <li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-phone"
												aria-hidden="true"></i></div>
										<p></p>
									</li> 
								</div> -->
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                                    <li>
                                        <div class="icon tran3s round-border p-color-bg"><i class="fa fa-envelope-o"
                                                aria-hidden="true"></i></div>
                                        <p>Info@eagle-iot.net</p>
                                    </li>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-map-marker"
												aria-hidden="true"></i></div>
										<p>Dubai, United Arab Emirates</p>
									</li>
								</div>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-12 col-md-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122809.74536588111!2d74.43839991910458!3d15.866866969046482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbf669f5095362f%3A0x7e34b31edcdefb5f!2sBelgaum%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1569479258835!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						
					</div> -->
                </div>
                <!-- Contact Form -->
                <div class="send-message" style="margin-top: 20px">
                    <form method="post" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="" onsubmit='return false;' id="frmData">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-input">
                                    <input type="text" placeholder="Full Name*" name="Fname" id="Fname"
                                        onkeyup="validate(this)"><span style="color: red" id="valid_Fname"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="single-input">
                                    <input type="email" placeholder="Your Email*" name="email" id="email"
                                        onkeyup="email_Check(this)"><span style="color: red" id="valid_email"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-input">
                                    <input type="text" placeholder="Mobile Number*" name="mob" id="mob"
                                        onkeyup="chk_phoneno(this)"><span style="color: red" id="valid_mob"></span>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-input">
                                    <input type="text" placeholder="Company" name="company" id="company">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-input">
                                    <input type="text" placeholder="Country*" name="country" id="country"
                                        onkeyup="validate(this)"><span style="color: red" id="valid_country"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-input">
                                    <select name="subbj" id="subbj" onchange="toggleServerDiv()">
                                        <option value="">Subject*</option>
                                        <option value="purchase">purchase</option>
                                        <option value="partner">Become a partner</option>
                                        <option value="issue">Issue Reporting</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="single-input-area">
                                    <textarea placeholder="Write Your Message Here" name="msg" id="msg" row="3" ></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="serverDiv" style="display: none;">
                                <div class="single-input">
                                    <select name="server" id="server">
                                    <option value="">Server*</option>
                                    <option value="etrack">eTrack</option>
                                    <option value="itrack">iTrack</option>
                                    <option value="whatsgps">WhatsGPS</option>
                                    <option value="other_server">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="accDiv" style="display: none;">
                                <div class="single-input">
                                    <input type="text" placeholder="Account Name*" name="accName" id="accName"rows="3">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div style="display: flex;justify-content: center;">
                                <button class="tran3s p-color-bg custom-button" type="submit" name="submit"
                                    id="submit_btn">Submit</button>
                            </div>
                        </div>
                    </form>
                    <!-- Contact Form Validation Markup -->
                    <!-- Contact alert -->
                    <div class="alert-wrapper" id="alert-success">
                        <div id="success">
                            <button class="closeAlert"><i
                                    class="fa fa-times" aria-hidden="true"></i></button>
                            <div class="wrapper">
                                <p>Thank you! We will contact you soon.</p>
                            </div>
                        </div>
                    </div> <!-- End of .alert_wrapper -->
                    <div class="alert-wrapper" id="alert-error">
                        <div id="error">
                            <button class="closeAlert"><i
                                    class="fa fa-times" aria-hidden="true"></i></button>
                            <div class="wrapper">
                                <p>Sorry! Something Went Wrong.</p>
                            </div>
                        </div>
                    </div> <!-- End of .alert_wrapper -->
                </div> <!-- /.send-message -->
            </div> <!-- /.container -->
        </div> <!-- /#contact-section -->

        <!-- Footer
		=====================================================-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <!-- <ol class="list-inline">
							<li><a href="#" >Privacy Policy</a></li>
							<li><a href="#" >Social Media Policy</a></li>
							<li><a href="#" >Terms & Conditions</a></li>
						</ol> -->
                        <span>Copyright © 2023 eagle-IOT. All rights reserved.
                        </span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <ul>
                            <li><a href="#" class="tran3s round-border"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="#" class="tran3s round-border"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Loading Transition
		=====================================================-->
        <div id="loader-wrapper">
            <div id="preloader_1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s p-color-bg">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
        </button>
    </div> <!-- /.main-page-wrapper -->

    <!-- Js File
    =====================================================-->
    <!-- j Query -->
    <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
    <!-- revolution -->
    <script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
    <script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="vendor /revolution/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <!-- mixitUp -->
    <script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
    <!-- Progress Bar js -->
    <script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
    <!-- Theme js -->
    <script type="text/javascript" src="js/theme.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <script type="text/javascript">
        function toggleServerDiv() {
            var subbj = document.getElementById("subbj");
            var serverDiv = document.getElementById("serverDiv");

            if (subbj.value === "issue") {
                serverDiv.style.display = "block";
                accDiv.style.display = "block";
            } else {
                serverDiv.style.display = "none";
                accDiv.style.display = "none";
            }
        }
        $(document).ready(function() {
            $('ul li').on('click', function() {

                if ($('#navbar-collapse-1').hasClass('in')) {
                    $('#navbar-collapse-1').removeClass('in')
                }
            });
            $("#submit_btn").click(function() {
                submit = 'submit';
                emailval = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                Fname = $('#Fname').val();
                company = $('#company').val();
                email = $('#email').val();
                mob = $('#mob').val();
                country = $('#country').val();
                city = $('#city').val();
                subbj = $('#subbj').val();
                server = $('#server').val();
                accName = $('#accName').val();
                msg = $('#msg').val();
                if (Fname == '') {
                    $('#Fname').focus();
                    return;
                }
                if (email == '') {
                    $('#email').focus();
                    return;
                } else if (!email.match(emailval)) {
                    alert('Email is Not vaild');
                    return;
                }
                if (mob == '') {
                    $('#mob').focus();
                    return;
                }
                if (country == '') {
                    $('#country').focus();
                    return;
                }
                if (city == '') {
                    $('#city').focus();
                    return;
                }
                if (subbj == '') {
                    $('#subbj').focus();
                    return;
                }
                // console.log(submit,Fname,email,mob,company,subbj,server,accName)
                // debugger
                $.ajax({
                url: "send_email.php",
                type: "POST",
                data: {
                    'submit': submit,
                    'Fname': Fname,
                    'email': email,
                    'mob': mob,
                    'country': country,
                    'company': company,
                    'subbj': subbj,
                    'msg': msg,
                    'server': server,
                    'accName': accName
                },
                success: function (output) {
                    if (output) {
                        $('#alert-success').show();
                    } else {
                        $('#alert-error').show();
                    }
                }
                });
            });
        });


        
    </script>

<script>
  function redirectToHiddenFolder() {
    window.location.href = 'pages/devices.html';
  }
</script>

<a href="javascript:void(0);" onclick="redirectToHiddenFolder();">Go to Page</a>

</body>
</html>