<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Devis</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="">

    <link rel="shortcut icon" href="assets/images/majs-favicon-128x108.webp" type="image/x-icon">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2-min.css">
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

<section class="cid-stMQ5v2hYqy mbr-parallax-background" id="header02-10">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(75, 101, 112);"></div>
    <div class="container align-center">
        <div class="row justify-content-md-start">
            <div class="mbr-white col-12 text-center mx-auto">
                <h1 class="mbr-section-title mbr-regular pb-3 align-center mbr-fonts-style display-1">Devis Site E-Commerce</h1> 
            </div>
        </div>
    </div>
</section>

<!--
    <section class="content4 industrym4_content4 cid-sn6ZJQKi2e" id="content004-58">
        <div class="container-fluid">
            <div class="row">       
                <div class="col-lg-8 text-col align-center">
                    <p class="text-center mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-2">Vous êtes</p>
                    <p class=" text-center mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7">
                        • Un nouvel entrepreneur voulant créer une boutique en ligne ?<br>
                        • Une entreprise souhaitant se développer sur internet ?<br>
                        • Une entreprise cherchant une solution sur mesure ?<br>
                        • A la recherche d’une optimisation en référencement naturel/payant, ergonomie ou emailing ?<br><br>
                        Ce formulaire vous permettra de déterminer au mieux votre besoin.</p>
                </div>
                
            </div>
        </div>
    </section>
