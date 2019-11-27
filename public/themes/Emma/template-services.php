<?php

/* Template Name: Services */
?>

<?php
$section_mariage = get_field('section_mariage');
$images_mariage = $section_mariage['images'];
?>

<?php
$section_anniversaire = get_field('section_anniversaire');
$images_anniversaire = $section_anniversaire['images'];
?>

<?php
$section_decoration = get_field('section_decoration');
$images_decoration = $section_decoration['images'];
?>

<?php
$section_autres = get_field('section_autres');
$images_autres = $section_autres['images'];
?>


<?php

get_header();
?>

<div class="padding mt-4 mb-md-4">
    <h3 class="text-center">Nos réalisations </h3>
    <hr style="background-color:#FFB1B1; width: 10%; opacity: .3;">
</div>

<div class="container padding">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills sticky-top pt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Mariage</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Anniversaire</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Décorations</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Autres</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">

                        <!-- Mariage products -->

                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_1']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_2']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_3']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_4']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_5']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_5']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_5']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_5']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_5']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_5']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_5']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_5']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_5']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_mariage['image_5']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Anniversaire products -->

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_anniversaire['image_1']['url']);
                                                    ?>
                                        " alt="" class="img-fluid">
                                        <!-- <p class="text-center">productyo</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_anniversaire['image_2']['url']);
                                                    ?>
                                        " alt="" class="img-fluid">
                                        <img src="<?php
                                                    echo esc_url($images_anniversaire['image_3']['url']);
                                                    ?>
                                        " alt="" class="img-fluid">
                                        <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_anniversaire['image_4']['url']);
                                                    ?>
                                        " alt="" class="img-fluid">
                                        <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_anniversaire['image_5']['url']);
                                                    ?>
                                        " alt="" class="img-fluid">
                                        <!-- <p class="text-center">product</p> -->
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Décorations products -->

                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_decoration['image_1']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_decoration['image_2']['url']);
                                                    ?>
                                        " alt="" class="img-fluid"> <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_decoration['image_1']['url']);
                                                    ?>
                                        " alt="" class="img-fluid">
                                        <!-- <p class="text-center">product</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Autres products -->

                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 pt-md-4">
                                        <img src="<?php
                                                    echo esc_url($images_decoration['image_1']['url']);
                                                    ?>
                                        " alt="" class="img-fluid">
                                        <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                    <img src="<?php
                                                   echo esc_url($images_decoration['image_2']['url']);
                                                    ?>
                                        " alt="" class="img-fluid">                                          <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                    <img src="<?php
                                                   echo esc_url($images_decoration['image_3']['url']);
                                                    ?>
                                        " alt="" class="img-fluid">                                          <!-- <p class="text-center">product</p> -->
                                    </div>
                                    <div class="col-md-4 pt-md-4">
                                    <img src="<?php
                                                   echo esc_url($images_decoration['image_4']['url']);
                                                    ?>
                                        " alt="" class="img-fluid">                                          <!-- <p class="text-center">product</p> -->
                                    </div>                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<hr style="background-color:#FFB1B1; width: 10%; opacity: .3;">
</div>
<div class="padding">
    <h3 class="text-center">Témoignage</h3>
</div>


<div class="padding mb-md-3 mt-md-4">
    <div class="location-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img src="<?php bloginfo('template_directory') ?>/images/patricia-prudente-THcXu1LglG8-unsplash.jpg" class="person-image" alt="Image devanture">
                        </div>
                        <div class="col-12 mt-3 col-md-8 text-right">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit eos expedita, at
                            porro nostrum
                            aliquid,
                            quis vitae ipsa suscipit sequi reiciendis distinctio quasi cumque iusto magni nulla ut
                            quaerat.
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>