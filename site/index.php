<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="D.Costello Portfolio" />
    <meta name="keywords" content="Web Developer, Front End Web Development" />
    <meta name="author" content="D.Costello" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Work</title>
    <link href="./css/app.min.css" rel="stylesheet" type="text/css" />
    <link rel="manifest" href="manifest.json" />
    <link rel="apple-touch-icon" href="images/pwa-logo-small.png" />
</head>

<body>

    <header class="container-fluid">

        <nav class="container pt-7 pt-sm-9 pb-11 pb-lg-13">

            <ul class="list-inline row d-flex flex-column flex-sm-row m-0">

                <li class="list-inline-item col-48 col-sm-12 col-lg-16 mx-0 mb-5 mb-sm-0">

                    D.Costello

                </li>

                <li class="list-inline-item align-self-end col-36 col-lg-32">

                    <ul class="list-inline d-flex justify-content-around justify-content-md-between">

                        <li class="list-inline-item">
        
                            <a class="active" href="./"> Work </a>
        
                        </li>
        
                        <li class="list-inline-item">
        
                            <a href="./about.php"> About </a>
        
                        </li>
        
                        <li class="list-inline-item">
        
                            <button class="copy-tooltip"> Email <span class="d-none"> costellodaniel686@gmail.com </span> </button>
        
                        </li>
        
                    </ul>

                </li>

            </ul>

        </nav>

        <section class="container work-section pb-12 pb-lg-13">

            <div class="row">

                <div class="col-48 col-lg-16 pe-lg-5">

                    <div class="mb-11 mb-lg-5">

                        <?php

                            $date_time = new DateTime("now", new DateTimeZone("Australia/Perth"));
                            echo $date_time->format(" g:i a") . " &mdash; Perth";

                        ?>

                    </div>

                    <div class="d-none d-lg-block">

                        <a class="d-block mb-2" href="tel:+61 434 984983"> +61 434 984 983 </a>

                        <button class="copy-tooltip p-0"> costellodaniel686@gmail.com <span class="d-none"> costellodaniel686@gmail.com </span> </button>

                    </div>

                </div>

                <h1 class="col-48 col-lg-32 slogan pe-5 pe-lg-9 mb-11 mb-lg-0">

                    Web development partner for digital experiences and solutions.

                </h1>

                <div class="d-lg-none">

                    <a class="d-block mb-2" href="tel:+61 434 984983"> +61 434 984 983 </a>

                    <button class="copy-tooltip p-0"> costellodaniel686@gmail.com <span class="d-none"> costellodaniel686@gmail.com </span> </button>

                </div>

            </div>

        </section>

    </header>

    <main>

    </main>

    <script src="./js/app.min.js" defer></script>

</body>

</html>