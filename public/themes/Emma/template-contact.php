

<?php

/* Template Name: Contact */

get_header();
?>



<div class="padding mt-3 mb-md-5">
    <h3 class="text-center">Contactez-nous</h3>
    <hr style="background-color:#FFB1B1; width: 10%; opacity: .3;">
</div>

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pb-5">
               <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
            </div>
            <div class="col-md-6 mb-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1023.1109242932006!2d15.245368795795109!3d10.346540021573068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x111e1b612a51c1df%3A0xce68c87aeec001b1!2sYagoua%20Regional%20Hospital!5e1!3m2!1sfr!2scm!4v1574281344455!5m2!1sfr!2scm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area -->



<?php
get_footer();
?>