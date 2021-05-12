<!DOCTYPE html>
<html lang="fr">
<head>
  
    <title>Contact maintenance</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="">

    <link rel="shortcut icon" href="assets/images/majs-favicon-128x108.webp" type="image/x-icon">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/icon54/style.css">
    <link rel="stylesheet" href="assets/icon54-v2/style.css">
    <link rel="stylesheet" href="assets/icon54-v4/style.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2-min.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons-min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome-min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style-min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles-min.css">
    <link rel="stylesheet" href="assets/theme/css/style-min.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional-min.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional-min.css" type="text/css">
  
</head>
<body>
  
<?php 
    include("header.php")
?>

<section class="cid-stMQ5v2hYq mbr-parallax-background" id="header02-10">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(75, 101, 112);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-start">
            <div class="mbr-white col-12 text-center mx-auto">
                <h1 class="mbr-section-title mbr-regular pb-3 align-center mbr-fonts-style display-1">Forfait maintenance</h1> 
            </div>
        </div>
    </div>
</section>

<!-- ici -->
<section class="form BGC pt-5" group="Form" plugins="formstyler, datepicker">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <!--Formbuilder Form-->
                    <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Maintenance Forfait">
                        <input type="hidden" name="email" data-form-email="true" value="7NFbIg5a1ZV0gNz8eIPq2T7EHoaoC5xrOo7OVhRcufmCk7/aokWax29ZHJteBkb21l7PwziyWra+VGbibX1pHi1CCfDpWV9UjAMUyU5vUawaNCE3eLhUnH6Z8Aa7dFDI">
                        <div class="dragArea form-row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="mbr-fonts-style display-5">Pack de maintenance</h4>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="radio">
                                <div class="form-control-label">
                                    <label for="radio-tabs04-1i" class="mbr-fonts-style display-7">Qu'elle forfait souhaitez-vous ?</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="radio" data-form-field="radio" class="form-check-input display-7" value="Forfait basique (35€/Mois)" checked="" id="radio-tabs04-1i"
                                    <?php if (isset($_GET['service']) and $_GET['service'] == "basique") {
                                        echo 'checked=""';
                                    } ?>
                                    >
                                    <label class="form-check-label display-7">Forfait basique (35€/Mois)</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="radio" data-form-field="radio" class="form-check-input display-7" value="Forfait optimisé (55€/Mois)" id="radio-tabs04-1i"
                                    <?php if (isset($_GET['service']) and $_GET['service'] == "optimise") {
                                        echo 'checked=""';
                                    } ?>
                                    >
                                    <label class="form-check-label display-7">Forfait optimisé (55€/Mois)</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="radio" data-form-field="radio" class="form-check-input display-7" value="Forfait confort (100€/Mois)" id="radio-tabs04-1i"
                                    <?php if (isset($_GET['service']) and $_GET['service'] == "confort") {
                                        echo 'checked=""';
                                    } ?>
                                    >
                                    <label class="form-check-label display-7">Forfait confort (100€/Mois)</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="radio" data-form-field="radio" class="form-check-input display-7" value="Forfait sérénité (200€/Mois)" id="radio-tabs04-1i"
                                    <?php if (isset($_GET['service']) and $_GET['service'] == "serenite") {
                                        echo 'checked=""';
                                    } ?>
                                    >
                                    <label class="form-check-label display-7">Forfait sérénité (200€/Mois)</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12"><hr></div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" style="">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="nameFirst" placeholder="*Prénom" data-form-field="nameFirst" class="form-control text-multiple" value="" id="nameFirst-tabs04-1i" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="nameLast" placeholder="*Nom" data-form-field="nameLast" class="form-control text-multiple" value="" id="nameLast-tabs04-1i" required>
                                    </div>
                                </div>
                            </div>

                            <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="*Email" data-form-field="email" class="form-control display-7" value="" id="email-tabs04-1i" required>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="text">
                                <input type="text" name="text" placeholder="Nom de l'entreprise" data-form-field="text" class="form-control display-7" value="" id="text-tabs04-1i">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="phone">
                                <input type="tel" name="phone" placeholder="*Téléphone" pattern="[0-9]{10}" data-form-field="phone" class="form-control display-7" value="" id="phone-tabs04-1i" required>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="message">
                                <textarea name="message" placeholder="Message" data-form-field="message" class="form-control display-7" rows="5" id="message-tabs04-1i"></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <div data-for="J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails." class="form-check">
                                    <input type="checkbox" required value="Yes" name="J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails." data-form-field="J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails." class="form-check-input display-7" id="J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails.-extForm20-c">
                                    <label for="J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails.-extForm20-c" class="form-check-label display-7">J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails.</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <p class="display-7"> *Champ Obligatoire</p>
                            </div>

                            <div class="col-auto"><button type="submit" class="btn btn-sm btn-danger display-7">Envoyer</button></div>

                            <div class="form-row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Merci de votre message, nous revienderons vers vous dés que possible !</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! Il semble qu'il y est un probléme, réesayer.</div>
                            </div>
                        </div>
                    </form><!--Formbuilder Form-->
                </div>
            </div>
        </div>
