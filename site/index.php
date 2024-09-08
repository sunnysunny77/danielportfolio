<!DOCTYPE html>
<html lang="en">
<head>
    <script src="./js/preload.js"></script>
    <link rel="preload" href="./font/NunitoSans.ttf" as="font" type="font/ttf" crossorigin="" />
    <meta charset="utf-8" />
    <meta name="description" content="D.Costello Portfolio" />
    <meta name="keywords" content="Web Developer, Front End Web Development" />
    <meta name="author" content="D.Costello" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Work</title>
    <link href="./css/app.min.css" rel="stylesheet" type="text/css" />
    <link rel="manifest" href="manifest.json" />
    <link rel="apple-touch-icon" href="images/pwa-logo-small.webp" />
</head>

<body>

    <div id="outer">

        <nav class="container-fuild d-flex align-items-center">

            <div class="container">

                <ul class="list-inline row d-flex m-0">

                    <li class="list-inline-item col-12 col-lg-16 m-0">

                        <span class="d-none d-sm-block pb-3 me-2"> <span class="blink"></span> D.Costello </span>

                        <span class="d-sm-none pb-3 me-2"> <span class="blink"></span> D.C </span>

                    </li>

                    <li class="list-inline-item align-self-end col-36 col-lg-32">

                        <ul class="list-inline d-flex justify-content-around justify-content-md-between">

                            <li class="list-inline-item">

                                <a class="active navigation-anchor px-0 pb-3" href="./"> Work </a>

                            </li>

                            <li class="list-inline-item">

                                <a class="navigation-anchor px-0 pb-3" href="./about.php"> About </a>

                            </li>

                            <li class="list-inline-item">

                                <button class="copy-tooltip navigation-anchor px-0 pb-3"> Email <span class="d-none"> costellodaniel686@gmail.com </span> </button>

                            </li>

                        </ul>

                    </li>

                </ul>

            </div>

        </nav>

        <header class="container-fluid pt-7 pt-lg-12">

            <section class="container work-header pb-12 pb-lg-13">

                <div class="row">

                    <div class="col-48 col-lg-16 pe-lg-5">

                        <div class="mb-11 mb-lg-5">

                            <?php

                                date_default_timezone_set("Australia/Perth");
                                echo  date("g:i a") . " &mdash; Perth";
                                
                            ?>

                        </div>

                        <div class="d-none d-lg-block">

                            <a class="d-block mb-2" href="tel:+61434984983"> +61 434 984 983 </a>

                            <button class="copy-tooltip p-0"> costellodaniel686@gmail.com <span class="d-none"> costellodaniel686@gmail.com </span> </button>

                        </div>

                    </div>

                    <h1 class="col-48 col-lg-32 slogan pe-5 pe-lg-9 mb-11 mb-lg-0">

                        Web development partner for digital experiences and solutions.

                    </h1>

                    <div class="d-lg-none">

                        <a class="d-block mb-2" href="tel:+61434984983"> +61 434 984 983 </a>

                        <button class="copy-tooltip p-0"> costellodaniel686@gmail.com <span class="d-none"> costellodaniel686@gmail.com </span> </button>

                    </div>

                </div>

            </section>

        </header>

        <main class="work-main py-12 py-lg-14">

            <section class="container">

                <div class="has-test row justify-content-md-between">

                    <div class="col-48 col-md-16 col-lg-11">

                        <h2 class="mb-3">
                            
                            Furniture Warehouse

                        </h2>

                        <hr class="mb-5 mb-md-2">
                        
                        <p class="mb-1">
                            
                            Homepage
                            <br>
                            Design copy

                        </p> 

                        <a class="d-inline-block mb-6" target="Furniture" href="https://furniture.sunnyhome.site/">Visit</a>

                    </div>

                    <div class="col-48 col-md-26 col-lg-32 mb-12 mb-md-13">

                        <img src="./images/furniture.webp" width="760" height="475" alt="Furniture" />

                    </div>

                </div>

                <div class="has-test row justify-content-md-between">

                    <div class="col-48 col-md-16 col-lg-11">

                        <h2 class="mb-3">
                            
                            Fasera

                        </h2>

                        <hr class="mb-5 mb-md-2">
                        
                        <p class="mb-1">
                            
                            Wordpress theme
                            <br>
                            © Lateral Aspect
                            <br>
                            Design copy

                        </p> 

                        <a class="d-inline-block mb-6" target="Fasera" href="https://www.fasera.com/">Visit</a>

                    </div>

                    <div class="col-48 col-md-26 col-lg-32 mb-12 mb-md-13">

                        <img src="./images/fasera.webp" width="760" height="475" alt="Fasera" />

                    </div>

                </div>

                <div class="has-test row justify-content-md-between">

                    <div class="col-48 col-md-16 col-lg-11">

                        <h2 class="mb-3">
                            
                            Access Robotics

                        </h2>

                        <hr class="mb-5 mb-md-2">

                        <p class="mb-1">
                            
                            Wordpress theme
                            <br>
                            © Lateral Aspect
                            <br>
                            Design copy

                        </p> 

                        <a class="d-inline-block mb-6" target="Access Robotics" href="https://access.vm1.lateralaspect.com.au/">Visit</a>

                    </div>

                    <div class="col-48 col-md-26 col-lg-32 mb-12 mb-md-13">

                        <img src="./images/access.webp" width="760" height="475" alt="Access Robotics" />

                    </div>

                </div>

                <div class="has-test row justify-content-md-between">

                    <div class="col-48 col-md-16 col-lg-11">

                        <h2 class="mb-3">
                            
                            Daves Blog

                        </h2>

                        <hr class="mb-5 mb-md-2">

                        <p class="mb-1">
                            
                            Design copy
                            <br>
                            MVC - OOP - SQL - CMS
                            <br> 
                            PHP API Template
                            <br>
                            Admin:
                            <br>
                            <button class="copy-tooltip"> Username <span class="d-none"> demo </span> </button>
                            <br>
                            <button class="copy-tooltip"> Password <span class="d-none"> demo </span> </button>
                    
                        </p> 

                        <a class="d-inline-block mb-6" target="Daves Blog" href="https://davesblog.sunnyhome.site/">Visit</a>

                    </div>

                    <div class="col-48 col-md-26 col-lg-32 mb-12 mb-md-13">

                        <img src="./images/daves.webp" width="760" height="475" alt="Daves Blog" />

                    </div>

                </div>

                <div class="has-test row justify-content-md-between">

                    <div class="col-48 col-md-16 col-lg-11">

                        <h2 class="mb-3">
                            
                            Business

                        </h2>

                        <hr class="mb-5 mb-md-2">

                        <p class="mb-1">
                            
                            Homepage

                        </p> 

                        <a class="d-inline-block mb-6" target="Business" href="https://business.sunnyhome.site/">Visit</a>

                    </div>

                    <div class="col-48 col-md-26 col-lg-32 mb-12 mb-md-13">

                        <img src="./images/business.webp" width="760" height="475" alt="Business" />

                    </div>

                </div>

                <div class="has-test row justify-content-md-between">

                    <div class="col-48 col-md-16 col-lg-11">

                        <h2 class="mb-3">
                            
                            Candid Cleaning

                        </h2>

                        <hr class="mb-5 mb-md-2">

                        <p class="mb-1">    
                            
                            React/JSX - NodeJS - Mongo
                            <br>
                            Material UI
                            <br>
                            Googleapis OAUTH email
                            <br>
                            Google drive used as CMS

                        </p> 

                        <a class="d-inline-block mb-6" target="Candid Cleaning" href="https://candidcleaning.sunnyhome.site/">Visit</a>

                    </div>

                    <div class="col-48 col-md-26 col-lg-32 mb-12 mb-md-13">

                        <img src="./images/candid.webp" width="760" height="475" alt="Candid Cleaning" />

                    </div>

                </div>

                <div class="has-test row justify-content-md-between">

                    <div class="col-48 col-md-16 col-lg-11">

                        <h2 class="mb-3">
                            
                            Weather App

                        </h2>

                        <hr class="mb-5 mb-md-2">

                        <p class="mb-1">    
                            
                            Weather App
                            <br>
                            XML
                            <br>
                            PWA

                        </p> 

                        <a class="d-inline-block mb-6" target="Weather App" href="https://sticky.sunnyhome.site/">Visit</a>

                    </div>

                    <div class="col-48 col-md-26 col-lg-32 mb-12 mb-md-13">

                        <img src="./images/weather.webp" width="760" height="475" alt="Weather App" />

                    </div>

                </div>

                <div class="has-test row justify-content-md-between">

                    <div class="col-48 col-md-16 col-lg-11">

                        <h2 class="mb-3">
                            
                            Sliders

                        </h2>

                        <hr class="mb-5 mb-md-2">

                        <p class="mb-1">    
                            
                            Nine slider demo's
                            <br>
                            JavaScript

                        </p> 

                        <a class="d-inline-block mb-6" target="Sliders" href="https://sliders.sunnyhome.site/">Visit</a>

                    </div>

                    <div class="col-48 col-md-26 col-lg-32 mb-12 mb-md-13">

                        <img src="./images/sliders.webp" width="760" height="475" alt="Sliders" />

                    </div>

                </div>

                <div class="has-test row justify-content-md-between">

                    <div class="col-48 col-md-16 col-lg-11">

                        <h2 class="mb-3">
                            
                            Login App

                        </h2>

                        <hr class="mb-5 mb-md-2">

                        <p class="mb-1">    
                            
                            React/JSX
                            <br>
                            PHP API - Cookie States  
                            <br>
                            Mozilla observatory A+
                            <br>
                            SSL A+
                            <br>
                            Caputcha signup
                            <br>
                            Email 2FA
                            <br>
                            PayPal sandbox:
                            <br>
                            <button class="copy-tooltip"> Username <span class="d-none"> sb-iyl4x21604127@personal.example.com </span> </button>
                            <br>
                            <button class="copy-tooltip"> Password <span class="d-none"> *]T0%Ae8 </span> </button>

                        </p> 

                        <a class="d-inline-block mb-6" target="Login App" href="https://login.sunnyhome.site/">Visit</a>

                    </div>

                    <div class="col-48 col-md-26 col-lg-32">

                        <img src="./images/login.webp" width="760" height="475" alt="Login App" />

                    </div>

                </div>

            </section>

        </main>

        <footer class="py-11">

            <div class="container">

                <div class="row d-flex justify-content-around align-items-center">

                    <ul class="col-48 col-md-32 list-unstyled d-flex flex-column flex-md-row align-items-md-center flex-fill m-0">

                        <li class="bold text-center order-4 order-md-1 py-md-3 mt-3 mt-md-0 me-md-8"> <i class="fa-regular fa-copyright"></i>&nbsp;<?php echo date("Y"); ?>&nbsp;D.COSTELLO </li>

                        <li class="me-md-8 order-1 order-md-2"> <a class="active navigation-anchor px-0 py-3" href="./"> Work </a> </li>

                        <li class="me-md-8 order-2 order-md-3"> <a class="navigation-anchor px-0 py-3" href="./about.php"> About </a> </li>

                        <li class="order-3 order-md-4">
                
                            <button class="copy-tooltip navigation-anchor px-0 py-3"> Email <span class="d-none"> costellodaniel686@gmail.com </span> </button>

                        </li>

                    </ul>

                    <div class="col-48 col-md-16 d-flex justify-content-center justify-content-md-end">

                        <a class="navigation-anchor px-0 py-3" target="LinkedIn" href="https://www.linkedin.com/in/daniel-costello-579b10259/"> LinkedIn </a>

                    </div>

                </div>
                
            </div>

        </footer>
        
    </div>  

    <script src="./js/app.min.js" defer></script>

</body>

</html>