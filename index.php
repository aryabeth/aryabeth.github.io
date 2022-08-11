<?php // Check if form was submitted:
if (isset($_POST['enqurynow']))
    {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

        // Build POST request:
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = '6LdNMvoUAAAAAC7K_Gz7gtM95ss6Xrr9eT3I6lrl';
        $recaptcha_response = $_POST['recaptcha_response'];

        // Make and decode POST request:
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);
        // Take action based on the score returned:
        if ($recaptcha->score >= 0.55) {

            $nama=$_POST['name'];
            $email=$_POST['email'];
            $message=$_POST['message'];
            
            $subjadmin = "Contact Form - aryabeth.my.id\r\n";           
            $fromadmin = "From: $email\r\n";
            $fromadmin .= "Reply-To: ". strip_tags($email) . "\r\n";
            $fromadmin .= "MIME-Version: 1.0\r\n";
            $fromadmin .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $pesanadmin = '
            
            Name   : '.$nama.' ('.$email.')<br>
            Message: '.$message.'<br><br>';
            
            
            mail("aryabwidyatmika@gmail.com", $subjadmin, $pesanadmin, $fromadmin);
            
            
            echo "<script>alert('Your mail has been sent successfuly ! Thank you');
            window.location.href='https://aryabeth.my.id/#contact';</script>";
            exit();
          
        } else {
            echo "<script>alert('Google reCAPTCHA verification failed, please try again.');
            window.location.href='https://aryabeth.my.id/#contact';</script>";
        }

    }
} 

?>


