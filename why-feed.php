<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Feed</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--Animate.CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous"/>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"/>
    <!--Custom Styles-->
    <link rel="stylesheet" href="./css/why-feed.css?<?php echo time();?>">
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
                            <li class="nav-item mr-3 active">
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
                <h2><img src="./images/why_feed.svg" alt="about" class="content-header-img"/>&nbsp;Why Feed?</h2>
                <hr/>
                <p>
                To envisage the idea of doubling farmers’ income and connecting them to global value chains, FEED entrusted itself as:
                </p>
                <p>FEED in partnership with government aims to form product based FPOs all over the country and serves as a one-stop solution throughout the export cycle.</p>
                <p>
                <b>Farmers:</b>
                <div class="imgbox farmers shadow-lg m-3"><div class="title">Farmers</div></div>
                As per the figures quoted by e-NAM (Electronic National Agriculture Market) around 16.6 million farmers got registered till May 2020. 58% of India’s population is dependent on agriculture. While agriculture seems of great importance, its current agri exports for the FY20 stands at US $28.93 billion i.e., while the target of the government is to reach US $60 billion by 2022. As per WTO’s Trade Statistics, 
                share of India’s agricultural exports and imports in the world agriculture trade in 2017 was 2.27% and 1.90%, respectively.
                </p>
                <p>
                Despite being one of the top producers of agricultural products, India does not stand among top exporters of agricultural produce. For example, India holds 2ndrank in the world wheat production but ranks 34thin wheat exports. Similarly, despite being world No. 3 in production of vegetables, the export ranking of India is only 14th. Same is the case for fruits, where India is the second largest producer in the world but export ranking is 23rd. To reach the ranks of top exporting nation in Agriculture, commensurate with the production, the government came up with the plan of forming 10,000 FPOs as part of doubling farmers’ income by 2022, through which the centre wants to empower farmers by integrating them to global value chains.
                </p>
                <p> 
                Small and marginal farmers do not have economic strength to apply production technology, services and marketing including value addition. The setting up of FPOs will provide better collective strength for improved access to quality input, technology, mechanization, credit and better marketing access. This will help growers to cut their farm production costs, while enhancing their returns as the FPOs will collectively bargain for them.
                </p>
                <div class="read-more toggleContent">
                <hr/>
                <p>
                <b>FEED FPOs:</b>
                <div class="imgbox fpos shadow-lg m-3"><div class="title">Feed FPOs</div></div>
                Under the AatmaNirbhar Bharat Abhiyan scheme, government has set a target of forming 10,000 FPOs in 5 years (2020 – 24) under which 30 lakh farmers are benefitted from the FPOs. For this, government has allocated a budget of Rs. 6,865 crores for formation and hand-holding of FPOs.
                </p>
                <p>
                FEED works in line with the target set by the government and forms top 10 product based producer organisations(registered under the State Cooperative Act) in every district of its operational states. Thus, FEED targets to form 130 FPOs in AP state alone. The FPOs thus formed are provided hand-holding support including technical and managerial expertise, forward-backward linkages, best agricultural practices, seed production, value addition, branding, marketing, business planning and such activities which makes their business operations self-sustainable and profitable.
                </p> 
                <p>
                FEED aims to make the FPOs export oriented by making them understand the potentiality of their products in domestic & international markets by conducting Export Promotional Meetings, Sending Newsletters & Newsfeed. Additionally the FPOs are provided various domestic business opportunities through subsidiary producer companies related to Dairy, Aqua, Poultry, Handloom, Aayush products.
                </p> 
                <p>
                FEED forms SPV with FPOs and establishes food processing units & common facility centres. The stakeholders are offered more thanMSP price for their products and FPOs are kept informed about various government schemes &guidelines related to FPOs.
                </p>
                <hr/>
                <p>
                    <b>Export Promotional Meetings (EPMs):</b>
                    Export Promotional Meetings conducted by FEED serves as a best platform for bringing the farmers, traders, entrepreneurs, MSMEs into a single platform.The EPMs are conducted in alliance with state, central governments along with organisations 
                    <!-- <img src="./images/feed_epm1.png" alt="" class="feed_epm m-3" style="float:right;"> -->
                    like NCDC, SFAC, NABARD, Export promotion Councils, Commodity Boards, Customs & Port Authorities, Bank& Financial Institutions.
                </p>
                <p>
                <div class="imgbox epm shadow-lg m-3"><div class="title">Export Promotional Meetings</div></div>
                We invite various speakers from the list and explain the global demand for Indian products, guide them on reaching those markets, inform them the technical requirements to reach those markets. 
                FEED provides a reliable platform to reach such markets through its end-to-end export assistance support.
                </p>
                <p>
                Our main intention behind conducting EPMs is to promote the exports by developing the export entrepreneurship in the target audience. At FEED, we believe that our Export Promotional Meetings provides the basic knowledge on exports, and builds confidence to explore the International markets. Thus, we intend to transform Agri”farmers” to Agri”preneurs”.  We are in a plan to conduct these campaigns in every district of AP, so as to reach out the maximum number of audience. 
                Along with the export awareness, we also showcase the support rendered by Central & various state governments for exporters.
                </p>
                <span>OUTCOMES OF EPMs:</span><br>
                <ul>
                    <li>Create enthusiasm by showing the potentiality of their products in International markets</li>
                    <li>Build assurance by showing the success stories of similar audience (Farmers/Small traders/New Entrepreneurs/MSMEs)</li>
                    <li>Develop awareness on the schemes introduced by Central & State govts. for exporters</li>
                </ul>
                <hr/>
                <div class="pu-wrapper">
                <p>
                    <b>Value Addition / Processing Units:</b>
                    <div class="imgbox food_processing shadow-lg m-3"><div class="title">Processing Units</div></div>
                    We at FEED strives to minimize the post-harvest losses which can be handled by efficient management of value chain. FEED in collaboration with Central government equips post-harvest infrastructure for its stakeholders by
                    forming Special purpose vehicle (SPV) with FPOs and establishes multi-purpose multi product processing / value addition units in every district.
                </p>
                <p>
                By aggregating the farm produce, we bring the advantage of economies of scale into practicality. This attracts various marketing opportunities in both domestic and global markets without any interference of middlemen. The real advantage of farmer collectives (FPOs) is made visible here and attracts the individual farmers to join the FPOs. FEED FPO farmers enjoys the benefits of aggregation of produce, bulk transport, 
                reduced marketing cost and direct market access thus enhances the net income of the producers.
                </p>
                </div>
                <hr/>
                <div>
                <p>
                    <b>Banking & Documentation Support:</b>
                    FEED with its comprehensive network of export assistance experts supports its stakeholders in Issuing LCs from Banks, obtaining pre & post shipment credit as per the guidelines set by RBI. 
                    We also provide hassle free documentation support involved in export process for top 1000 agriculture products.
                    <!-- <img src="./images/feed_bank1.png" alt="" class="feed_bank m-3" style="width:200px;height:200px;float:right;"> -->
                </p>
                </div>
                <hr/>
                <p>
                <b>Export Assistance:</b>
                    At FEED, we aim to implement the objectives of the Agri Export policy 2018. The objectives are stated as follows:
                    <div class="imgbox aeroplane shadow-lg m-3"><div class="title">Export Assistance</div></div>
                    <!-- <img src="./images/feed_aeroplane1.png" alt="" class="feed_aeroplane m-3" style="float:right;"> -->
                </p>
                 <ul>
                    <li>To double agricultural exports from present ~US$ 30+ Billion to ~US$ 60+ Billion by 2022 and reach US$ 100 Billion in the next few years thereafter, with a stable trade policy regime.</li>
                    <li>To diversify the export basket, destinations and boost high value and value-added agricultural exports including a focus on perishables.</li>
                    <li>To promote novel, indigenous, organic, ethnic, traditional and non-traditional Agri products exports.</li>
                    <li>To provide an institutional mechanism for pursuing market access, tackling barriers and deal with sanitary and phytosanitary issues.</li>
                    <li>Enable farmers to get the benefit of export opportunities in the overseas market.</li>
                </ul>
                <p>
                Utilising the advantages of the schemes and policies set for doubling farmers’ income, FEED works to serve as a one-stop solution to its stakeholders to expose their products in International markets in a comprehensive scale. 
                Commensurate to agriculture production, FEED strives to reduce theagri imports in the best way possible. 
                </p>
                <p>To achieve this, FEED works in collaboration with various export promotional councils, commodity boards, organisations like FIEO, APEDA, MPEDA, 
                    NABARD, NCDC, SFAC, NCCF and several other central government ministries.</p>
                </div>
                <!--Read More-->
                <div class="read-more-icon text-right">
                    <!-- <img src="./images/readmore.gif" alt="readmore"> -->
                    <span>Read More&nbsp;<i class="fa fa-angle-down"></i></span>
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
    <script>
        $(document).ready(function(){
            $(".read-more-icon").on("click",function(){
                $(".read-more").toggleClass("toggleContent");
                let cls=$(".read-more").attr("class");
                if(cls == "read-more")
                {
                    $(".read-more-icon span").html(`Read Less&nbsp;<i class="fa fa-angle-up"></i>`);
                }
                else if(cls == "read-more toggleContent")
                {
                    $(".read-more-icon span").html(`Read More&nbsp;<i class="fa fa-angle-down"></i>`);
                }
            });
        });
    </script>
    <script src="./js/custom.js"></script>
</body>
</html>