</section>

<section class="clients cid-spngYtusP2" id="clients01-5l">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1380px" height="810px" viewBox="0 -8.992806499463768e-14 1380 810" preserveAspectRatio="xMidYMid meet">
        <rect id="svgEditorBackground" x="0" y="0" width="1380" height="810" style="fill: none; stroke: none;"></rect>
        <defs id="svgEditorDefs">
            <polygon id="svgEditorShapeDefs" style="fill:khaki;stroke:black;vector-effect:non-scaling-stroke;stroke-width:1px;"></polygon>
            <path id="svgEditorClosePathDefs" style="stroke:black;stroke-width:1px;fill:khaki;"></path>
        </defs>
        <path d="M15083.791600683318,645.6720847341486c496.6000000000058,747.7999999999951,1953.3704016668416,1862.6734725832403,2751.999999999978,1967.9999999999955s1884.300000000003,-198.89999999999964,2718.7056474818382,-552.6365690040448s1746.4898225846773,-519.9524548776521,2593.2943525181545,-567.3634309959566s2251,-23.399999999999636,4384,1520.0000000000032s3205.199999999997,1437.2000000000025,4047.9999999999854,1520.0000000000018s3305.000000000029,-270.2999999999993,4640.000000000029,-1152s74.60000000000582,3328.3000000000065,32,3792.0000000000073s-19509.4,4591.000000000004,-21087.999999999993,-128.00000000000182s-1679.5999999999913,-6358.300000000001,-80,-6400Z" style="stroke:black;fill:khaki;stroke-width:0px;" id="e12_areaS3" transform="matrix(0.0650006 -0.00123765 0.00123765 0.0650006 -995.543 317.589)"></path>
        <path d="M12434.469938292996,-979.2324603008726c496.600000000004,747.8000000000001,1953.3704016668398,1862.673472583247,2752.000000000018,1967.9999999999995s1884.2999999999865,-198.90000000000055,2718.7056474818364,-552.6365690040473s1746.4898225846846,-519.9524548776479,2593.2943525181618,-567.3634309959524s2251,-23.400000000001455,4384,1520s3205.199999999997,1437.1999999999962,4048,1519.9999999999955s3304.9999999999927,-270.3000000000011,4640,-1151.9999999999955s74.60000000000582,3328.3,32,3791.9999999999955s-19509.400000000023,4590.999999999997,-21088.000000000015,-127.99999999999818s-1679.5999999999985,-6358.300000000008,-80,-6400.0000000000055Z" style="stroke:black;fill:aqua;stroke-width:0px;" id="e19_areaS3" transform="matrix(0.0647268 0.00608646 -0.00608646 0.0647268 -823.261 331.266)"></path><text dy="-0.5em" style="fill:black;font-family:Arial;font-size:20px;" id="e14_texte" transform="matrix(0.0640454 0 0 0.0640454 -832.187 329.878)">
            <textPath id="e13_textPath" xlink:href="#e12_areaS3">T</textPath>
        </text>
    </svg>
</section>
           
<?php 
    include("footer.php")
?>

    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/mobirise-tabs/mbr-tabs.js"></script>
    <script src="assets/theme/js/script.js"></script>


    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/parallax/jarallax.min.js"></script>
    <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/mbr-clients-slider/mbr-clients-slider.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>
    
</body>
</html>