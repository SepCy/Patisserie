<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mon emma website</title>

    <!-- Font link -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Bootstrap css cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- AOs cdn -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <!-- <link rel="stylesheet" href="/icons/fontawesome/css/all.css">


    <link rel="stylesheet" href="css/main.css" /> -->

    <?php
    wp_head();
    ?>

</head>

<body>

    <!-- Header Area -->
    <header class="header">
        <nav class="navbar top navbar-expand-lg navbar-light col-md-12">
            <a href="#" class="offset-md-1"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="Logo" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <?php

                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'container' => 'div',
                        'container_class'  => 'navbar-nav justify-content-start',
                        ''
                    )
                );
                ?>

            </div>
        </nav>


        <!-- End Header Area -->