<?php
$section_accueil = get_field('section_accueil');
?>

<?php
$section_mariage = get_field('section_mariage');
?>

<?php
$section_anniversaire = get_field('section_anniversaire');
?>

<?php
$section_decoration = get_field('section_decoration');
?>

<?php
$section_video = get_field('section_video');
?>

<?php
$section_localisation = get_field('section_localisation');
?>

<?php

get_header();
?>


<div class="home">
    <div id="accueil">
        <div class="title" data-aos="zoom-in">
            <h3 class="welcome-text">Bienvenue chez mon <br>
                Emma
            </h3>
            <h5 class="slogan mt-3">
                <?php
                echo $section_accueil['slogan'];
                ?>
            </h5>
            <a href="
            <?php
            echo $section_accueil['lien'];
            ?>
                " class="btn btn-outline-info mt-3">Consulter</a>
        </div>
    </div>
</div>

</header>

<div class="padding mt-3 mb-md-5">
    <h3 class="text-center" data-aos="zoom-in" data-aos-delay="500">Que faisons-nous ?</h3>
    <hr style="background-color:#FFB1B1; width: 10%; opacity: .3;">
</div>

<!-- Wedding Area -->

<div class="padding mb-md-5">
    <div class="wedding-area">
        <div class="container">
            <div class="row">
                <div class="col-9 col-lg-8 wedding-desc-block" data-aos="fade-right">
                    <h3 class="wedding-title">
                        <?php
                        echo $section_mariage['titre'];
                        ?>
                    </h3>
                    <p class="wedding-description pt-md-4">
                        <?php
                        echo $section_mariage['message'];
                        ?>
                    </p>
                    <a href="services.html" class="btn btn-outline-info mt-md-3">Voir plus</a>
                </div>
                <div class="col-3 col-lg-4" data-aos="fade-left">
                    <img src="<?php
                                echo esc_url($section_mariage['image']['url']);
                                ?>" alt="Gateau mariage" class="wedding-cake pt-sm-4">
                </div>
            </div>
        </div>
    </div>
    <div class="space"></div>
    <!-- <hr style="background-color:#FFB1B1; width: 15%; height: .8;"> -->
</div>
<div class="space"></div>


<!-- End Wedding Area -->

<!-- Birthday Area -->

<div class="padding">
    <div class="birthday-area pt-md-4">
        <div class="container">
            <div class="row" data-aos="fade-up-left">
                <div class="col-12">
                    <h3 class="birthday-title ">
                        <?php
                        echo $section_anniversaire['titre'];
                        ?>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div data-aos="fade-right" class="col-12 col-sm-6 col-md-4 mt-sm-4 birthday-cake-group">
                    <img src="<?php
                                echo esc_url($section_anniversaire['image_1']['url']);
                                ?>" alt="Image gateau d'anniversaire" class="birthday-cake-1 img-fluid">

                    <img src="<?php
                                echo esc_url($section_anniversaire['image_2']['url']);
                                ?>" class="birthday-cake-2 img-fluid">
                </div>
                <div class="col-sm-6 col-12 col-md-7 birthday-description ml-auto text-right" data-aos="fade-up-left">
                    <p class="pt-md-4">
                        <?php
                        echo $section_anniversaire['message'];
                        ?>
                    </p>
                    <a href="#" class="btn btn-outline-info mt-md-3" style="float: right">Voir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr style="background-color:#FFB1B1; width: 10%; opacity: .3;">

<!-- End of Birthday Area -->

<!-- Decoration Area -->