<!DOCTYPE HTML>
<html lang="en" data-random-animation="false" data-animation="31">
    <head>

        <!--Meta Tags-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="aryabeth, arya, freelancer, portfolio, cv, web developer" />
        <meta name="description" content="I'm a web designer / developer based in Bali, Indonesia. I have a passion for web design and love to create for web and mobile devices." />
        <meta name="author" content="I Made Arya Beta Widyatmika" />

        <!--Page Title-->
        <title>Arya Beta Widyatmika - Freelancer / Web Developer / Full Stack Programmer</title>

        <!--Plugins Css-->
        <link rel="stylesheet" href="css/plugins.css">
        <!--Main Styles Css-->
        <link rel="stylesheet" href="css/style-light.css">

        <link rel="stylesheet" href="css/style-demo.css">

        <!--Color Css-->
        <link class="site-color" rel="stylesheet" href="css/blue-color.css">

        <!--Modernizr Js-->
        <script src="js/modernizr.js"></script>

        <!--Favicons-->
        <link rel="shortcut icon" href="img/ico.jpg" type="image/x-icon">

		<style type="text/css">
            .grecaptcha-badge{
                display: none
            }      
        </style>


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150991080-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-150991080-2');
        </script>

        
    </head>

    <body>

        <!-- <div class="theme-options dark">
            <div class="toggle-btn">
                <span><i class="fas fa-cog"></i></span>
            </div>
            <div class="theme-menu">
                <div class="page-transitions">
                    <h4>Page Animation</h4>
                    <select class="demo-select form-control" id="anim-type">
                        <option>Choose</option>
                        <option value="0">Random</option>
                    </select>
                </div>
                <div class="theme-color">
                    <h4 class="mt-20">Colors</h4>
                    <ul>
                        <li><a href="css/blue-color.css" style="background-color: #00A3E1;;"></a></li>
                        <li><a href="css/red-color.css" style="background-color: #E82A2A;"></a></li>
                        <li><a href="css/green-color.css" style="background-color: #6ac045;"></a></li>
                        <li><a href="css/yellow-color.css" style="background-color: #D1A71D;"></a></li>
                        <li><a href="css/pink-color.css" style="background-color: #FF1493;"></a></li>
                        <li><a href="css/purple-color.css" style="background-color: #5078FF;"></a></li>
                    </ul>
                </div>
            </div>
        </div> -->


        <!--Preloader Start-->
        <div class="preloader">
            <div class="loader">
                <!--Your Name-->
                <h4>Arya Beth</h4>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--Preloader End-->

        <div id="page">

            <!--Header Start-->
            <header>
                <div class="header-content">

                    <!--Mobile Header-->
                    <div class="header-mobile">
                        <a class="header-toggle"><i class="fas fa-bars"></i></a>
                        <h2>Arya Beth</h2>
                    </div>

                    <!--Main Header-->
                    <div class="header-main" data-simplebar>
                        <div class="image-container">
                            <h2 class="header-name">Arya B. Widyatmika</h2>
                            <img src="img/profile-img.jpg" alt="profile-pic">
                        </div>

                        <!--Nav Menus-->
                        <nav class="nav-menu">
                            <ul>
                                <li><a href="#home" class="pt-link active"><span class="nav-menu-icon"><i class="lnr lnr-home"></i></span>Home </a> </li>
                                <li><a href="#about" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-user"></i></span>About Me</a></li>
                                <li><a href="#resume" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-license"></i></span>Resume</a></li>
                                <li><a href="#portfolio" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-briefcase"></i></span>Portfolio</a></li>
                                <!-- <li><a href="#blog" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-book"></i></span>Blog</a></li> -->
                                <li><a href="#contact" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-envelope"></i></span>Contact</a></li>
                            </ul>
                        </nav>

                        <!--Nav Footer-->
                        <div class="nav-footer">
                            <!--Social Links-->
                            <ul class="social">
                                <li><a href="https://www.facebook.com/arya.widyatmika" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="https://www.instagram.com/aryabeth/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCQZEcJVponzoAns_8aGly9w" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/aryabeth" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://bitbucket.org/aryabeth/" target="_blank"><i class="fab fa-bitbucket"></i></a></li>
                            </ul>
                            <!--Copyright Text-->
                            <div class="copy">
                                <p>2021 &copy; <a href="https://aryabeth.github.io/">aryabeth.github.io/</a> <br>All Right Reserved.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            <!--Header End-->


            <!--Main Start-->
            <div id="main" class="site-main">

                <!--Banner Section Start-->
                <section id="home" class="banner-section pt-page">

                    <div class="banner-slider">
                        <div id="slides">
                            <div class="slides-container">
                                <!--Slide 1-->
                                <img src="img/slider/img-1.jpg" alt="">
                                <!--Slide 2-->
                                <img src="img/slider/img-2.jpg" alt="">
                                <!--Slide 3-->
                                <img src="img/slider/img-3.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="banner-content">
                        <!--Banner Text-->
                        <h1 class="mb-20"><span>Arya</span> Beta <span>Widyatmika</span> S.KOM </h1>

                        <!--Animated Text-->
                        <p class="cd-headline clip is-full-width">
                        <span>I am a </span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Web Developer</b>
                            <b>Freelancer</b>
                            <b>Programmer</b>
                            <b>Full Stack Developer</b>
                        </span>
                        </p>

                    </div>

                </section>
                <!--Banner Section End-->


                <!--About Section Start-->
                <section id="about" class="about-section pt-page">
                    <div class="section-container">
                        <!--Page Heading-->
                        <div class="page-heading">
                            <span class="icon"><i class="lnr lnr-user"></i></span>
                            <h2>About Me.</h2>
                        </div>

                        <!-- About Info Row Start-->
                        <div class="row about mb-70">

                            <div class="col-lg-8">
                                <!--Personal Intro-->
                                <h3 class="mb-20">Web & Full Stack Developer</h3>
                                <p>I'm a web designer / developer based in Bali, Indonesia. I have a passion for web design and love to create for web and mobile devices. I like to keep it simple. I'm a developer, so I know how to create your website to run across devices using the latest technologies available.</p>
                                <p>I’m currently available for freelance work. If you have a project that you want to get started, think you need my help with something or just fancy saying hey, then <a href="#contact">get in touch</a>.</p>

                                <!--Signature Image-->
                                <div class="signature mt-20">
                                    <img src="img/signature-black.png" alt="">
                                </div>
                            </div>

                            <!--Personal Info-->
                            <div class="col-lg-4">
                                <div class="about-info">
                                    <h3 class="mb-20">Personal Information</h3>
                                    <ul>
                                        <li><span class="title">Name</span><span class="value">I Made Arya Beta Widyatmika, S.Kom</span></li>
                                        <li><span class="title">Age</span><span class="value">26 Years</span></li>
                                        <li><span class="title">Residence</span><span class="value">Badung, Bali</span></li>
                                        <li><span class="title">Address</span><span class="value">Jl. Nakula, Buduk, Mengwi</span></li>
                                        <li><span class="title">Email</span><span class="value">aryabwidyatmika@gmail.com</span></li>
                                        <li><span class="title">Phone</span><span class="value">(+62) 831 1428 5234</span></li>
                                        <li><span class="title">Freelance</span><span class="value">Available</span></li>
                                    </ul>
                                    <div class="resume-button mt-30">
                                        <a class="btn-main" href="NewCV.pdf" target="_blank">Download Resume</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- About Info Row End-->

                        <!--Services Row Start-->
                        <div class="row services mb-30">
                            <div class="col-md-12">
                                <div class="subheading">
                                    <h3>Services</h3>
                                </div>
                            </div>

                            <!--Service Item-->
                            <div class="col-lg-3 col-sm-6">
                                <div class="service-item">
                                    <div class="icon"><i class="lnr lnr-laptop"></i></div>
                                    <h4>Web Development</h4>
                                    <p>Each website design i create is flawless and responds to every device it is viewed on</p>
                                </div>
                            </div>

                            <!--Service Item-->
                            <div class="col-lg-3 col-sm-6">
                                <div class="service-item">
                                    <div class="icon"><i class="lnr lnr-camera"></i></div>
                                    <h4>eCommerce</h4>
                                    <p>Integration of eCommerce platforms, payment gateways, custom product templates, and more.</p>
                                </div>
                            </div>

                            <!--Service Item-->
                            <div class="col-lg-3 col-sm-6">
                                <div class="service-item">
                                    <div class="icon"><i class="lnr lnr-laptop-phone"></i></div>
                                    <h4>Responsive Design</h4>
                                    <p>A responsive design makes your website accessible to all users, regardless of their device.</p>
                                </div>
                            </div>

                            <!--Service Item-->
                            <div class="col-lg-3 col-sm-6">
                                <div class="service-item">
                                    <div class="icon"><i class="lnr lnr-eye"></i></div>
                                    <h4>SEO</h4>
                                    <p>By optimizing your website for search engines, it will naturally drive traffic to the website based on keywords you wish to use</p>
                                </div>
                            </div>
                        </div>
                        <!--Services Row End-->

                        <!--Clients Row Start-->
                        <div class="row clients mb-70">
                            <div class="col-md-12">
                                <div class="subheading">
                                    <h3>Clients Website</h3>
                                </div>
                            </div>

                            <div class="owl-carousel owl-theme">

                                <!--Client Logo-->
                                <div class="client-logo">
                                    <a href="https://villaamaya.com/" target="_blank">
                                        <img src="img/klien/logo(1).png" alt="Villa Amaya">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://villaamita.com/" target="_blank">
                                        <img src="img/klien/logo(2).png" alt="Villa Amita">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.madeswarung.com/" target="_blank">
                                        <img src="img/klien/logo(3).png" alt="Mades Warung">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.goodnannybali.com/" target="_blank">
                                        <img src="img/klien/logo(4).png" alt="Good Nanny Bali">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://totalbali.com/" target="_blank">
                                        <img src="img/klien/logo(5).png" alt="Total Bali">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.technokomputerbali.com/" target="_blank">
                                        <img src="img/klien/logo(6).png" alt="Techno Computer Bali">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.maubooking.com/" target="_blank">
                                        <img src="img/klien/logo(7).png" alt="Mau Booking">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://mumbali.org/" target="_blank">
                                        <img src="img/klien/logo(8).png" alt="Mum Bali">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.themusevilla.com/" target="_blank">
                                        <img src="img/klien/logo(9).png" alt="The Muse Villa">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://madeswarungberawa.com/" target="_blank">
                                        <img src="img/klien/logo(10).png" alt="Mades Warung Berawa">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="#">
                                        <img src="img/klien/logo(11).png" alt="Paragon Futsal">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.puridamai.com/" target="_blank">
                                        <img src="img/klien/logo(12).png" alt="Puri Damain">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://sunsetpilatesbali.com/" target="_blank">
                                        <img src="img/klien/logo(13).png" alt="Sunset Pilates Bali">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.rumahmoon.com/" target="_blank">
                                        <img src="img/klien/logo(14).png" alt="Rumah Moon Villa">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://villasababeach.com/" target="_blank">
                                        <img src="img/klien/logo(15).png" alt="Villa Saba Beach">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="http://svabali.com/" target="_blank">
                                        <img src="img/klien/logo(16).png" alt="SVA Bali Restaurant">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.totalbaliactivities.com/" target="_blank">
                                        <img src="img/klien/logo(17).png" alt="Total Bali Activities">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://thirdmillenniahealth.com/" target="_blank">
                                        <img src="img/klien/logo(18).png" alt="Third Millennia Health">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.totalbalidirect.com/" target="_blank">
                                        <img src="img/klien/logo(19).png" alt="Total Bali Direct">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://tirtawines.com/" target="_blank">
                                        <img src="img/klien/logo(20).png" alt="Tirta Wines">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://villaaramis.com/" target="_blank">
                                        <img src="img/klien/logo(21).png" alt="Villa Aramis">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://villadayah.com/" target="_blank">
                                        <img src="img/klien/logo(22).png" alt="Villa Dayah">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://villaaumbali.com/" target="_blank">
                                        <img src="img/klien/logo(23).png" alt="Villa Aum Bali">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://baliheli.com/" target="_blank">
                                        <img src="img/klien/logo(24).png" alt="Bali Helicopters">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="http://www.bali-houses.com/" target="_blank">
                                        <img src="img/klien/logo(25).png" alt="Bali Houses">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="http://baliondemand.com/" target="_blank">
                                        <img src="img/klien/logo(26).png" alt="Bali On Demand">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="http://bungaseni.com/" target="_blank">
                                        <img src="img/klien/logo(27).png" alt="Bunga Seni">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://balivillaportfolio.com/" target="_blank">
                                        <img src="img/klien/logo(28).png" alt="Bali Villa Portfolio">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://dev.totalbali.com/crucialcover/" target="_blank">
                                        <img src="img/klien/logo(29).png" alt="Crucial Cover">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://cularcreative.com/" target="_blank">
                                        <img src="img/klien/logo(30).png" alt="Cular Creative">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.internationalglobalhealth.com/" target="_blank">
                                        <img src="img/klien/logo(31).png" alt="International Global Health">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.indoinvestments.com/" target="_blank">
                                        <img src="img/klien/logo(32).png" alt="Indo indoinvestments">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="http://konsciousgoods.com/" target="_blank">
                                        <img src="img/klien/logo(33).png" alt="Konscious Goods">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://villakalis.com/" target="_blank">
                                        <img src="img/klien/logo(34).png" alt="Villa Kalis">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://demo.kastemplus.com/" target="_blank">
                                        <img src="img/klien/logo(35).png" alt="Kastem Plus">
                                    </a>
                                </div>
                                <div class="client-logo">
                                    <a href="https://www.kaianaspa.com/" target="_blank">
                                        <img src="img/klien/logo(36).png" alt="Kaiana Spa">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <!--Clients Row End-->

                        
                    </div>
                </section>
                <!--About Section Start-->


                <!--Resume Section Start-->
                <section id="resume" class="resume-section pt-page">
                    <div class="section-container">
                        <div class="page-heading">
                            <span class="icon"><i class="lnr lnr-license"></i></span>
                            <h2>My Resume.</h2>
                        </div>

                        <!--Education & Experience Row Start-->
                        <div class="row mb-20">

                            <!--Experience Column Start-->
                            <div class="col-lg-6">
                                <div class="subheading">
                                    <h3>Experience</h3>
                                </div>
                                <ul class="experience">
				    <!--Experience Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Web Developer</h4>
                                            <h5>Kesato, Canggu</h5>
                                            <p class="info">
                                                Develop website and maintenance client website. 
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">Present</span>
                                            <span class="from">2020</span>
                                        </span>
                                    </li>	
					
                                    <!--Experience Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Head IT Web Developer</h4>
                                            <h5>Total Bali Incorporated, Legian</h5>
                                            <p class="info">
                                                Develop website and maintenance all website on company. In the company there are about 20 more websites that run in the field of villa agencies, insurance and retail.  
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2020</span>
                                            <span class="from">2017</span>
                                        </span>
                                    </li>

                                    <!--Experience Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Project Manager & Full Stack Developer of Paragon Futsal Information System Project</h4>
                                            <h5>Yogyakarta</h5>
                                            <p class="info">
                                                Paragon Futsal Information System was built with Code Igniter PHP Framework
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2017</span>
                                            <span class="from">2016</span>
                                        </span>
                                    </li>

                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Research/Thesis</h4>
                                            <h5>Yogyakarta</h5>
                                            <p class="info">
                                                Built Course Taking Recommendation System using Genetic Algorithm and Constraint Satisfaction Method, System was built with Code Igniter PHP Framework and Javascript 
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2017</span>
                                            <span class="from">2016</span>
                                        </span>
                                    </li>

                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Full stack Developer for FTI & BEMU UKDW Election</h4>
                                            <h5>Duta Wacana Christian, University, Yogyakarta</h5>
                                            <p class="info">
                                                Built E-vote website for FTI & BEMU UKDW Election using Codeigniter Framework 
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2015</span>
                                            <span class="from">2015</span>
                                        </span>
                                    </li>

                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Internship as Front-end Programmer </h4>
                                            <h5>CV. Mahatala Network, Yogyakarta</h5>
                                            <p class="info">
                                            	Build Management Information System for Hospital (SIMRS) Datu Rantau Hospital using Codeigniter Framework     
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2015</span>
                                            <span class="from">2015</span>
                                        </span>
                                    </li>

                                    <!--Experience Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Assistant Lecturer </h4>
                                            <h5>Duta Wacana Christian University, Yogyakarta</h5>
                                            <p class="info">
                                            	- Web Programming Assistant Lecturer (2016)<br>
                                            	- SAP (Systems Analysis and Program Development) Assistant Lecturer (2014-2016)<br>
                                            	- Algorithm and Programming Assistant Lecturer (2013-2014)    
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2015</span>
                                            <span class="from">2014</span>
                                        </span>
                                    </li>

                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Active in several student organizations on campus and church</h4>
                                            <h5>Duta Wacana Christian University, Yogyakarta</h5>
                                            <p class="info">
                                                - Leader of Raker & Makrab Lembaga Kemahasiswaan Fakultas TI UKDW (2016)<br>
                                                - Member of Badan Perwakilan Mahasiswa (BPM) Fakultas TI UKDW (2015-2016)<br>
                                                - Coordinator of Equipment Division IT Fest UKDW (2015)<br>
                                                - Publication & Documentation Camp Capacity Building Youth GKI Gejayan (2014)<br>
                                                - Vice Leader of RCTI event (Refreshing Cah TI) (2013)
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2015</span>
                                            <span class="from">2013</span>
                                        </span>
                                    </li>

                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Internship as Technicians </h4>
                                            <h5>Dewata Lintas Komputer, Denpasar</h5>
                                            <p class="info">
                                                Internship program while studied at SMK N 1 Denpasar
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2011</span>
                                            <span class="from">2010</span>
                                        </span>
                                    </li>


                                </ul>


                            </div>
                            <!--Experience Column End-->

                            <!--Education Column Start-->
                            <div class="col-lg-6">
                                <div class="subheading">
                                    <h3>Education</h3>
                                </div>

                                <ul class="education">

                                    <!--Education Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Duta Wacana Christian University </h4>
                                            <h5>Yogyakarta</h5>
                                            <p class="info"> 	          	
												Bachelor Majored in Information Technology
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2016</span>
                                            <span class="from">2012</span>
                                        </span>
                                    </li>

                                    <!--Education Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>SMK N 1 Denpasar</h4>
                                            <h5>Denpasar</h5>
                                            <p class="info">
                                            	Vocational School Majored in Rekayasa Perangkat Lunak (Software Engineering)
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2012</span>
                                            <span class="from">2009</span>
                                        </span>
                                    </li>

                                    <!--Education Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>SMPK 1 Harapan Denpasar</h4>
                                            <h5>Denpasar</h5>
                                            <p class="info">
                                            	Junior Higt School Formal Education 
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2012</span>
                                            <span class="from">2011</span>
                                        </span>
                                    </li>

                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>SDK Harapan Denpasar</h4>
                                            <h5>Denpasar</h5>
                                            <p class="info">
                                            	Elementary School Formal Education 
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2006</span>
                                            <span class="from">2002</span>
                                        </span>
                                    </li>

                                </ul>


                                <div class="subheading">
                                    <h3>Award & Certificate</h3>
                                </div>

                                <ul class="education">
                                	<li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Finalist Hackathon with Government Competition “Berdaya Bersama untuk Indonesia”</h4>
                                            <h5> Yogyakarta</h5>
                                           
                                        </div>
                                        <span class="year">
                                            <span class="to">2015</span>
                                            <span class="from">2015</span>
                                        </span>
                                    </li>

                                	<li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Oracle Database 11g: PL/SQL Release 2</h4>
                                            <h5>Duta Wacana Christian University, Yogyakarta</h5>
                                           
                                        </div>
                                        <span class="year">
                                            <span class="to">2015</span>
                                            <span class="from">2015</span>
                                        </span>
                                    </li>

                                	<li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>2nd Place Course Task Competition ITCompFest</h4>
                                            <h5>Duta Wacana Christian University, Yogyakarta</h5>
                                           
                                        </div>
                                        <span class="year">
                                            <span class="to">2015</span>
                                            <span class="from">2015</span>
                                        </span>
                                    </li>	

                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>3rd Place Mobile Apps Competition ITCompFest</h4>
                                            <h5>Duta Wacana Christian University, Yogyakarta</h5>
                                           
                                        </div>
                                        <span class="year">
                                            <span class="to">2015</span>
                                            <span class="from">2015</span>
                                        </span>
                                    </li>


                                    <!--Education Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Certificate of Course Completion CCNA:Network Fundamentals</h4>
                                            <h5>Duta Wacana Christian University, Yogyakarta</h5>
                                        </div>
                                        <span class="year">
                                            <span class="to">2014</span>
                                            <span class="from">2014</span>
                                        </span>
                                    </li>

                                    <!--Education Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Certificate of Accomplishment SAP</h4>
                                            <h5>Duta Wacana Christian University, Yogyakarta</h5>
                                           
                                        </div>
                                        <span class="year">
                                            <span class="to">2014</span>
                                            <span class="from">2014</span>
                                        </span>
                                    </li>

                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>3rd Place English Debate Competition ITCompFest</h4>
                                            <h5>Duta Wacana Christian University, Yogyakarta</h5>
                                           
                                        </div>
                                        <span class="year">
                                            <span class="to">2013</span>
                                            <span class="from">2013</span>
                                        </span>
                                    </li>


                                </ul>
                            </div>
                            <!--Education Column End-->

                        </div>
                        <!--Education & Experience Row End-->


                        <!--Skills Row Start-->
                        <div class="row">
                        	 <!--Coding Skills Column Start-->
                            <div class="col-lg-6 skills">
                                <div class="subheading">
                                    <h3>Coding Skills</h3>
                                </div>

                                <!--Coding Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">PHP Framework CI & Native</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="90">
                                            <div class="progress-value">90%</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <h4 class="progress-title">JAVA</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="70">
                                            <div class="progress-value">70%</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Coding Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">HTML5</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="83">
                                            <div class="progress-value">83%</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Coding Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">CSS3</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="88">
                                            <div class="progress-value">88%</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Coding Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">Javascript</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="83">
                                            <div class="progress-value">83%</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Design Skills Column Start-->
                            <div class="col-lg-6 skills">
                                <div class="subheading">
                                    <h3>Design Skills</h3>
                                </div>

                                <!--Design Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">Photoshop</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="94">
                                            <div class="progress-value">94%</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Design Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">Illustrator</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="75">
                                            <div class="progress-value">75%</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Design Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">Coral Draw</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="80">
                                            <div class="progress-value">80%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Design Skills Column End-->

                           
                            <!--Coding Skills Column End-->

                        </div>
                        <!--Skills Row End-->
                    </div>
                </section>
                <!--Resume Section End-->


                <!--Porfolio Section Start-->
                <section id="portfolio" class="portfolio-section pt-page">
                    <div class="section-container">

                        <!--Page Heading-->
                        <div class="page-heading">
                            <span class="icon"><i class="lnr lnr-briefcase"></i></span>
                            <h2>Portfolio.</h2>
                        </div>

                        <div class="row">
                            <!--Portfolio Filter-->
                            <div class="col-md-12 portfolio-filter text-center">
                                <ul>
                                    <li class="active" data-filter="*">All</li>
                                    <li data-filter=".html">HTML</li>
                                    <li data-filter=".php">PHP</li>
                                    <li data-filter=".wordpress">WORDPRESS</li>
                                    <li data-filter=".java">JAVA</li>
                                    <li data-filter=".mobile">MOBILE</li>
                                </ul>
                            </div>
                        </div>

                        <!--Portfolio Items-->
                        <div class="row portfolio-items mb-50">
                

                            


                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/aryairmalovestories.JPG">
                                    <figure>
                                        <img src="portfolio/aryairmalovestories.JPG" alt="aryairmalovestories">
                                        <figcaption>
                                            <h4>Arya Irma Love Stories</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/skripsi.jpg">
                                    <figure>
                                        <img src="portfolio/skripsi.jpg" alt="Course Taking Recommendation System">
                                        <figcaption>
                                            <h4>Course Taking Recommendation System</h4>
                                            <p>Reseach thesis of informatics engineering UKDW. Implementaion using Genetic Algorithm and Constraint Satisfaction Method. Using PHP Codeigniter, Javascript, Bootstrap, CSS, MySql</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>


                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress">
                                <a class="image-link" href="portfolio/baliheli.JPG">
                                    <figure>
                                        <img src="portfolio/baliheli.JPG" alt="Bali Heli">
                                        <figcaption>
                                            <h4>Bali Heli</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/bali-houses.JPG">
                                    <figure>
                                        <img src="portfolio/bali-houses.JPG" alt="Bali Houses">
                                        <figcaption>
                                            <h4>Bali Houses</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress">
                                <a class="image-link" href="portfolio/bod.JPG">
                                    <figure>
                                        <img src="portfolio/bod.JPG" alt="Bali on Demand">
                                        <figcaption>
                                            <h4>Bali on Demand</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress">
                                <a class="image-link" href="portfolio/bungaseni.JPG">
                                    <figure>
                                        <img src="portfolio/bungaseni.JPG" alt="Bunga Seni Beauty">
                                        <figcaption>
                                            <h4>Bunga Seni Beauty</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/bvp.JPG">
                                    <figure>
                                        <img src="portfolio/bvp.JPG" alt="Bali Villa Portfolio">
                                        <figcaption>
                                            <h4>Bali Villa Portfolio</h4>
                                            <p>PHP Codeigniter</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/simrs.jpg">
                                    <figure>
                                        <img src="portfolio/simrs.jpg" alt="Datu Rantau Hospital Information System">
                                        <figcaption>
                                            <h4>Datu Rantau Hospital Information System</h4>
                                            <p>Internship project at CV. Mahatala Network as Front end programmer. Using PHP Codeigniter, Javascript, Bootstrap, CSS, MySql</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 html">
                                <a class="image-link" href="portfolio/crucialcover.JPG">
                                    <figure>
                                        <img src="portfolio/crucialcover.JPG" alt="Crucial Cover">
                                        <figcaption>
                                            <h4>Crucial Cover Insurance</h4>
                                            <p>Website HTML</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/cularcreative.JPG">
                                    <figure>
                                        <img src="portfolio/cularcreative.JPG" alt="Cular Creative">
                                        <figcaption>
                                            <h4>Cular Creative</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/goodnannybali.JPG">
                                    <figure>
                                        <img src="portfolio/goodnannybali.JPG" alt="Good Nanny Bali">
                                        <figcaption>
                                            <h4>Good Nanny Bali</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 html">
                                <a class="image-link" href="portfolio/gusbali.JPG">
                                    <figure>
                                        <img src="portfolio/gusbali.JPG" alt="GUS Bali">
                                        <figcaption>
                                            <h4>GUS Bali</h4>
                                            <p>Website HTML</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/ighinsurance.JPG">
                                    <figure>
                                        <img src="portfolio/ighinsurance.JPG" alt="IGH Insurance">
                                        <figcaption>
                                            <h4>IGH Insurance</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress">
                                <a class="image-link" href="portfolio/indoinvestment.JPG">
                                    <figure>
                                        <img src="portfolio/indoinvestment.JPG" alt="Indo Investments">
                                        <figcaption>
                                            <h4>Indo Investments</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress">
                                <a class="image-link" href="portfolio/kaianaspa.JPG">
                                    <figure>
                                        <img src="portfolio/kaianaspa.JPG" alt="Kaiana Spa">
                                        <figcaption>
                                            <h4>Kaiana Spa</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 java">
                                <a class="image-link" href="portfolio/java.jpg">
                                    <figure>
                                        <img src="portfolio/java.jpg" alt="Student Activity Manager">
                                        <figcaption>
                                            <h4>Student Activity Manager</h4>
                                            <p>Course Task of Rekayasa Perangkat Lunak. Using Java, Eclips (https://www.youtube.com/watch?v=lKNE3rjZEIc)</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress" >
                                <a class="image-link" href="portfolio/konscious.JPG">
                                    <figure>
                                        <img src="portfolio/konscious.JPG" alt="Konscious Goods">
                                        <figcaption>
                                            <h4>Konscious Goods</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/lembonganhills.JPG">
                                    <figure>
                                        <img src="portfolio/lembonganhills.JPG" alt="lembonganhills">
                                        <figcaption>
                                            <h4>Lembongan Hills</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/madeswarung.JPG">
                                    <figure>
                                        <img src="portfolio/madeswarung.JPG" alt="madeswarung">
                                        <figcaption>
                                            <h4>Made's Warung</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress">
                                <a class="image-link" href="portfolio/madeswarungberawa.JPG">
                                    <figure>
                                        <img src="portfolio/madeswarungberawa.JPG" alt="madeswarungberawa">
                                        <figcaption>
                                            <h4>Made's Warung Berawa</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress">
                                <a class="image-link" href="portfolio/mauboking.JPG">
                                    <figure>
                                        <img src="portfolio/mauboking.JPG" alt="mauboking">
                                        <figcaption>
                                            <h4>Maubooking.com</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/mumbali.JPG">
                                    <figure>
                                        <img src="portfolio/mumbali.JPG" alt="mumbali">
                                        <figcaption>
                                            <h4>MUM Bali</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/puridamai.JPG">
                                    <figure>
                                        <img src="portfolio/puridamai.JPG" alt="puridamai">
                                        <figcaption>
                                            <h4>Puri Damai</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/rumahmoon.JPG">
                                    <figure>
                                        <img src="portfolio/rumahmoon.JPG" alt="rumahmoon">
                                        <figcaption>
                                            <h4>Rumah Moon</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress">
                                <a class="image-link" href="portfolio/seminyakmuse.JPG">
                                    <figure>
                                        <img src="portfolio/seminyakmuse.JPG" alt="seminyakmuse">
                                        <figcaption>
                                            <h4>Seminyak The Muse Villa</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/pemilubem.jpg">
                                    <figure>
                                        <img src="portfolio/pemilubem.jpg" alt="E-vote website for FTI & BEMU UKDW Election">
                                        <figcaption>
                                            <h4>E-vote website for FTI & BEMU UKDW Election</h4>
                                            <p>Using PHP Codeigniter, Javascript, Bootstrap, CSS, MySql</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress">
                                <a class="image-link" href="portfolio/sunsetpillates.JPG">
                                    <figure>
                                        <img src="portfolio/sunsetpillates.JPG" alt="sunsetpilates">
                                        <figcaption>
                                            <h4>Sunset Pilates Bali</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/svabali.JPG">
                                    <figure>
                                        <img src="portfolio/svabali.JPG" alt="svabali">
                                        <figcaption>
                                            <h4>SVA Bali</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/tanahlotmuse.JPG">
                                    <figure>
                                        <img src="portfolio/tanahlotmuse.JPG" alt="tanahlotmuse">
                                        <figcaption>
                                            <h4>Tanah Lot The Muse Villa</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/tbd.JPG">
                                    <figure>
                                        <img src="portfolio/tbd.JPG" alt="tbd">
                                        <figcaption>
                                            <h4>Total Bali Direct</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 html">
                                <a class="image-link" href="portfolio/themusevilla.JPG">
                                    <figure>
                                        <img src="portfolio/themusevilla.JPG" alt="themusevilla">
                                        <figcaption>
                                            <h4>The Muse Villa</h4>
                                            <p>Website HTML</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress">
                                <a class="image-link" href="portfolio/tirtawines.JPG">
                                    <figure>
                                        <img src="portfolio/tirtawines.JPG" alt="tirtawines">
                                        <figcaption>
                                            <h4>Tirta Wines</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/tmh.JPG">
                                    <figure>
                                        <img src="portfolio/tmh.JPG" alt="tmh">
                                        <figcaption>
                                            <h4>Third Millennia Health</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/totalbali.JPG">
                                    <figure>
                                        <img src="portfolio/totalbali.JPG" alt="totalbali">
                                        <figcaption>
                                            <h4>Total Bali</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 wordpress">
                                <a class="image-link" href="portfolio/totalbaliactivities.JPG">
                                    <figure>
                                        <img src="portfolio/totalbaliactivities.JPG" alt="totalbaliactivities">
                                        <figcaption>
                                            <h4>Total Bali Activities</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/paragon.jpg">
                                    <figure>
                                        <img src="portfolio/paragon.jpg" alt="Paragon Futsal Information System">
                                        <figcaption>
                                            <h4>Paragon Futsal Information System</h4>
                                            <p>Using PHP Codeigniter, Javascript, Bootstrap, CSS, MySql</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/totalbalivillas.JPG">
                                    <figure>
                                        <img src="portfolio/totalbalivillas.JPG" alt="totalbalivillas">
                                        <figcaption>
                                            <h4>Total Bali Villas</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villaai.jpg">
                                    <figure>
                                        <img src="portfolio/villaai.jpg" alt="villaai">
                                        <figcaption>
                                            <h4>Villa Ai</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villaamaya.JPG">
                                    <figure>
                                        <img src="portfolio/villaamaya.JPG" alt="villaamaya">
                                        <figcaption>
                                            <h4>Villa Amaya</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villaamita.JPG">
                                    <figure>
                                        <img src="portfolio/villaamita.JPG" alt="villaamita">
                                        <figcaption>
                                            <h4>Villa Amita</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villaaramis.JPG">
                                    <figure>
                                        <img src="portfolio/villaaramis.JPG" alt="villaaramis">
                                        <figcaption>
                                            <h4>Villa Aramis</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villaaum.JPG">
                                    <figure>
                                        <img src="portfolio/villaaum.JPG" alt="villaaum">
                                        <figcaption>
                                            <h4>Villa AUM</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villadayah.JPG">
                                    <figure>
                                        <img src="portfolio/villadayah.JPG" alt="villadayah">
                                        <figcaption>
                                            <h4>Villa Dayah</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villakalis.JPG">
                                    <figure>
                                        <img src="portfolio/villakalis.JPG" alt="villakalis">
                                        <figcaption>
                                            <h4>Villa Kalis</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villamona.JPG">
                                    <figure>
                                        <img src="portfolio/villamona.JPG" alt="villamona">
                                        <figcaption>
                                            <h4>Villa Mona</h4>
                                            <p>Wordpress</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 mobile">
                                <a class="image-link" href="portfolio/mobile.jpg">
                                    <figure>
                                        <img src="portfolio/mobile.jpg" alt="mobile">
                                        <figcaption>
                                            <h4>Backpacker Android Application Prototype </h4>
                                            <p>Course Task of Mobile Programming. Using Java, Android Studio</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villasababeach.JPG">
                                    <figure>
                                        <img src="portfolio/villasababeach.JPG" alt="villasababeach">
                                        <figcaption>
                                            <h4>Villa Saba Beach</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villatirtadari.JPG">
                                    <figure>
                                        <img src="portfolio/villatirtadari.JPG" alt="villatirtadari">
                                        <figcaption>
                                            <h4>Villa Tirtadari</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/bikecomunity.jpg">
                                    <figure>
                                        <img src="portfolio/bikecomunity.jpg" alt="bike Community">
                                        <figcaption>
                                            <h4>Bike Community</h4>
                                            <p>Website PHP, Course Task of Web Programming</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villatombali.JPG">
                                    <figure>
                                        <img src="portfolio/villatombali.JPG" alt="villatombali">
                                        <figcaption>
                                            <h4>Villa Tom Bali</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 php html">
                                <a class="image-link" href="portfolio/villaumalas.JPG">
                                    <figure>
                                        <img src="portfolio/villaumalas.JPG" alt="villaumalas">
                                        <figcaption>
                                            <h4>Villa Umalas</h4>
                                            <p>Website PHP</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            

                        </div>
                    </div>
                </section>
                <!--Porfolio Section End-->




                <!--Contact Section Start-->
                <section id="contact" class="contact-section pt-page">
                    <div class="section-container">

                        <!--Page Heading-->
                        <div class="page-heading">
                            <span class="icon"><i class="lnr lnr-envelope"></i></span>
                            <h2>Contact Me.</h2>
                        </div>

                        <!--Form Row-->
                        <div class="row mb-70">
                            <div class="col-lg-8  offset-lg-2">
                                <div class="subheading">
                                    <h3>Let's Talk</h3>
                                </div>

                                <!--Form Start-->
                                <form id="contact-form" method="post" action="index.php">
                                    <div class="row">


                                        <!--Name Field-->
                                        <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field cf-validate" type="text" id="cf-name" name="name" />
                                                <label class="input__label" for="cf-name">Name</label>
                                            </span>
                                        </div>

                                        <!--Email Field-->
                                        <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field cf-validate" type="text" id="cf-email" name="email" />
                                                <label class="input__label" for="cf-email">Email</label>
                                            </span>
                                        </div>

                                        <!--Message Box-->
                                        <div class="col-md-12 mb-30">
                                            <span class="input">
                                                <textarea  class="input__field cf-validate" id="cf-message" name="message" rows="5" ></textarea>
                                                <label class="input__label" for="cf-message">How can we help you?</label>
                                            </span>
                                        </div>

                                        <div class="alert-container col-md-12">
                                            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                        </div>

                                        <!--Submit Button-->
                                        <div class="col-md-12 text-center">
                                            <button id="enqurynow" type="submit" name="enqurynow" class="btn-main">Send Message</button>
                                        </div>


                                    </div>
                                </form>
                                <!--Form End-->

                            </div>
                        </div>

                        <!--Contact Info Row Start-->
                        <div class="row contact-info mb-70">

                            <!--Contact Info Item-->
                            <div class="col-md-4 info-item">
                                <span class="icon"><i class="fas fa-paper-plane"></i></span>
                                <h5><a href="mailto:example@example.com">aryabwidyatmika@gmail.com</a></h5>
                            </div>

                            <!--Contact Info Item-->
                            <div class="col-md-4 info-item">
                                <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                                <h5>Legian, Bali</h5>
                            </div>

                            <!--Contact Info Item-->
                            <div class="col-md-4 info-item">
                                <span class="icon"><i class="fas fa-phone"></i></span>
                                <h5>(+62) 831 1428 5234</h5>
                            </div>

                        </div>
                        <!--Contact Info Row End-->

                    </div>
                    
                </section>
                <!--Contact Section End-->


            </div>
            <!--Main End-->

        </div>

        <!--Ajax Portfolio Container Start-->
        <div class="ajax-portfolio-popup" data-simplebar>
            <span class="ajax-loader"></span>
            <div class="navigation-wrap">
                <span class="popup-close"><i class="fas fa-times-circle"></i></span>
            </div>
            <div class="content-wrap">
                <div class="popup-content"></div>
            </div>
        </div>
        <!--Ajax Portfolio Container End-->

        <!--Jquery JS-->
        <script src="js/jquery.min.js"></script>
        <!--Plugins JS-->
        <script src="js/plugins.min.js"></script>
        <!--Google Map Api-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxjdAabKFsk7CHhYq3VNKkwRyonhLHWDo"></script>
        <!--Site Main JS-->
        <script src="js/main.js"></script>

        <script src="js/main-demo.js"></script>

        <script src="https://www.google.com/recaptcha/api.js?render=6LdNMvoUAAAAAH-LiHkds8lJCzIZHfh8vSuXWPXJ"></script>
        <script type='text/javascript'>
            grecaptcha.ready(function(){grecaptcha.execute("6LdNMvoUAAAAAH-LiHkds8lJCzIZHfh8vSuXWPXJ",{action:"index"}).then(function(token){var f=document.getElementsByName("recaptcha_response");for(var i=0;i<f.length;i++){f[i].value = token;}});});
        </script>

        <script>
            //Super Slider
            $('#slides').superslides({
                animation: 'fade',
                play: 3000
            });
        </script>

    </body>
</html>




