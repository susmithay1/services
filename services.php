<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed Services</title>
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
    <link rel="stylesheet" href="./css/services.css?<?php echo time();?>">
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
                            <li class="nav-item mr-3 active">
                                <a href="services.php" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a href="workflow.php" class="nav-link">Workflow</a>
                            </li>
                            <li class="nav-item mr-3">
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
                <h2><img src="./images/services-icon.svg" alt="about" class="content-header-img"/>&nbsp;Feed Services</h2>
                <hr/>
                <b>FEED SERVICES:</b><br>
                <p> 
                <b>FEED</b> deals with different types of members hailing from different back grounds with different requirements.  Hence, FEED renders end - to - end customized support throughout the export process to its members. Glance at the services offered to members of FEED:</li> 
                </p>    
                <b>1. FPO Members:</b>
                <ul>
                    <li>Access to global markets made easy by presenting the opportunities on top 1000 agricultural products.</li>  

                    <li>Information and promotion of their products in International fairs and other buyer - seller meets organized by various institutions.</li>  

                    <li>Fulfilment of integrated supply chain requirements by establishment of value addition units and farm machinery supply at low costs.</li>  

                    <li>Get the live biddings on various product requirements posted by International buyers from top 50 countries into their smart phones.</li>  

                    <li>Information and support for availing all central & state government schemes and incentives.</li>  

                    <li>Direct and Easy access to Domestic markets through E - commerce.</li>
                </ul>  

               <b>2. International Buyers:</b><br>
               <ul>
               <li>Database of verified sellers providing best prices made available at free of cost.</li>  

                <li>Hassle free and holistic approach to meet the product specifications & requirements.</li>  

                <li>Timely and Dedicated consultative services for imports from INDIA.</li>

                <li>Top sellers for any product out of 1000 agricultural products from all over the country made available through FEED's Internal bidding process.</li>  
                </ul>
                <b>3. Agripreneurs / Entrepreneurs / MSMES:</b><br>
                <ul>
                <li>Exposure to global opportunities all around the world.</li> 

                <li>Huge database, connections of verified International buyers at affordable prices.</li> 

                <li>Hassle free support throughout the export documentation process.</li> 

                <li>Direct access to promote products in E - commerce platform.</li>
                </ul>
                <b>4. PACS Farmers:</b><br>
                <ul> 
                <li>Information on product (customized) potentiality in local, global markets in local languages ​​through Mobile App (for smart phone users) and Newsletter (for feature phone users).</li>

                <li>Free participation in EPMs & access to direct marketing channels like E -  commerce for better access to opportunities in domestic and global trade.</li>  

                <li>Easy access to FEED services through KIOSK at PACS.</li> 

                <li>Awareness on various central & state govt policies, schemes and Advance Crop management techniques.</li>

                <li>Dedicated technology support to emerge PACS as Multi Service Centers (MSC).</li>

                <li>Access to Common Facility Centers / Procurement Centers (for Dairy, Ayush. Aqua, Seeds, Fertilizers, Pesticides products etc.) and link ups with Govt subsidies.</li>

                <li>Employment opportunities to PACS level local youth in E - commerce, Logistics, Warehouses and Value addition units.</li>

                <li>Access to International Trade courses to PACS level local youth in collaboration with universities.</li> 

                <li>Spread the Success stories on product yield & marketing opportunities.</li> 

                <li>Issue of Awards to PACS members  for "New Innovations" in farming technology.</li> 
                </ul>
                <b>5. Students / Unemployed youth:</b><br>
                <ul> 
                <li>Part - time and full - time courses (both offline & online) on International Trading business.</li>  

                <li>"Assist and Earn" Freelancing opportunities.</li>

                <li>Information & support on various skill development programs conducted by Central & State governments.</li>
                </ul>
                <b>WHO CONNECTS TO FEED?</b><br> 
                <p><b>FEED</b> deals with 4 segments of people in its operation:</p> 
                
                <p><b>Segment I:</b>FPOs, Farmers, Small traders, MSMEs,  Entrepreneurs, CHAs</p> 

                <p><b>Segment II:</b> International buyers all over the world, Indian Embassies in foreign countries, NRI associations abroad</p> 

                <p><b>Segment III:</b> CENTRAL Govt, STATE Govts, EPB. NABARD, NCDC, DGFT, FIEO, CHAS, Ports</p> 

                <p><b>Segment IV:</b> Students,  Universities, Skill development orgs, Unemployed youth.</p>
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
    <script src="./js/custom.js"></script>
</body>
</html>