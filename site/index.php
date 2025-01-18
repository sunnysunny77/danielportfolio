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
                                            
                                            <button class="copy-tooltip navigation-anchor nav-tooltip px-0 pb-3"> Email <span class="d-none"> <?php echo $mailto; ?> </span> </button>

                                        </li>

                                    <?php
                                    
                                }

                            ?>

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

                                        <button class="copy-tooltip p-0"> <?php echo $mailto; ?>  <span class="d-none"> <?php echo $mailto; ?>  </span> </button>

                                        <?php
                                    
                                }

                            ?>

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

                                <div class="col-48 col-md-16 col-lg-11 d-flex flex-column">

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

                                                    <p class="mb-1">

                                                        <?php

                                                            if (isset($credential["title"])) {

                                                                ?>
                                        
                                                                    <span> <?php echo $credential["title"] ?> </span>

                                                                <?php

                                                            }

                                                        ?>

                                                        <br>

                                                        <?php

                                                            if (isset($credential["username"])) {

                                                                ?>

                                                                    <button class="copy-tooltip"> Username <span class="d-none"> <?php echo $credential["username"] ?> </span> </button>

                                                                <?php

                                                            }

                                                        ?>

                                                        <br>

                                                        <?php

                                                            if (isset($credential["password"])) {

                                                                ?>

                                                                    <button class="copy-tooltip"> Password <span class="d-none"> <?php echo $credential["password"] ?> </span> </button>

                                                                <?php

                                                            }

                                                        ?>
                                            
                                                    </p>

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


                                                                <a href="" class="slider_workinner-a image-1"></a>

                                                                <a href="" class="slider_workinner-a image-fill-right"></a>

                                                                <div class="slider_workinner-inner inner"></div>

                                                                <a href="" class="slider_workinner-a image-2"></a>

                                                                <a href="" class="slider_workinner-a image-fill-left"></a>

                                                                <?php

                                                                    if (isset($row["link"])) {

                                                                        ?>

                                                                            <div class="static-count d-none">

                                                                                <img class="slider_workinner-img" src="./images/visit.webp" width="150" height="150" alt="visit" />

                                                                                <div>

                                                                                    <a rel="noreferrer" target="_blank" href="<?php echo $row["link"]; ?>">Visit</a>

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

                                                                                <div>

                                                                                    <a rel="noreferrer" target="_blank" href="<?php echo $row["git"]; ?>">GitHub</a>

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

                                                                                <div>

                                                                                    <a rel="noreferrer" target="_blank" href="tel:<?php echo str_replace(' ', '', $tel); ?>">Phone</a>
                                                                                            
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

                                                                                <div>
     
                                                                                    <a rel="noreferrer" target="_blank" href="mailto:<?php echo $mailto; ?>">Email</a>
                                                                                    
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
                            
                                        <button class="copy-tooltip navigation-anchor px-0 py-3"> Email <span class="d-none"> <?php echo $mailto; ?> </span> </button>

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