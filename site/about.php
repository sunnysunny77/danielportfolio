<?php

    // view variables

    $tel = "+61 434 984 983";
    $mailto = "costellodaniel686@gmail.com";
    $linkedin = "https://www.linkedin.com/in/daniel-costello-579b10259/";

?>

<!DOCTYPE html>
<html lang="en" data-overlayscrollbars-initialize>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TBDFZ1ZRW5" nonce="o8vuX9lzA2hbG8mJ"></script>
    <script nonce="ePYgXpr5wufRyzPg">
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
    <title>Portfolio - About</title>
    <link href="./css/app.min.css" rel="stylesheet" type="text/css" />
    <link rel="manifest" href="manifest.json" />
    <link rel="apple-touch-icon" href="images/pwa-logo-small.webp" />
</head>

<body data-overlayscrollbars-initialize>

    <div id="intro-about" class="intro"></div>

    <nav class="container-fuild d-flex align-items-center">

        <div class="container">

            <ul class="list-inline row d-flex m-0">

                <li class="list-inline-item col-12 col-lg-16 m-0">

                    <span class="pb-3 me-2"> <span class="blink"></span> D.C </span>

                </li>

                <li class="list-inline-item align-self-end col-36 col-lg-32">

                    <ul class="list-inline d-flex justify-content-around justify-content-md-between">

                        <li class="list-inline-item">

                            <a class="navigation-anchor px-0 pb-3" href="./"> Work </a>

                        </li>

                        <li class="list-inline-item">

                            <a class="active navigation-anchor px-0 pb-3" href="./about.php"> About </a>

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

    <div id="about-header" role="img" class="container-fluid"> </div>

    <main class="about-main pt-10 pb-12 py-lg-14">

        <section class="container">

            <div class="row justify-content-center justify-content-md-between">

                <div class="col-xl-12 d-none d-xl-block">

                    <img data-aos="slide-right" src="./images/daniel.webp" width="760" height="475" alt="Daniel" />

                </div>

                <div class="col-48 col-xl-32">

                    <div class="row justify-content-between">

                        <div class="col-48 col-md-25 col-xl-20">

                            <div data-aos="fade-right">

                                <h1 class="mb-3"> G'day </h1>

                                <p class="mb-9">

                                    Try get it right... Try try again

                                </p>

                                <img class="d-xl-none mb-9" src="./images/daniel.webp" width="760" height="475" alt="Daniel" />

                            </div>

                            <div data-aos="fade-up">
                                    
                                <h2 class="mb-3"> Qualifications </h2>

                                <p class="mb-9">

                                    Certificate 4
                                    <br />
                                    ICT40315 Web Based Technologies
                                    <br />
                                    <br />
                                    2021
                                    <br />
                                    <br />
                                    Diploma
                                    <br />
                                    ICT50220-AC26 Diploma of Information Technology (Front End Web Development)
                                    <br />
                                    <br />
                                    2022

                                </p>

                            </div>

                            <div data-aos="fade-left">

                                <h2 class="mb-3"> Recent partners </h2>

                                <p class="mb-9">

                                    Lateral Aspect

                                </p>


                            </div>

                        </div>

                        <hr class="d-md-none mb-9">

                        <div data-aos="fade-up" class="col-48 col-md-16 col-xl-20">

                            <div class="row justify-content-between">

                                <div class="col-24 col-md-48 order-2 order-md-1">

                                    <h2 class="mb-3"> Favourites </h2>

                                    <a class="mb-3 d-block" target="GitHub" href="https://github.com/sunnysunny77/"> GitHub <i class="fa-regular fa-heart"></i> </a>

                                    <a class="mb-3 d-block" target="Template" href="https://github.com/sunnysunny77/template/"> Development Stack </a>

                                    <a class="mb-3 d-block" target="Wordpress" href="https://github.com/sunnysunny77/bootstrapwordpresstemplate/"> Wordpress Stack</a>

                                    <a class="mb-3 d-block" target="Bsv3" href="https://wordpress.sunnyhome.site/">  Basic Wordpress </a>

                                    <a class="mb-3 d-block" target="Sliders" href="https://sliders.sunnyhome.site/"> Sliders </a>

                                </div>

                                <div class="col-24 col-md-48 order-1 order-md-2">

                                    <h2 class="mb-3"> Socials </h2>

                                    <a class="mb-3 d-block" target="LinkedIn" href="https://www.linkedin.com/in/daniel-costello-579b10259/"> LinkedIn </a>
                                    
                                </div>

                                <div class="col-48 order-3">

                                    <h2 class="mb-3"> Contact </h2>

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

                                                    <div class="copy-tooltip p-0"> <?php echo $mailto; ?> <span class="d-none"> <?php echo $mailto; ?> </span> </div>

                                            <?php
                                            
                                        }

                                    ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

    <footer class="py-11">

        <div class="container">

            <div class="row d-flex justify-content-around align-items-center">

                <ul class="col-48 col-md-32 list-unstyled d-flex flex-column flex-md-row align-items-md-center flex-fill m-0">

                    <li class="bold text-center order-4 order-md-1 py-md-3 mt-3 mt-md-0 me-md-8"> <i class="fa-regular fa-copyright"></i>&nbsp;<?php echo date("Y"); ?>&nbsp;D.COSTELLO </li>

                    <li class="me-md-8 order-1 order-md-2"> <a class="navigation-anchor px-0 py-3" href="./"> Work </a> </li>

                    <li class="me-md-8 order-2 order-md-3"> <a class="active navigation-anchor px-0 py-3" href="./about.php"> About </a> </li>

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

    <script src="./js/app.min.js" defer></script>

</body>

</html>