-->
    <section class="mbr-section extForm cid-sn6ZC8u8u0 pt-5" id="extForm3-57">
        <div class="container">
            <div class="media-container-row">
                <div class="col-md-10 col-lg-8 block-content">
                    <div data-form-type="formoid">
                        <!--Formbuilder Form-->
                        <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Formulaire Devis">
                            <input type="hidden" name="email" data-form-email="true" value="BX5nXUje0eDu4ncnCmt3GX2svXYsgzSYUEeEOdwmggTb+3HvgtxEWjKFOx9S5OmFinA5ZmlraZzrrpEKDeQne0yvY2lEleSljBAhfxUUoR2Yh0r21aSw2H3Ys44LS5vh">
                         
                            <div class="dragArea form-row">
                                <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
                                    <h5 class="mbr-fonts-style mbr-regular display-2">Votre besoin</h5>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group <?php if (isset($_GET['site']) and ($_GET['site'] == "surMesure" or $_GET['site'] == "refonte")) { echo 'd-none';} ?>" data-for="Type de service">
                                    <div class="form-control-label">
                                        <label for="Type de site -extForm3-57" class="mbr-fonts-style display-7">Mon service :</label>
                                    </div>
                                    <div class="form-check">
                                        <input required type="radio" name="Type de service" data-form-field="Type de service" class="form-check-input display-7" value="Achat" id="Type de service -extForm3-57" <?php if (isset($_GET['service']) and $_GET['service'] == "achat") {
                                                                                                                                                                                                            echo 'checked=""';
                                                                                                                                                         } ?>>
                                        <label class="form-check-label display-7">Achat</label>
                                    </div>
                                    <div class="form-check">
                                        <input  type="radio" name="Type de service" data-form-field="Type de service" class="form-check-input display-7" value="Location" id="Type de service -extForm3-57" <?php if (isset($_GET['service']) and $_GET['service'] == "location") {
                                                                                                                                                                                                            echo 'checked=""';
                                                                                                                                                                                                        } ?>>
                                        <label class="form-check-label display-7">Location</label>
                                    </div>
                                </div>
                  
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <hr>
                                </div>


                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h5 class="mbr-fonts-style mbr-regular display-2 pb-3">Votre design</h5>
                                </div>
                                <div data-for="Logo : " class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="form-control-label">
                                        <label for="Logo : -extForm3-57" class="mbr-fonts-style display-7">Mon logo :</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Logo : " data-form-field="Logo : " class="form-check-input display-7" value="Je possède mon logo" checked="" id="Logo : -extForm3-57">
                                        <label class="form-check-label display-7">Je possède mon logo</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Logo : " data-form-field="Logo : " class="form-check-input display-7" value="J'ai besoin d'un logo" id="Logo : -extForm3-57">
                                        <label class="form-check-label display-7">J'ai besoin d'un logo</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Logo : " data-form-field="Logo : " class="form-check-input display-7" value="Je n'ai pas besoin de logo" id="Logo : -extForm3-57">
                                        <label class="form-check-label display-7">Je n'ai pas besoin de logo</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="Theme Graphique">
                                    <div class="form-control-label">
                                        <label for="Theme Graphique-extForm3-57" class="mbr-fonts-style display-7">Mon thème graphique (Prestashop) :</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Theme Graphique" data-form-field="Theme Graphique" class="form-check-input display-7" value="Je dispose de mon propre thème graphique" checked="" id="Theme Graphique-extForm3-57">
                                        <label class="form-check-label display-7">Je dispose de mon propre thème graphique</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Theme Graphique" data-form-field="Theme Graphique" class="form-check-input display-7" value="Je souhaite choisir parmi les thèmes existant" id="Theme Graphique-extForm3-57">
                                        <label class="form-check-label display-7">Je souhaite choisir parmi les thèmes existant</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Theme Graphique" data-form-field="Theme Graphique" class="form-check-input display-7" value="Je souhaite un theme personnalisé qui reflète mon image" id="Theme Graphique-extForm3-57">
                                        <label class="form-check-label display-7">Je souhaite un theme personnalisé qui reflète mon image</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <hr>
                                </div>


                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h5 class="mbr-fonts-style mbr-regular display-2 pb-3">Fonctionnalités</h5>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p class="mbr-fonts-style display-5">De combien de produits diposez-vous ?</p>
                                </div>
                                <div data-for="Nombre de produits" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input required type="number" name="Nombre de produits" placeholder="Nombre de produits" max="100" min="0" step="1" data-form-field="Nombre de produits" class="form-control display-7" value="" id="Nombre de produits-extForm3-57">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="form-control-label">
                                        <label for="" class="mbr-fonts-style display-7">Quels fonctionnalités souhaitez-vous ?</label>
                                    </div>
                                    <div data-for="Newsletter" class="form-check">
                                        <input type="checkbox" value="Yes" name="Newsletter" data-form-field="Newsletter" class="form-check-input display-7" id="Newsletter-extForm3-57">
                                        <label for="Newsletter-extForm3-57" class="form-check-label display-7">Newsletter</label>
                                    </div>
                                    <div data-for="Galerie photo / Portfolio / Carrousel ..." class="form-check">
                                        <input type="checkbox" value="Yes" name="Galerie photo / Portfolio / Carrousel ..." data-form-field="Galerie photo / Portfolio  ..." class="form-check-input display-7" id="Galerie photo / Portfolio / Carrousel ...-extForm3-57">
                                        <label for="Galerie photo / Portfolio / Carrousel ...-extForm3-57" class="form-check-label display-7">Galerie photo / Portfolio  ...</label>
                                    </div>
                                    <div data-for="Blog" class="form-check">
                                        <input type="checkbox" value="Yes" name="Blog" data-form-field="Blog" class="form-check-input display-7" id="Blog-extForm3-57">
                                        <label for="Blog-extForm3-57" class="form-check-label display-7">Blog</label>
                                    </div>
                                    <div data-for="Paiement Paypal" class="form-check">
                                        <input type="checkbox" value="Yes" name="Paiement-Paypal" data-form-field="Paiement-Paypal" class="form-check-input display-7" id="Paiement-Paypal-extForm3-57">
                                        <label for="Paiement-Paypal-extForm3-57" class="form-check-label display-7">Paiement Paypal</label>
                                    </div>
                                    <div data-for="Livraison-Express" class="form-check">
                                        <input type="checkbox" value="Yes" name="Livraison-Express" data-form-field="Livraison-Express" class="form-check-input display-7" id="Livraison Express-extForm3-57">
                                        <label for="Livraison-Express-extForm3-57" class="form-check-label display-7">Livraison Express</label>
                                    </div>
                                </div>
                                <div data-for="Autre fonctionnalité " class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="Autre fonctionnalité " placeholder="Autres..." data-form-field="Autre fonctionnalité " class="form-control display-7" id="Autre fonctionnalité -extForm3-57"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <hr>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h5 class="mbr-fonts-style mbr-regular display-2 pb-3">Formation</h5>
                                </div>
                                <div data-for="Hébergement" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="form-control-label">
                                        <label for="Formation-extForm3-57" class="mbr-fonts-style display-7">Souhaitez-vous être formé à l'utilisation de votre boutique en ligne ? (Autonomie)</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Formation" data-form-field="Formation" class="form-check-input display-7" value="Formation" checked="" id="Formation-extForm3-57">
                                        <label class="form-check-label display-7">Oui</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Formation" data-form-field="Formation" class="form-check-input display-7" value="Formation" id="Formation-extForm3-57">
                                        <label class="form-check-label display-7">Non</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <hr>
                                </div>


                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h5 class="mbr-fonts-style mbr-regular display-2 pb-3">Référencement</h5>
                                </div>
                                <div data-for="Référencement" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="form-control-label">
                                        <label for="Référencement-extForm3-57" class="mbr-fonts-style display-7">Comment souhaitez-vous être référencé ?</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Référencement" data-form-field="Référencement" class="form-check-input display-7" value="Référencement classique ( Basique )" checked="" id="Référencement-extForm3-57">
                                        <label class="form-check-label display-7">Référencement naturel (SEO)</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Référencement" data-form-field="Référencement" class="form-check-input display-7" value="Référencement optimisé ( Optimal )" id="Référencement-extForm3-57">
                                        <label class="form-check-label display-7">Référencement payant (SEA)</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <hr>
                                </div>


                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h5 class="mbr-fonts-style mbr-regular display-2 pb-3">Hébergement</h5>
                                </div>
                                <div data-for="Hébergement" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="form-control-label">
                                        <label for="Hébergement-extForm3-57" class="mbr-fonts-style display-7">Comment souhaitez-vous hébergé votre site ?</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Hébergement" data-form-field="Hébergement" class="form-check-input display-7" value="Je dispose de mon propre hébergement" checked="" id="Hébergement-extForm3-57">
                                        <label class="form-check-label display-7">Je dispose de mon propre hébergement</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Hébergement" data-form-field="Hébergement" class="form-check-input display-7" value="Je souhaite faire héberger ma boutique" id="Hébergement-extForm3-57">
                                        <label class="form-check-label display-7">Je souhaite faire héberger ma boutique</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <hr>
                                </div>



                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h5 class="mbr-fonts-style mbr-regular display-2 pb-3">Information de contact</h5>
                                </div>

                                <div data-for="Boutique-physique" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="form-control-label">
                                        <label for="Boutique-physique-extForm3-57" class="mbr-fonts-style display-7">Disposez-vous d'une boutique physique ?</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Boutique-physique" data-form-field="Boutique-physique" class="form-check-input display-7" value="Oui" checked="" id="Boutique-physique-extForm3-57">
                                        <label class="form-check-label display-7">Oui</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="Boutique-physique" data-form-field="Boutique-physique" class="form-check-input display-7" value="Non" id="Boutique-physique-extForm3-57">
                                        <label class="form-check-label display-7">Non</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <input required type="text" name="nom" placeholder="Nom*" data-form-field="nom" class="form-control text-multiple" value="" id="nom-extForm3-57">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="societe" placeholder="Société" data-form-field="societe" class="form-control text-multiple" value="" id="societe-extForm3-57">
                                        </div>
                                    </div>
                                </div>
                                <div data-for="telephone" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input required type="tel" name="telephone" placeholder="Téléphone*" data-form-field="telephone" required="required" class="form-control display-7" value="" id="telephone-extForm3-57">
                                </div>
                                <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input required type="email" name="email" placeholder="Adresse mail*" data-form-field="email" required="required" class="form-control display-7" value="" id="email-extForm3-57">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div data-for="J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails." class="form-check">
                                        <input type="checkbox" required value="Yes" name="J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails." data-form-field="J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails." class="form-check-input display-7" id="J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails.-extForm20-c">
                                        <label for="J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails.-extForm20-c" class="form-check-label display-7">J’accepte que mes données personnelles soient collectées, traitées et utilisées par Majs Web Agency afin de répondre à ma demande de contact et à recevoir le cas échéant l’actualité et les offres commerciales par emails.</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p class="mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7"> * Champs requis </p>
                                    <hr>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 input-group-btn mt-2">
                                    <button type="submit" class="btn btn-form btn-bgr btn-sm btn-danger display-7">Envoyer</button>
                                </div>
                                <div class="form-row">
                                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Merci de votre message, nous revienderons vers vous dés que possible !</div>
                                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! Il semble qu'il y est un probléme, réesayer.</div>
                                </div>
                            </div>
                        </form>
                        <!--Formbuilder Form-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clients cid-sn6ZrYAdxj" id="clients01-55">




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
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/mbr-clients-slider/mbr-clients-slider.js"></script>
    <script src="assets/formstyler/jquery.formstyler.js"></script>
    <script src="assets/formstyler/jquery.formstyler.min.js"></script>
    <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>



</body>

</html>