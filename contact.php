<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
    <!--Custom Styles-->
    <link rel="stylesheet" href="./css/contact.css?<?php echo time();?>">
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
                            <li class="nav-item mr-3">
                                <a href="gallery.php" class="nav-link">Gallery</a>
                            </li>
                            <li class="nav-item mr-3 active">
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
                <h2><img src="./images/contact.svg" alt="about" class="content-header-img"/>&nbsp;Contact Us</h2>
                <hr/>
                <div class="contact shadow-lg d-flex">
                    <div class="map">
                    <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Anand%20heights%2C%20First%20floor%2C%20kedareswarpet%20main%20road%2C%20vijayawada%2C%20A.P%2C%20India%20-%20520003&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                    <div class="form p-3">
                        <form method="POST" id="sendmail">
                            <div class="form-row mb-3">
                                <div class="col">
                                    <input type="text" name="name" placeholder="Your Name" class="form-control" id="name">
                                </div>
                                <div class="col">
                                    <input type="email" name="email" placeholder="Your Email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="subject" placeholder="Subject" class="form-control" id="subject">
                            </div>
                            <div class="form-group mb-3">
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Your Message..."></textarea>
                            </div>
                            <div class="form-group mb-3 text-center sendbtn">
                                <button type="submit"><span class="text">Send Message</span>&nbsp;<img src="./images/send.svg" alt="send"/></button>
                            </div>
                        </form>
                    </div>
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
    <!--Sweet Alert-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#sendmail").submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:`https://${window.location.hostname}/mail.php`,
                    type:'POST',
                    context:this,
                    data:$(this).serialize(),
                    beforeSend:function(){
                        $(this).find(".text").text("Sending");
                    },
                    success:function(result,status,xhr){
                        $(this).find(".text").text("Send Message");
                        if(result.status == 1)
                        {
                            swal("Thank You!",`${result.message}`,"success");
                        }
                        else if(result.status == 0)
                        {
                            swal("Error",`${result.message}`,"error");
                        }
                    }
                });
            });
        });
    </script>
    <script src="./js/custom.js"></script>
</body>
</html>