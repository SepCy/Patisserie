<?php
$footer = get_field('footer');
?>

<?php
$section_contact = $footer['section_contact'];
?>

<?php
$section_follow = $footer['section_suivez-nous'];
?>

<!-- Footer Area -->

<div class="padding footer mt-md-4">
    <footer class="mt-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-7">
                    <h3 class="text-md-left text-center mt-sm-4">Nos Contacts</h3><br>
                    <ul class="contacts" style="float: left">
                        <li class="contact-item"><i class="fas fa-phone-alt mr-3 pb-2"></i>
                            +237 <?php
                                    echo $section_contact['numero'];
                                    ?>

                        </li>
                        <li class="contact-item"><i class="fas fa-envelope mr-3 pb-2"></i>
                            <?php
                            echo $section_contact['mail'];
                            ?>
                        </li>
                        <li class="contact-item"><i class="fab fa-whatsapp mr-3"></i>
                            +237 <?php
                                    echo $section_contact['whatsapp'];
                                    ?>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-5">
                    <h3 class="text-center text-md-left mt-sm-4">Suivez-nous</h3><br>
                    <div class="contacts" style="float: left ;display: flex; list-style-type: none; align-items:center;">

                        <li>
                            <a href="
                        <?php
                        echo $section_follow['lien_facebook'];
                        ?>
                        " target="_blank">
                                <i class="fab fa-facebook-f fa-lg ml-4 mr-4"></i>
                        </li>
                        </a>
                        <li> <a href="
                        <?php
                        echo $section_follow['lien_youtube'];
                        ?>
                        " target="_blank">

                                <i class="fab fa-youtube fa-lg">

                                </i>
                        </li>
                        </a>

                    </div>
                </div>
                <div class="col-md-4 col-sm-5">
                    <h3 class="text-center text-md-right mt-sm-4">Horaires</h3><br>
                    <div class="contacts" style="float: left ; list-style-type: none;">

                        <li class="ml-4">Nous sommmes toujours ouverts</li>

                    </div>
                </div>

            </div>
            <hr style="background-color:rgb(128, 128, 128); width: 10%; opacity: .5;">
            <div class="row pt-4">
                <div class="col-md-4 col-6">
                    &copy; copyright Mon Emma
                </div>
                <div class="col-md-4 offset-md-4 col-6">
                   <p class="text-right">Réalisé par </p> 
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
<!-- Script tags -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
        disable: 'mobile',
        once: true
    });
</script>
<?php wp_footer(); ?>
</body>

</html>