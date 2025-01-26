<?php

    // view variables

    $tel = "+61 434 984 983";
    $mailto = "costellodaniel686@gmail.com";
    $linkedin = "https://www.linkedin.com/in/daniel-costello-579b10259/";

    $work =[
        [ 
            "title" => "Login App",
            "link" => "https://login.sunnyhome.site/",
            "credentials" => [ [ "title" => "PayPal:", "username" => "sb-iyl4x21604127@personal.example.com", "password" => "*]T0%Ae8" ], [ "title" => "Login:", "username" => "daniel@gmail.com", "password" => "passwordA1" ], ],
            "image" => [ "src" => "./images/login.webp", "alt" => "Login App" ],
            "list-item" => [ "React/JSX - NodeJS - PHP - API", "Cookies", "PayPal Smart Button", "Captcha", "2FA", "Secure CSP", "HTTP Observatory A+", "SSL A+" ],
            "mp4" => "./videos/login.mp4",
            "git" => "https://github.com/sunnysunny77/reactlogin",
        ],
        [ 
            "title" => "Fasera",
            "link" => "https://www.fasera.com/",
            "image" => [ "src" => "./images/fasera.webp", "alt" => "Fasera" ],
            "list-item" => [ " Wordpress theme", "<i class='fa-regular fa-copyright'></i> Lateral Aspect", " Design copy" ],
            "mp4" => "./videos/fasera.mp4",
        ],
        [ 
            "title" => "Access Robotics",
            "link" => "https://accessrobotics.com.au/",
            "image" => [ "src" => "./images/access.webp", "alt" => "Access Robotics" ],
            "list-item" => [ " Wordpress theme", "<i class='fa-regular fa-copyright'></i> Lateral Aspect", " Design copy" ],
            "mp4" => "./videos/access.mp4",
        ],
        [ 
            "title" => "Daves Blog",
            "link" => "https://davesblog.sunnyhome.site/",
            "credentials" => [ ["title" => "Admin:", "username" => "demo", "password" => "demo" ], ],
            "image" => [ "src" => "./images/daves.webp", "alt" => "Daves Blog" ],
            "list-item" => [ "Design Copy", "PWA", "MVC - OOP - SQL - CMS", "PHP API Template", "HTTP Observatory A+", "SSL A+" ],
            "mp4" => "./videos/daves.mp4",
            "git" => "https://github.com/sunnysunny77/davesblog",
        ],
        [ 
            "title" => "Business",
            "link" => "https://business.sunnyhome.site/",
            "image" => [ "src" => "./images/business.webp", "alt" => "Business" ],
            "list-item" => [ "Homepage", "PWA", "HTTP Observatory A+", "SSL A+" ],
            "mp4" => "./videos/business.mp4",
            "git" => "https://github.com/sunnysunny77/business",
        ],
        [ 
            "title" => "Weather App",
            "link" => "https://sticky.sunnyhome.site/",
            "image" => [ "src" => "./images/weather.webp", "alt" => "Weather App" ],
            "list-item" => [ "XML", "PWA", "HTTP Observatory A+", "SSL A+" ],
            "mp4" => "./videos/weather.mp4",
            "git" => "https://github.com/sunnysunny77/weatherxml",
        ],
        [ 
            "title" => "Furniture Warehouse",
            "link" => "https://furniture.sunnyhome.site/",
            "image" => [ "src" => "./images/furniture.webp", "alt" => "Furniture" ],
            "list-item" => [ "Design Copy", "PWA", "HTTP Observatory A+", "SSL A+" ],
            "mp4" => "./videos/furniture.mp4",
            "git" => "https://github.com/sunnysunny77/furniture",
        ],
    ];

    $count = count($work) - 1;

    $intro = isset($_COOKIE["cookie"]) ? "cookie-true" : "cookie-false";

    $svg_display = isset($_COOKIE["cookie"]) ? "d-none" : "d-block";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TBDFZ1ZRW5" nonce="8IBTHwOdqNKAWeKl7plt8g=="></script>
    <script nonce="8IBTHwOdqNKAWeKl7plt8g==">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-TBDFZ1ZRW5');
    </script>
    <script src="./js/preload.js"></script>
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

        <div id="intro-work" class="d-flex align-items-center justify-content-center <?php echo $intro; ?>">

            <svg class="<?php echo $svg_display; ?>" id="vivus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="350" height="350" viewBox="0 0 2000 2000">

                <path fill="none" stroke="#dae3e4" stroke-opacity="0" stroke-width="7" d="M 818.664062 1026.441406 C 813.746094 1036.269531 806.863281 1044.710938 798.015625 1051.761719 C 789.164062 1058.808594 778.839844 1064.371094 767.042969 1068.480469 C 755.242188 1072.570312 742.460938 1074.621094 728.695312 1074.621094 L 508.445312 1074.621094 L 573.339844 1160.171875 L 728.695312 1160.171875 C 757.53125 1160.171875 784.082031 1156.230469 808.339844 1148.371094 C 832.589844 1140.5 853.484375 1129.441406 871.019531 1115.179688 C 874.417969 1112.421875 877.613281 1109.5 880.71875 1106.53125 L 821.21875 1020.621094 C 820.453125 1022.589844 819.617188 1024.53125 818.664062 1026.441406 "/>
                <path fill="none" stroke="#dae3e4" stroke-opacity="0" stroke-width="7" d="M 1426.171875 1074.621094 L 1260.980469 1074.621094 C 1247.210938 1074.621094 1234.429688 1072.648438 1222.628906 1068.71875 C 1210.828125 1064.789062 1200.671875 1059.300781 1192.148438 1052.25 C 1183.621094 1045.199219 1176.910156 1036.769531 1171.988281 1026.929688 C 1171 1024.941406 1170.128906 1022.898438 1169.328125 1020.820312 L 1108.789062 1106.398438 C 1112.101562 1109.601562 1115.511719 1112.71875 1119.140625 1115.671875 C 1136.671875 1129.929688 1157.570312 1140.910156 1181.828125 1148.609375 C 1206.078125 1156.308594 1232.46875 1160.171875 1260.980469 1160.171875 L 1491.550781 1160.171875 L 1426.171875 1074.621094 "/>
                <path fill="none" stroke="#dae3e4" stroke-opacity="0" stroke-width="7"  d="M 1341.808594 831.261719 L 1260.980469 831.261719 C 1246.128906 831.261719 1231.871094 832.339844 1218.171875 834.429688 C 1205.570312 836.351562 1193.449219 839.128906 1181.828125 842.820312 C 1181.601562 842.890625 1181.378906 842.960938 1181.160156 843.03125 C 1149.859375 853.078125 1122.800781 873.261719 1103.820312 900.101562 L 1068.898438 949.46875 L 995.890625 1052.710938 L 914.488281 932.640625 L 884.921875 889.019531 C 880.582031 884.550781 875.972656 880.28125 871.019531 876.25 C 853.484375 861.988281 832.589844 850.929688 808.339844 843.058594 C 796.59375 839.261719 784.304688 836.390625 771.484375 834.429688 C 757.828125 832.328125 743.570312 831.261719 728.695312 831.261719 L 573.339844 831.261719 L 508.445312 916.808594 L 728.695312 916.808594 C 742.460938 916.808594 755.242188 918.859375 767.042969 922.949219 C 777.050781 926.429688 785.929688 931.03125 793.8125 936.628906 C 795.226562 937.628906 796.671875 938.601562 798.015625 939.671875 C 806.863281 946.71875 813.746094 955.160156 818.664062 964.988281 C 821.140625 969.949219 822.972656 975.121094 824.195312 980.5 L 897.980469 1087.03125 L 929.027344 1131.859375 C 936.230469 1142.351562 945.003906 1151.121094 955.328125 1158.171875 C 965.652344 1165.210938 978.515625 1168.738281 993.921875 1168.738281 C 1009.648438 1168.738281 1022.761719 1164.960938 1033.25 1157.429688 C 1043.738281 1149.890625 1052.589844 1141.371094 1059.800781 1131.859375 L 1091.609375 1086.890625 L 1166.179688 981.488281 C 1167.390625 975.53125 1169.308594 969.859375 1171.988281 964.5 C 1176.910156 954.660156 1183.621094 946.230469 1192.148438 939.179688 C 1194.679688 937.078125 1197.410156 935.171875 1200.238281 933.351562 C 1206.910156 929.050781 1214.339844 925.46875 1222.628906 922.710938 C 1234.429688 918.769531 1247.210938 916.808594 1260.980469 916.808594 L 1426.171875 916.808594 L 1491.550781 831.261719 L 1341.808594 831.261719 "/>

            </svg>

        </div>

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

                            <?php

                                if (isset($mailto)) {

                                    ?>

                                        <li class="list-inline-item">
                                            
                                            <div class="copy-tooltip navigation-anchor nav-tooltip px-0 pb-3"> Email <span class="d-none"> <?php echo $mailto; ?> </span> </div>

                                        </li>

                                    <?php
                                    
                                }

                            ?>

                        </ul>

                    </li>

                </ul>

            </div>

        </nav>

        <header class="container-fluid">

            <section class="container work-header pb-12 pb-lg-13 pt-7 pt-lg-12">

                <div class="row">

                    <div data-aos="fade-right" class="col-48 col-lg-16 pe-lg-5">

                        <div class="mb-11 mb-lg-5">

                            <?php

                                date_default_timezone_set("Australia/Perth");
                                echo  date("g:i a") . " &mdash; Perth";
                                
                            ?>

                        </div>

                        <div class="d-none d-lg-block">

                            <?php

                                if (isset($tel)) {

                                    ?>

                                        <a class="d-block mb-2" href="tel:<?php echo str_replace(' ', '', $tel); ?>"> <?php echo $tel; ?> </a>

                                    <?php
                                    
                                }

                            ?>   

                            <?php

                                if (isset($mailto)) {

                                    ?>

                                        <div class="copy-tooltip p-0"> <?php echo $mailto; ?>  <span class="d-none"> <?php echo $mailto; ?>  </span> </div>

                                        <?php
                                    
                                }

                            ?>

                        </div>

                    </div>

                    <h1 data-aos="fade-left" class="col-48 col-lg-32 slogan pe-5 pe-lg-9 mb-11 mb-lg-0">

                        Web development partner for digital experiences and solutions.

                    </h1>

                    <div data-aos="fade-right" class="d-lg-none">

                        <a class="d-block mb-2" href="tel:+61434984983"> +61 434 984 983 </a>

                        <div class="copy-tooltip p-0"> costellodaniel686@gmail.com <span class="d-none"> costellodaniel686@gmail.com </span> </div>

                    </div>

                </div>

            </section>

        </header>

        <main data-aos="fade-up" class="work-main py-12 py-lg-14">

            <section class="container">

                <?php

                    foreach ($work as $index=>$row) {

                        $margin_bottom = "mb-12 mb-md-13";
                        $next = false;
                        $prev = true;

                        if($index === $count) {

                            $margin_bottom = "mb-0 mb-md-0";
                        } else {

                            $next = true;
                        } 
                        
                        if ($index === 0) {

                            $prev = false;
                        }

                        ?>

                            <div class="has-test row justify-content-md-between">

                                <div class="work-details col-48 col-md-16 col-lg-11 d-flex flex-column">

                                    <?php

                                        if (isset($row["title"])) {

                                            ?>

                                                <h2 class="mb-3">
                                                    
                                                    <?php echo $row["title"]; ?>

                                                </h2>

                                            <?php
                                        }

                                    ?>

                                    <hr class="mb-5 mb-md-2">

                                    <button id="overlay_open-<?php echo $index; ?>" aria-label="open" class="overlay-open preview d-flex align-items-center p-0 my-3"> Preview Site <i class="fa-solid fa-circle-right ps-3"></i> </button>

                                    <?php

                                        if (isset($row["credentials"])) {

                                            foreach ($row["credentials"] as $credential) {                   

                                                ?>

                                                    <?php

                                                        if (isset($credential["title"])) {

                                                            ?>
                                    
                                                                <p class="mb-0"> <?php echo $credential["title"] ?> </p>

                                                            <?php

                                                        }

                                                    ?>

                                                    <?php

                                                        if (isset($credential["username"])) {

                                                            ?>

                                                                <div class="copy-tooltip"> Username <span class="d-none"> <?php echo $credential["username"] ?> </span> </div>

                                                            <?php

                                                        }

                                                    ?>

                                                    <?php

                                                        if (isset($credential["password"])) {

                                                            ?>

                                                                <div class="copy-tooltip"> Password <span class="d-none"> <?php echo $credential["password"] ?> </span> </div>

                                                            <?php

                                                        }

                                                    ?>                                      
                                              
                                                <?php
                                            }
                                        }

                                    ?>

                                    <?php

                                        if (isset($row["link"])) {

                                            ?>
      
                                                <a class="visit d-inline-block mb-6" target="_blank" href="<?php echo $row["link"]; ?>">Visit</a>

                                            <?php
                                        }

                                    ?>

                                </div>

                                <div class="col-48 col-md-26 col-lg-32 <?php echo $margin_bottom; ?>">

                                    <?php

                                        if (isset($row["image"]["src"]) && isset($row["image"]["alt"])) {

                                            ?>

                                                <h2 class="mb-3">
                                                    
                                                    <img src="<?php echo $row["image"]["src"]; ?>" width="760" height="475" alt="<?php echo $row["image"]["alt"]; ?>" />

                                                </h2>

                                            <?php
                                        }

                                    ?>

                                </div>

                                <div class="overflow-hidden">

                                    <div id="overlay_body-<?php echo $index; ?>" class="slider_work-overlay-body overlay_body d-flex" tabindex="-1">

                                        <div class="w-100 row d-flex justify-content-center align-items-start align-items-lg-stretch justify-content-lg-between">

                                            <div class="slider_work-overlay-sidebar order-lg-2 col-48 col-lg-10">

                                                <div class="slider_work-button-container d-flex justify-content-center pt-lg-8">

                                                    <?php

                                                        if ($prev) {

                                                            ?>

                                                                <button aria-label="prev" class="overlay-prev p-2 mx-3"><i class="fa-solid fa-circle-chevron-left"></i></button>

                                                            <?php

                                                        }

                                                    ?>

                                                    <button aria-label="close" class="overlay-close p-2 mx-3"><i class="fa-solid fa-circle-xmark"></i></button>	
                                                    
                                                    <?php

                                                        if ($next) {

                                                            ?>

                                                                <button aria-label="next" class="overlay-next p-2 mx-3"><i class="fa-solid fa-circle-chevron-right"></i></button> 

                                                            <?php

                                                        }

                                                    ?>

                                                </div>

                                            </div>

                                            <div class="col-42 col-sm-30 col-lg-38 d-flex align-items-center py-9 py-lg-12">

                                                <div class="row justify-content-center w-100">

                                                    <div class="slider_work-overlay-heading-container col-48 col-lg-18 py-lg-8 px-lg-5">
                                    
                                                        <?php

                                                            if (isset($row["title"])) {

                                                                ?>

                                                                    <h3 class="text-center m-0">      
                                                                        
                                                                        <?php echo $row["title"]; ?>

                                                                    </h3>

                                                                <?php
                                                            }

                                                        ?>

                                                    </div>

                                                    <div class="slider_work-overlay-list-container col-48 col-lg-22 d-flex flex-wrap pt-9 pt-lg-0">

                                                        <?php

                                                            if (isset($row["list-item"])) {

                                                                ?>

                                                                    <ul class="flex-fill ps-0 ps-lg-9 my-0 ms-7"> 

                                                                        <?php

                                                                            foreach ($row["list-item"] as $item) {

                                                                                ?>

                                                                                    <li> <?php echo $item; ?> </li>

                                                                                <?php

                                                                            }

                                                                        ?>
                                                    
                                                                    </ul>

                                                                <?php

                                                            }

                                                        ?>

                                                        <hr class="mx-lg-10 mt-8 w-100">

                                                    </div>

                                                    <div class="slider_work-overlay-preview-container col-48 col-lg-40 mt-9 mt-lg-12">

                                                        <?php

                                                            if (isset($row["mp4"])) {

                                                                ?>

                                                                    <video poster="./images/pwa-logo.webp" preload="none" class="play" width="1024" height="700" muted loop playsinline>
                                                            
                                                                        <source src="<?php echo $row["mp4"]; ?> " type="video/mp4">

                                                                    </video>

                                                                <?php
                                                            }

                                                        ?>
                                        
                                                        <div class="controlls d-flex justify-content-center align-items-center">

                                                            <img class="play-video" alt="play" width="40" height="40" src="./images/play.webp" />

                                                            <img class="pause-video has-pause" alt="pause" width="40" height="40" src="./images/pause.webp" />

                                                        </div>

                                                    </div>

                                                    <div class="slider_workinner col-48 col-lg-40 mt-9 mt-lg-12">

                                                        <div class="slider_workinner-outer workinner-outer">

                                                            <div class="slider_workinner-button-next-container button-container">

                                                                <button aria-label="open-left" class="slider_workinner-button-next open-left"><i class="fa-solid fa-circle-arrow-left"></i></button>
                                                                <button aria-label="open-right" class="slider_workinner-button-next open-right"><i class="fa-solid fa-circle-arrow-right"></i></button>

                                                            </div>

                                                            <div class="slider_workinner-container slider-container">


                                                                <div class="slider_workinner-a image-1"></div>

                                                                <div class="slider_workinner-a link-open image-fill-right"></div>

                                                                <div class="slider_workinner-inner inner">

                                                                    <div></div>

                                                                </div>

                                                                <div class="slider_workinner-a image-2"></div>

                                                                <div class="slider_workinner-a link-open image-fill-left"></div>

                                                                <?php

                                                                    if (isset($row["link"])) {

                                                                        ?>

                                                                            <div class="static-count d-none">

                                                                                <img class="slider_workinner-img" src="./images/visit.webp" width="150" height="150" alt="visit" />

                                                                                <div class="slider_workinner-innertext link-open" data-href="<?php echo $row["link"]; ?>">
     
                                                                                    Visit
                                                                                    
                                                                                </div>

                                                                            </div>

                                                                        <?php

                                                                    }

                                                                ?>

                                                                <?php

                                                                    if (isset($row["git"])) {

                                                                        ?>

                                                                            <div class="static-count d-none">

                                                                                <img class="slider_workinner-img" src="./images/git.webp" width="150" height="150" alt="visit" />

                                                                                <div class="slider_workinner-innertext link-open" data-href="<?php echo $row["git"]; ?>">
     
                                                                                    GitHub
                                                                                    
                                                                                </div>

                                                                            </div>

                                                                        <?php

                                                                    }

                                                                ?>

                                                                <?php

                                                                    if (isset($tel)) {

                                                                        ?>

                                                                            <div class="static-count d-none">

                                                                                <img class="slider_workinner-img" src="./images/phone.webp" width="150" height="150" alt="telephone" />

                                                                                <div class="slider_workinner-innertext link-open" data-href="tel:<?php echo str_replace(' ', '', $tel); ?>">
     
                                                                                    Phone
                                                                                    
                                                                                </div>

                                                                            </div>

                                                                        <?php

                                                                    }

                                                                ?>

                                                                <?php

                                                                    if (isset($mailto)) {

                                                                        ?>

                                                                            <div class="static-count d-none">

                                                                                <img class="slider_workinner-img" src="./images/mail.webp"  width="150" height="150" alt="Mail" />

                                                                                <div class="slider_workinner-innertext copy-tooltip" data-href="mailto:<?php echo $mailto; ?>"> 
                                                                                    
                                                                                    Email 
                                                                                    
                                                                                    <span class="d-none"> 
                                                                                        
                                                                                        costellodaniel686@gmail.com 
                                                                                    
                                                                                    </span> 
                                                                                
                                                                                </div>

                                                                            </div>

                                                                        <?php
                                                                        
                                                                    }

                                                                ?>

                                                            </div>

                                                            <div class="slider_workinner-percentage percentage">

                                                                <div class="percentage-change"></div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>   

                                    <div id="overlay_backdrop-<?php echo $index; ?>" class="slider_work-overlay-backdrop overlay-backdrop"></div>

                                </div>

                            </div>

                        <?php

                    }
                ?>

            </section>

        </main>

        <footer class="py-11">

            <div class="container">

                <div class="row d-flex justify-content-around align-items-center">

                    <ul class="col-48 col-md-32 list-unstyled d-flex flex-column flex-md-row align-items-md-center flex-fill m-0">

                        <li class="bold text-center order-4 order-md-1 py-md-3 mt-3 mt-md-0 me-md-8"> <i class="fa-regular fa-copyright"></i>&nbsp;<?php echo date("Y"); ?>&nbsp;D.COSTELLO </li>

                        <li class="me-md-8 order-1 order-md-2"> <a class="active navigation-anchor px-0 py-3" href="./"> Work </a> </li>

                        <li class="me-md-8 order-2 order-md-3"> <a class="navigation-anchor px-0 py-3" href="./about.php"> About </a> </li>

                        <?php

                            if (isset($mailto)) {

                                ?>

                                    <li class="order-3 order-md-4">
                            
                                        <div class="copy-tooltip navigation-anchor px-0 py-3"> Email <span class="d-none"> <?php echo $mailto; ?> </span> </div>

                                    </li>

                                <?php
                                
                            }

                        ?>

                    </ul>

                    <div class="col-48 col-md-16 d-flex justify-content-center justify-content-md-end">

                        <?php

                            if (isset($linkedin)) {

                                ?>

                                    <a class="navigation-anchor px-0 py-3" target="LinkedIn" href="<?php echo $linkedin; ?>"> LinkedIn </a>

                                <?php
                                
                            }

                        ?>

                    </div>

                </div>
                
            </div>

        </footer>
        
    </div>  

    <script src="./js/app.min.js" defer></script>

</body>

</html>