<!DOCTYPE html>
<html lang="en">
<head>
    <title>Feed - Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!--Animate.CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />
    <!--Owl Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!--Smatbot-->
    <link rel="stylesheet" href="https://s3.amazonaws.com/smatbot/files/smatbot.css.gz"><script type="text/javascript">var otherPulseDiv=document.createElement("DIV");otherPulseDiv.id="pulse_smatbot_unique";var mainDiv=document.createElement("DIV");otherPulseDiv.appendChild(mainDiv);mainDiv.id="closed";var img=document.createElement("Img");img.id="main_icon_smatest";img.src="https://s3.ap-south-1.amazonaws.com/custpostimages/sb_images/chat-loading.gif";var imgLogo=document.createElement("Img");imgLogo.id="logo-smatest";imgLogo.classList.add("logo-smatest");mainDiv.appendChild(img);mainDiv.classList.add("pointer");mainDiv.classList.add("smat-div-before");img.classList.add("smat-main-btn-before");otherPulseDiv.classList.add("pulse-div-before");document.addEventListener("DOMContentLoaded",function(event){document.body.appendChild(otherPulseDiv)});</script><script type="text/javascript">!function(t,e){"use strict";var r=function(t){try{var r=e.head||e.getElementsByTagName("head")[0],a=e.createElement("script"),b=document.getElementsByTagName("script")[0];a.setAttribute("type","text/javascript"),a.setAttribute("src",t),a.async=!0,r.insertBefore(a,b)}catch(t){}};t.chatbot_id=5126,r("https://s3.amazonaws.com/smatbot/files/smatbot_plugin.js.gz")}(window,document);</script><script src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/1.5.1/fingerprint2.min.js"></script>
    <!--Custom Styles-->
    <link rel="stylesheet" href="./css/index.css?<?php echo time();?>">
    <!--Owl carousel Initialization-->
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:false,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:2
                    },
                    500:{
                        items:3
                    },
                    600:{
                        items:4
                    },
                    800:{
                        items:4
                    },
                    1000:{
                        items:5
                    },
                    1024:{
                        items:5
                    }
                }
            });
        });
    </script>
    <style>
        .categories-index{
            display:none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="fd-cover d-flex justify-content-center">
                <div class="mt-2 logreg">
                    <button type="button" class="log">Login</button>
                    <button type="button" class="reg">Register</button>
                    <button type="button" id="logout">Logout</button>
                </div>
                <!--<img src="./images/feed_logo.png" alt="logo" class="org-logo">-->
                <img src="https://ik.imagekit.io/o0om8c0nr9/feed_logo_FMQXPSC69w.png" alt="logo" class="org-logo">
                <!--<img src="./images/feed_logo_resp.png" alt="logo" class="resp-logo">-->
                <img src="https://ik.imagekit.io/o0om8c0nr9/Feed_logo_250_250_wrSZQTr0p.png" alt="logo" class="resp-logo">
                <h1 class="text-center mt-4">FARM TO FOREIGN EXPORTS ENTREPRENEURSHIP DEVELOPMENT MULTI STATE COOPERATIVE SOCIETY LTD. <span>REG.No: MSCS/CR/1295/2020</span></h1>
            </div>
        </div>
       <div class="row">
           <img src="./images/previous.svg" alt="previous" class="prevbtn">
           <div class="owl-carousel owl-theme">
               <div class="item">
                   <a href="index.php">
                    <img src="https://ik.imagekit.io/o0om8c0nr9/feed_home_vrHmc-_ayi.png" alt="home" class="img img-responsive">
                    <h4>Home</h4>
                    </a>
               </div>
               <div class="item">
                   <a href="about.php">
                 <img src="https://ik.imagekit.io/o0om8c0nr9/feed_about_D7O2UCmST.png" alt="about" class="img img-responsive">
                    <h4>About Us</h4>
                 </a>
               </div>
               <div class="item">
                   <a href="why-feed.php">
                    <img src="https://ik.imagekit.io/o0om8c0nr9/why_feed_uEY7B75sJx.png" alt="why feed" class="img img-responsive">
                    <h4>Why Feed</h4>
                    </a>
               </div>
               <div class="item">
                   <a href="gallery.php">
                <img src="https://ik.imagekit.io/o0om8c0nr9/feed_gallery_hiB4jbEvWH.png" alt="gallery" class="img img-responsive">
                    <h4>Gallery</h4>
                </a>
               </div>
               <div class="item">
                <a href="contact.php">
                <img src="https://ik.imagekit.io/o0om8c0nr9/contact_Fv24ai0uGh.png" alt="contact" class="img img-responsive">
                    <h4>Contact Us</h4>
                </a>
               </div>
               <div class="item">
                <a href="" download id="brochure">
                <img src="https://ik.imagekit.io/o0om8c0nr9/download_3F1hdnSONZ.svg" alt="contact" class="img img-responsive">
                    <h4>Feed Profile</h4>
                </a>
               </div>
               <div class="item">
                   <a href="services.php">
                <img src="https://ik.imagekit.io/o0om8c0nr9/services_xyKU4lLoX.svg" alt="services" class="img img-responsive">
                    <h4>Feed Services</h4>
                </a>
               </div>
               <div class="item">
                   <a href="workflow.php">
                <img src="https://ik.imagekit.io/o0om8c0nr9/workflow_Uo4qa0WBe7.svg" alt="workflow" class="img img-responsive">
                    <h4>Feed Workflow</h4>
                </a>
               </div>
               <div class="item categories-index">
                   <a href="modules.php">
                    <img src="./images/category-icon.svg" alt="categories" class="img img-responsive">
                    <h4>Categories</h4>
                   </a>
               </div>
           </div>
           <img src="./images/next.svg" alt="next" class="nextbtn">
       </div>
        <div class="row about-row">
            <div class="about-content shadow-lg">
                <div class="about-fade-layer p-3">
                <h2>About Us</h2>
                <p>
                Farm to Foreign Exports Entrepreneurship Development Multi state Cooperative Society Ltd. (FEED) is a 
                multi-state cooperative society working for the uplift of exports from all corners of India. 
                We provide socio-technical platform between: “Traders, Farmers, MSME industries & new entrepreneurs” in Rural and Semi urban areas AND “International markets, 
                Export promotional councils, Central and State governments, Banks and Financial institutes, Ports” By organizing Export promotional meetings, 
                forming FPOs (product wise) and supporting the FPOs with technical information on processing export orders.
                </p>
                <div class="learn-anchor text-right">
                    <a href="about.php"><h4>Learn More&nbsp;<i class="fas fa-angle-double-right"></i></h4></a>
                </div>
                <div class="about_grass">
                </div>
                </div>
            </div>
        </div>
        <div class="row count-row">
            <div class="counter-one">
                <div class="count">
                  <div class="icon">
                  <img src="./images/feed_about.png" alt="about" class="img img-responsive">
                  </div>
                  <div class="text mt-3">
                    <h4>139.10+ Lakhs</h4>
                    <h6>Registered Members</h6>
                  </div>
                </div>
                <div class="count">
                  <div class="icon">
                  <img src="./images/feed_about.png" alt="about" class="img img-responsive">
                  </div>
                  <div class="text mt-3">
                  <h4>139.10+ Lakhs</h4>
                    <h6>Registered Members</h6>
                  </div>
                </div>
                <div class="count">
                    <div class="icon">
                    <img src="./images/feed_about.png" alt="about" class="img img-responsive">
                    </div>
                    <div class="text mt-3">
                    <h4>139.10+ Lakhs</h4>
                    <h6>Registered Members</h6>
                    </div>
                </div>
                <div class="count">
                    <div class="icon">
                    <img src="./images/feed_about.png" alt="about" class="img img-responsive">
                    </div>
                    <div class="text mt-3">
                    <h4>139.10+ Lakhs</h4>
                    <h6>Registered Members</h6>
                    </div>
                </div>
            </div>
            <div class="counter-two">
                <div class="count">
                    <div class="icon">
                    <img src="./images/feed_about.png" alt="about" class="img img-responsive">
                    </div>
                    <div class="text mt-3">
                    <h4>139.10+ Lakhs</h4>
                    <h6>Registered Members</h6>
                    </div>
                </div>
                <div class="count">
                    <div class="icon">
                    <img src="./images/feed_about.png" alt="about" class="img img-responsive">
                    </div>
                    <div class="text mt-3">
                    <h4>139.10+ Lakhs</h4>
                    <h6>Registered Members</h6>
                    </div>
                </div>
                <div class="count">
                    <div class="icon">
                    <img src="./images/feed_about.png" alt="about" class="img img-responsive">
                    </div>
                    <div class="text mt-3">
                    <h4>139.10+ Lakhs</h4>
                    <h6>Registered Members</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row main">
            <div class="main-layer">
             <div class="one p-2">
                <div class="farmer text-center shadow-lg farm">
                <a href="why-feed.php">
                <img src="https://ik.imagekit.io/o0om8c0nr9/feed_farmer_HttZ23dlbX.png" alt="home" class="img img-responsive">
                    <h5>Farmers</h5>
                </a>
                </div>
                <div class="farmer text-center shadow-lg fpo">
                <a href="why-feed.php">
                <img src="https://ik.imagekit.io/o0om8c0nr9/feed_fpos_E34Zw4yWRo.png" alt="home" class="img img-responsive">
                    <h5>FPO's</h5>
                </a>
                </div>
                <div class="farmer text-center shadow-lg epm">
                <a href="why-feed.php">
                    <img src="https://ik.imagekit.io/o0om8c0nr9/feed_epm_4cPZ5d_mZh.png" alt="home" class="img img-responsive">
                    <h5>EPM's</h5>
                </a>
                </div>
             </div>
             <div class="two p-2">
                <div class="farmer text-center shadow-lg pu">
                <a href="why-feed.php">
                <img src="https://ik.imagekit.io/o0om8c0nr9/feed_food_hov9dG8OUF.png" alt="home" class="img img-responsive">
                    <h5>Processing Units</h5>
                </a>
                </div>
                <div class="farmer text-center shadow-lg bd">
                <a href="why-feed.php">
                <img src="https://ik.imagekit.io/o0om8c0nr9/feed_bank_BoH7wuv7xt.png" alt="home" class="img img-responsive">
                    <h5>Banking & Documentation</h5>
                </a>
                </div>
                <div class="farmer text-center shadow-lg ea">
                <a href="why-feed.php">
                <img src="https://ik.imagekit.io/o0om8c0nr9/feed_aeroplane_WNxOUnHz-.png" alt="home" class="img img-responsive">
                    <h5>Export Assistance</h5>
                </a>
                </div>
             </div>
             <!-- <div class="covid p-2 text-center shadow-lg">
             <h5 class="text-center">Covid Case</h5>
             <img src="./images/corona.png" alt="covid" class="img img-responsive covid-img">
                <div class="covid-count text-center text-white shadow-lg">
                    <span>123456789</span>
                </div>
             </div> -->
            </div>
        </div>
        <footer class="footer-row p-3">
        <img src="https://ik.imagekit.io/o0om8c0nr9/ant_aPRT2XGml.png" alt="ant" class="img img-responsive ant">
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
    <!--Owl Carousel Js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!--Download brochure-->
    <script>
        $(document).ready(function(){
            $("#brochure").attr("href",`https://${window.location.hostname}/brochure/Feed_profile.pdf`);
            $(".prevbtn").click(()=>{
                $(".owl-prev").click();
            });
            $(".nextbtn").click(()=>{
                $(".owl-next").click();
            });
            $(".log").click(()=>{
                window.location.href=`http://${window.location.hostname}/feedweb/login.php`;
            });
            $(".reg").click(()=>{
                window.location.href=`http://${window.location.hostname}/feedweb/register.php`;
            });
        });
    </script>
    <script src="./js/custom.js"></script>
</body>
</html>