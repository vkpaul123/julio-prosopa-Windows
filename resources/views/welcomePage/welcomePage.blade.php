<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Julio-Prosopa</title>

    <!--    Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!--Fontawesom-->
    <link rel="stylesheet" href="{{ asset('rawThemes/greenFair/css/font-awesome.min.css') }}">

    <!--Animated CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('rawThemes/greenFair/css/animate.min.css') }}">

    <!-- Bootstrap -->
    <link href="{{ asset('rawThemes/greenFair/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--Bootstrap Carousel-->
    <link type="text/css" rel="stylesheet" href="{{ asset('rawThemes/greenFair/css/carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('rawThemes/greenFair/css/isotope/style.css') }}">

    <!--Main Stylesheet-->
    <link href="{{ asset('rawThemes/greenFair/css/style.css') }}" rel="stylesheet">
    <!--Responsive Framework-->
    <link href="{{ asset('rawThemes/greenFair/css/responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body data-spy="scroll" data-target="#header">

    <!--Start Hedaer Section-->
    <section id="header">
        <div class="header-area">
            <div class="top_header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                            <div class="address">
                                <i class="fa fa-home floatleft"></i>
                                <p>CHRIST (Deemed to be University), Bengaluru</p>
                            </div>
                        </div>
                        <!--End of col-md-4-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                            <div class="phone">
                                <i class="fa fa-phone floatleft"></i>
                                <p><a href="tel:+918296765476">+91 82967 65476</a></p>
                            </div>
                        </div>
                        <!--End of col-md-4-->
                        <div class="col-md-4">
                            <div class="social_icon text-right">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href="https://github.com/vkpaul123/julio-prosopa.git" target="_blank"><i class="fa fa-github"></i></a>
                            </div>
                        </div>
                        <!--End of col-md-4-->
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
            <!--End of top header-->
            <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                <div class="container">
                    <nav class="navbar navbar-default zero_mp ">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand custom_navbar-brand" href="#"><img src="{{ asset('rawThemes/greenFair/img/logo.png') }}" alt="Home"></a>
                        </div>
                        <!--End of navbar-header-->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right main_menu">
                                <li class="active"><a href="#header">Home <span class="sr-only">(current)</span></a></li>
                                <li><a href="#welcome">about</a></li>
                                <li><a href="#portfolio">project</a></li>
                                <li><a href="#counter">Numbers</a></li>
                                <li><a href="#contact">contact us</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                    <!--End of nav-->
                </div>
                <!--End of container-->
            </div>
            <!--End of header menu-->
        </div>
        <!--end of header area-->
    </section>
    <!--End of Hedaer Section-->



    <!--Start of slider section-->
    <section id="slider">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="slider_overlay">
                        <img src="{{ asset('rawThemes/greenFair/img/img1.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            <div class="slider_text">
                                <h3>Prosopis Juliflora</h3>
                                <h2>Image Classifier</h2>
                                <p>Identification of <b>Mesquite</b> <i>(Prosopis Juliflora)</i> using <b>Image Processing</b> techniques.</p>
                                <a href="{{ route('login') }}" class="custom_btn">
                                    @auth
                                    Home
                                    @else
                                    Log in
                                    @endauth
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of item With Active-->
                <div class="item">
                    <div class="slider_overlay">
                        <img src="{{ asset('rawThemes/greenFair/img/img2.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            <div class="slider_text">
                                <h3>Protect</h3>
                                <h2>the environment</h2>
                                <p>Prosopis Juliflora is known for making harmful imbalances in the ecosystem.</p>
                                <a href="{{ route('login') }}" class="custom_btn">
                                    @auth
                                    Home
                                    @else
                                    Log in
                                    @endauth
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Item-->
                <div class="item">
                    <div class="slider_overlay">
                        <img src="{{ asset('rawThemes/greenFair/img/img3.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            <div class="slider_text">
                                <h3>A Helper Tool</h3>
                                <h2>For Botanists, Surveyors and the Common Man</h2>
                                <p>Just Click a picture, and upload it!</p>
                                <a href="{{ route('login') }}" class="custom_btn">
                                    @auth
                                    Home
                                    @else
                                    Log in
                                    @endauth
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of item-->
            </div>
            <!--End of Carousel Inner-->
        </div>
    </section>
    <!--end of slider section-->



    <!--Start of welcome section-->
    <section id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wel_header">
                        <h2>welcome to Julio-Prosopa</h2>
                        <p>An interdisciplinary research project work that uses <strong>Digital Image Processing</strong> and <strong>Botany</strong> for the identification of <i><strong>Prosopis Juliflora</strong></i>. This project provides the following services -</p>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class="fa fa-leaf"></i>
                                </div>
                                <h4>Dataset Creation</h4>
                                <p>Just <a href="{{ route('register') }}" class="text-success"><strong><u>
                                    @auth
                                    Go to the Home Page
                                    @else
                                    Sign Up
                                    @endauth
                                </u></strong></a> and start uploading the image with the related information, which will be stored in the database, further available for download for your work.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class="fa fa-refresh"></i>
                                </div>
                                <h4>Feature Extraction</h4>
                                <p>Various features are extracted from the images, which are broadly categorized into Texture Features and Geometrical features.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class="fa fa-tint"></i>
                                </div>
                                <h4>Ensembled Analysis</h4>
                                <p>Classification is done using Multiple Classifiers for better results having lesser bias and variance at the same time. A detailed report of the classification is given for every classification.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class="fa fa-cog"></i>
                                </div>
                                <h4>Classifier Re-training</h4>
                                <p>Classifiers can be retrained from the dataset that is collected. This is done by the admin whenever necessary as the dataset is evergrowing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--end of welcome section-->



    <!--Start of volunteer-->
    <section id="volunteer">
        <div class="container">
            <div class="row vol_area">
                <div class="col-md-8">
                    <div class="volunteer_content">
                        <h3>Become a <span>Member</span></h3>
                        <p>Join Our Team And Help the world. You can join us as a general user to upload your pictures of the plants that you have. This will help the dataset grow for the better learning and more accurate results.</p>
                    </div>
                </div>
                <!--End of col-md-8-->
                <div class="col-md-3 col-md-offset-1">
                    <div class="join_us">
                        <a href="{{ route('register') }}" class="vol_cust_btn">
                            @auth
                            Home
                            @else
                            Sign Up
                            @endauth
                        </a>
                    </div>
                </div>
                <!--End of col-md-3-->
            </div>
            <!--End of row and vol_area-->
        </div>
        <!--End of container-->
    </section>
    <!--end of volunteer-->



    <!--Start of portfolio-->
    <section id="portfolio" class="text-center">
        <div class="col-md-12">
            <div class="portfolio_title">
                <h2>our latest work</h2>
                <p>Various Images are already available for feature extraction. The feature Set can be downloaded from your account that can be used for your work.</p>
            </div>
        </div>
        <!--End of col-md-2-->
        <div class="colum">
            <div class="container">
                <div class="row">
                    <form action="/">
                        <ul id="portfolio_menu" class="menu portfolio_custom_menu">
                            <li>
                                <button data-filter="*" class="my_btn btn_active">Show All Aspects</button>
                            </li>
                            <li>
                                <button data-filter=".blue, .black, .green" class="my_btn">Field Study & survey</button>
                            </li>
                            <li>
                                <button data-filter=".red, .green" class="my_btn">Feature Extraction</button>
                            </li>
                            <li>
                                <button data-filter=".blue, .yellow, .black" class="my_btn">Data Preprocessing</button>
                            </li>
                            <li>
                                <button data-filter=".black" class="my_btn">Classification &amp; Results</button>
                                    <!--
                                </li>
                                <li>
                                    <button data-filter=".black" class="my_btn">Black</button>
                                </li>
                            -->
                        </ul>
                        <!--End of portfolio_menu-->
                    </form>
                    <!--End of Form-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="notes">
                            <div class="note blue">
                                <div class="img_overlay">
                                    <p>Sun Homes, Dhaka</p>
                                </div>
                                <img src="{{ asset('rawThemes/greenFair/img/environment.jpg') }}" alt="">
                            </div>
                            <div class="note red">
                                <div class="img_overlay">
                                    <p>Sun Homes, Dhaka</p>
                                </div>
                                <img src="{{ asset('rawThemes/greenFair/img/portfolio_1.jpg') }}" alt="">
                            </div>
                            <div class="note green">
                                <div class="img_overlay">
                                    <p>Sun Homes, Dhaka</p>
                                </div>
                                <img src="{{ asset('rawThemes/greenFair/img/cliemate.jpg') }}" alt="">
                            </div>
                            <div class="note yellow">
                                <div class="img_overlay">
                                    <p>Sun Homes, Dhaka</p>
                                </div>
                                <img src="{{ asset('rawThemes/greenFair/img/photography.jpg') }}" alt="">
                            </div>
                            <div class="note black">
                                <div class="img_overlay">
                                    <p>Sun Homes, Dhaka</p>
                                </div>
                                <img src="{{ asset('rawThemes/greenFair/img/species.jpg') }}" alt="">
                            </div>
                        </div>
                        <!--End of notes-->
                    </div>
                    <!--End of col-lg-12-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </div>
        <!--End of colum-->
    </section>
    <!--end of portfolio-->



    <!--Start of counter-->
    <section id="counter">
        <div class="counter_img_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="counter_header">
                            <h2>Looking By Numbers</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <!--End of col-md-12-->
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <img src="{{ asset('rawThemes/greenFair/img/tree.png') }}" alt="">
                                <div class="counter_text">
                                    <span class="counter">1542</span>
                                    <p>tree cut</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <img src="{{ asset('rawThemes/greenFair/img/hand.png') }}" alt="">
                                <div class="counter_text">
                                    <span class="counter">1458</span>
                                    <p>animal lost</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <img src="{{ asset('rawThemes/greenFair/img/tuhnder.png') }}" alt="">
                                <div class="counter_text">
                                    <span class="counter">9854</span>
                                    <p>blubs collected</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <img src="{{ asset('rawThemes/greenFair/img/cloud.png') }}" alt="">
                                <div class="counter_text">
                                    <span class="counter">5412</span>
                                    <p>water level</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </div>
    </section>
    <!--end of counter-->





    <!--Start of contact-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="colmd-12">
                    <div class="contact_area text-center">
                        <h3>get in touch</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="office">
                        <div class="title">
                            <h5>our headquarters</h5>
                        </div>
                        <div class="office_location">
                            <div class="address">
                                <i class="fa fa-map-marker"><span>CHRIST (Deemed to be University),Hosur Road, Bengaluru, Karnataka-560 029</span></i>
                            </div>
                            <div class="phone">
                                <i class="fa fa-phone"><span><a href="tel:+918296765476">+91 82967 65476</a></span></i>
                            </div>
                            <div class="email">
                                <i class="fa fa-envelope"><span><a href="mailto:vkpaul123@gmail.com?Subject=Guest%20from%20Julio-Prosopa" target="_top">vkpaul123@gmail.com</a></span></i>
                            </div>
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="msg">
                        <div class="msg_title">
                            <h5>Drop A Message</h5>
                        </div>
                        <div class="form_area">
                            <!-- CONTACT FORM -->
                            <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                <div id="message"></div>
                                <form action="scripts/contact.php" class="form-horizontal contact-1" role="form" name="contactform" id="contactform">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="subject" class="form-control" id="subject" placeholder="Subject *">
                                            <div class="text_area">
                                                <textarea name="contact-message" id="msg" class="form-control" cols="30" rows="8" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-6-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--End of contact-->



    <!--Start of footer-->
    <section id="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="copyright">
                        <p>&copy; 2018 - <span><a href="/"><strong>Julio-Prosopa.com</strong></a></span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="designer">
                        <p>A Research Project By <a href="https://github.com/vkpaul123"><strong>Vikramsinh Dantkale</strong></a></p>
                    </div>
                </div>
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--End of footer-->



    <!--Scroll to top-->
    <a href="#" id="back-to-top" title="Back to top"><strong><i class="fa fa-arrow-up"></i></strong></a>
    <!--End of Scroll to top-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
    <script src="{{ asset('rawThemes/greenFair/js/jquery-1.12.3.min.js') }}"></script>

    <!--Counter UP Waypoint-->
    <script src="{{ asset('rawThemes/greenFair/js/waypoints.min.js') }}"></script>
    <!--Counter UP-->
    <script src="{{ asset('rawThemes/greenFair/js/jquery.counterup.min.js') }}"></script>

    <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="{{ asset('rawThemes/greenFair/js/gmaps.min.js') }}"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 12.93443,
                    lng: 77.6061315,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                    zoom:16,
                });


                map.addMarker({
                    lat: 12.93443,
                    lng: 77.6061315,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="{{ asset('rawThemes/greenFair/js/isotope/min/scripts-min.js') }}"></script>
        <script src="{{ asset('rawThemes/greenFair/js/isotope/cells-by-row.js') }}"></script>
        <script src="{{ asset('rawThemes/greenFair/js/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('rawThemes/greenFair/js/isotope/packery-mode.pkgd.min.js') }}"></script>
        <script src="{{ asset('rawThemes/greenFair/js/isotope/scripts.js') }}"></script>


        <!--Back To Top-->
        <script src="{{ asset('rawThemes/greenFair/js/backtotop.js') }}"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="{{ asset('rawThemes/greenFair/js/jquery.localScroll.min.js') }}"></script>
        <script src="{{ asset('rawThemes/greenFair/js/jquery.scrollTo.min.js') }}"></script>
        <!--WOW With Animation-->
        <script src="{{ asset('rawThemes/greenFair/js/wow.min.js') }}"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('rawThemes/greenFair/js/bootstrap.min.js') }}"></script>
        <!-- Custom JavaScript-->
        <script src="{{ asset('rawThemes/greenFair/js/main.js') }}"></script>
    </body>

    </html>