

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
                <form>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationServer01">First name</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServer02">Last name</label>
                            <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServerUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                </div>
                                <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer03">City</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationServer04">State</label>
                            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationServer05">Zip</label>
                            <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
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