<div class="padding pb-md-4">
    <div class="decoration-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="decoration-title">

                        <?php
                        echo $section_decoration['titre'];
                        ?>
                    </h3>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner pt-4">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 col-sm-4 mt-sm-4" data-aos-delay="300" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                        <img src=" <?php
                                                    $image1 = $section_decoration['images']['image_1'];
                                                    echo esc_url($image1['image']['url']);
                                                    ?>" class="d-block w-100" alt="...">
                                        <p class="deco-desc text-center center mt-2"><?php echo $image1['description'] ?></p>
                                    </div>
                                    <div class="col-md-3 col-sm-4 mt-sm-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
                                        <img src="<?php
                                                    $image2 = $section_decoration['images']['image_2'];
                                                    echo esc_url($image2['image']['url']);
                                                    ?>
                                        " class="d-block w-100" alt="...">
                                        <p class="deco-desc text-center center mt-2"><?php echo $image2['description'] ?></p>
                                    </div>
                                    <div class="col-md-3 col-sm-4 mt-sm-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
                                        <img src="<?php
                                                    $image3 = $section_decoration['images']['image_3'];
                                                    echo esc_url($image3['image']['url']);
                                                    ?>
                                        " class="d-block w-100" alt="...">
                                        <p class="deco-desc text-center center mt-2"><?php echo $image3['description'] ?></p>
                                    </div>
                                    <div class="col-md-3 col-sm-4 mt-sm-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
                                        <img src="<?php
                                                    $image4 = $section_decoration['images']['image_4'];
                                                    echo esc_url($image4['image']['url']);
                                                    ?>
                                        " class="d-block w-100" alt="...">
                                        <p class="deco-desc text-center center mt-2"><?php echo $image4['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-4 mt-sm-4 ">
                                        <img src="<?php
                                                    $image5 = $section_decoration['images']['image_5'];
                                                    echo esc_url($image5['image']['url']);
                                                    ?>
                                        " class="d-block w-100" alt="...">
                                        <p class="deco-desc text-center mt-2"><?php echo $image5['description'] ?></p>
                                    </div>
                                    <div class="col-md-3 col-sm-4 mt-sm-4">
                                        <img src="<?php
                                                    $image6 = $section_decoration['images']['image_6'];
                                                    echo esc_url($image6['image']['url']);
                                                    ?>
                                        " class="d-block w-100" alt="...">
                                        <p class="deco-desc text-center mt-2"><?php echo $image6['description'] ?></p>
                                    </div>
                                    <div class="col-md-3 col-sm-4 mt-sm-4">
                                        <img src="<?php
                                                    $image7 = $section_decoration['images']['image_7'];
                                                    echo esc_url($image7['image']['url']);
                                                    ?>
                                        " class="d-block w-100" alt="...">
                                        <p class="deco-desc text-center mt-2"><?php echo $image7['description'] ?></p>
                                    </div>
                                    <div class="col-md-3 col-sm-4 mt-sm-4">
                                        <img src="<?php
                                                    $image8 = $section_decoration['images']['image_8'];
                                                    echo esc_url($image8['image']['url']);
                                                    ?>
                                        " alt="...">
                                        <p class="deco-desc text-center mt-2"><?php echo $image8['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>

<!-- End Decoration Area -->

<!-- Vidéo Area -->
<div class="padding video-area mt-4 mb-md-4">
    <div class="video-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <h3 class="text-center">
                        <?php
                        echo $section_video['titre'];
                        ?>
                    </h3>
                    <p class="text-center">
                        <?php
                        echo $section_video['description'];
                        ?>
                    </p>
                    <?php
                    echo $section_video['lien'];
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- End Vidéo Area -->

<h3 class="text-center pt-4 mb-md-4">Ou nous trouver ?</h3>
<hr style="background-color:rgb(255, 238, 238); width: 10%; opacity: 0.1;">

<!-- Location Area -->

<div class="padding mb-md-3 mt-md-4">
    <div class="location-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-sm-4 col-lg-3" data-aos="fade-right">
                            <img src="<?php
                                        echo esc_url($section_localisation['image']['url']);
                                        ?>
                            " class="bakery-image img-thumbnail" alt="Image devanture">
                        </div>
                        <div class="col-sm-7 text-right pt-sm-3 col-lg-8 ml-lg-3" data-aos="fade-up-left">
                            <?php
                            echo $section_localisation['localisation'];
                            ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- End Location Area -->

<?php

get_footer();
?>