<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!--Swiper CSS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!--Custom Styles-->
    <link rel="stylesheet" href="./css/gallery.css">
    <style>
        #logout
        {
            border:none;
            outline:none;
            background:transparent;
            color:white;
            margin-top:8px;
            font-weight:bold;
        }
        .logout,.categories{
            display:none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg shadow-lg">
                    <a href="index.php" class="navbar-brand">
                        <img src="https://ik.imagekit.io/o0om8c0nr9/feed-logo_-83k1em5G.png" alt="Feed Logo" class="ml-3 org-logo">
                        <img src="https://ik.imagekit.io/o0om8c0nr9/feed-logo1_s5yfTQ3r6.png" alt="Feed Logo" class="ml-3 resp-logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dropdown">
                        <span class="navbar-toggler-icon"><img src="./images/burger.svg" alt="hamburger" class="burger"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="dropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mr-3">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a href="about.php" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a href="why-feed.php" class="nav-link">Why Feed</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a href="services.php" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a href="workflow.php" class="nav-link">Workflow</a>
                            </li>
                            <li class="nav-item mr-3 active">
                                <a href="gallery.php" class="nav-link">Gallery</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a href="contact.php" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item mr-3 categories">
                                <a href="modules.php" class="nav-link">Categories</a>
                            </li>
                            <li class="nav-item mr-3 pr-2 pl-2 logout">
                                <button type="button" id="logout">Logout</button>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row content-row">
            <div class="col-lg-12" style="padding:30px!important;">
                <h2><img src="./images/gallery.svg" alt="about" class="content-header-img"/>&nbsp;Gallery</h2>
                <hr/>
                <!--Swiper Slider-->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide1"></div>
                        <div class="swiper-slide slide2"></div>
                        <div class="swiper-slide slide3"></div>
                        <div class="swiper-slide slide4"></div>
                        <div class="swiper-slide slide5"></div>
                        <div class="swiper-slide slide6"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <footer class="footer-row p-3">
        <div class="main_grass">
                
                </div>
            <!--Desktops-->
            <div class="row text-white desktops">
                <div class="col-lg-4 col-xs-2 d-flex justify-content-center">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="why-feed.php">Why Feed</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="workflow.php">Workflow</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                    <ul>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 d-flex flex-column smedia">
                    <ul class="m-auto">
                        <li><i class="fa fa-map-marker"></i>&nbsp;Head Office: Anand Heights, First Floor, Near Prabhas College, Kedareswarpet Main Rd, Vijayawada - 520003, A.P, India.</li>
                        <li><i class="fa fa-envelope"></i>&nbsp;feedexports@gmail.com</li>
                        <li><i class="fa fa-phone"></i>&nbsp;9293858689, 8977040509</li>
                    </ul>
                    <ul class="d-flex">
                        <li><a href="https://www.facebook.com/FEED-113624757189610/?modal=admin_todo_tour"><img src="./images/fb.svg"></a></li>
                        <li><a href="#"><img src="./images/twt.svg"></a></li>
                        <li><a href="https://www.instagram.com/feed6306/"><img src="./images/insta.svg"></a></li>
                        <li><a href="#"><img src="./images/telegram.svg"></a></li>
                        <li><a href="https://www.youtube.com/channel/UCS_hVI8UKW4bC0TOhTICBTA"><img src="./images/yt.svg"></a></li>
                    </ul>
                </div>
          </div>
          <!--Mobiles-->
          <div class="row text-white mobiles">
                <div class="col-lg-12 d-flex justify-content-between flex-column">
                    <div class="d-flex justify-content-between">
                        <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="why-feed.php">Why Feed</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="workflow.php">Workflow</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="d-flex flex-column">
                        <ul class="m-auto">
                        <li><i class="fa fa-map-marker"></i>&nbsp;Head Office: Anand Heights, First Floor, Near Prabhas College, Kedareswarpet Main Rd, Vijayawada - 520003, A.P, India.</li>
                        <li><i class="fa fa-envelope"></i>&nbsp;feedexports@gmail.com</li>
                        <li><i class="fa fa-phone"></i>&nbsp;9293858689, 8977040509</li>
                        </ul>
                        <ul class="d-flex mt-2 msmedia">
                            <li><a href="https://www.facebook.com/FEED-113624757189610/?modal=admin_todo_tour"><img src="./images/fb.svg"></a></li>
                            <li><a href="#"><img src="./images/twt.svg"></a></li>
                            <li><a href="https://www.instagram.com/feed6306/"><img src="./images/insta.svg"></a></li>
                            <li><a href="#"><img src="./images/telegram.svg"></a></li>
                            <li><a href="https://www.youtube.com/channel/UCS_hVI8UKW4bC0TOhTICBTA"><img src="./images/yt.svg"></a></li>
                        </ul>
                    </div>
                </div>
          </div>
          <div class="row d-flex justify-content-center">
            <hr/>
            <p class="text-white">@FEED Site by <a href="http://www.kreativebuddha.com/" target="_blank" style="text-decoration:underline!important;">Kreative Buddha</a></p>
          </div>
        </footer>
    </div>
    <!--Swiper JS-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      }
    });
  </script>
  <script src="./js/custom.js"></script>
</body>
</html>