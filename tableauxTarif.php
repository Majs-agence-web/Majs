<section class="extTabs tabs cid-stYFinPMLL id="extTabs11-1j">
    <div class="container d-flex flex-column">
        <ul class="nav nav-tabs mb-4 justify-content-center mx-auto d-flex" role="tablist">
            <!-- maintenance -->
            <?php 
                if (isset($_GET['service']) and $_GET['service'] == "maintenance") { 
                    echo '<li class="nav-item first mbr-section-btn">
                    <a class="mbr-fonts-style btn-sm btn show active display-5" role="tab" data-toggle="tab" href="#extTabs11-1j_tab0" aria-selected="true">Maintenance</a>
                    </li>';
            
                }else{
                    echo '<li class="nav-item first mbr-section-btn">
                    <a class="mbr-fonts-style btn-sm btn show active display-5" role="tab" data-toggle="tab" href="#extTabs11-1j_tab0" aria-selected="true">Location</a>
                    </li>';
                } 
            ?>
            <!-- location -->

            <!-- achat -->
            <li class="nav-item mbr-section-btn">
                <a class="mbr-fonts-style btn-sm btn active display-5" role="tab" data-toggle="tab" href="#extTabs11-1j_tab1" aria-selected="true">Achat</a>
            </li>

            <!-- location -->
            <?php 
                if (isset($_GET['service']) and $_GET['service'] == "maintenance") { 
                    echo '<li class="nav-item mbr-section-btn">
                    <a class="mbr-fonts-style btn-sm btn active display-5" role="tab" data-toggle="tab" href="#extTabs11-1j_tab2" aria-selected="true">Location</a>
                    </li>';
                
                }else{
                    echo '<li class="nav-item mbr-section-btn">
                    <a class="mbr-fonts-style btn-sm btn active display-5" role="tab" data-toggle="tab" href="#extTabs11-1j_tab2" aria-selected="true">Maintenance</a>
                    </li>';
                } 
            ?>
            <!-- maintenance -->
        </ul>
        
        <div class="tab-content">

            <!-- location -->
            <?php 
                if (isset($_GET['service']) and $_GET['service'] == "maintenance") { 
                    echo '<div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row justify-content-center">
                            <section class="extPricingTables" group="Additional Blocks">
                                <div class="container">
                                    <div class="media-container-row">
                                        <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                            <div class="price-item text-center">
                                                <div class="test">
                                                    <h4 class="title mbr-fonts-style mbr-light display-5">
                                                        <strong>
                                                            <a href="maintenance.php">Basique</a>
                                                        </strong>
                                                    </h4>
                                                </div>
                                                <div class="price-tage">
                                                    <h3 class="mbr-fonts-style costs mbr-light display-2">35€</h3>
                                                    <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                                </div>
                                                <ul class="table-content mbr-fonts-style display-7">
                                                    
                                                    <li class="option divMaintenance1">Maintenance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 255, 255);"></span> </li>
                                                    <div class="maintenance1">1 heure de maintenance par mois</div>
                                                    
                                                    <li>Mise à jour de WordPress, Prestashop ou Mobirise, des modules et des plugins <span class="mobi-mbri mobi-mbri-success mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                    
                                                    <li class="divSauvegardeSite1">Sauvegarde de votre site<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                    <div class="sauvegardeSite1">2 Sauvegardes de votre site par mois</div>
                                                    
                                                    <li class="divSauvegardeBDD1">Sauvegarde de votre base de donnée&nbsp;<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>  
                                                    <div class="sauvegardeBDD1">2 Sauvegardes de votre base de données par mois</div>
                                                    
                                                    <li class="divDelaisIntervention1">Délais assistance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 138, 115);"></span></li>
                                                    <div class="delaisIntervention1">Intervention sous 48 heures</div>
                                                    
                                                </ul>
                                                <div class="pricing-footer mbr-section-btn"><a href="contact-maintenance.php?service=basique" class="btn btn-primary display-4">Choisir ce forfait</a></div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                            <div class="price-item text-center">
                                                <div class="test">
                                                    <h4 class="title mbr-fonts-style mbr-light display-5">
                                                        <strong>
                                                            <a href="maintenance.php">Optimise</a>
                                                        </strong>
                                                    </h4>
                                                </div>
                                                <div class="price-tage">
                                                    <h3 class="mbr-fonts-style costs mbr-light display-2">55€</h3>
                                                    <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                                </div>
                                                <ul class="table-content mbr-fonts-style display-7">
                                                        
                                                        <li class="option divMaintenance2">Maintenance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 255, 255);"></span> </li>
                                                        <div class="maintenance2">1 à 2 heures de maintenance par mois</div>
                                                        
                                                        <li>Mise à jour de WordPress, Prestashop ou Mobirise, des modules et des plugins <span class="mobi-mbri mobi-mbri-success mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                        
                                                        <li class="divSauvegardeSite2">Sauvegarde de votre site<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                        <div class="sauvegardeSite2">2 Sauvegardes de votre site par semaine</div>
                                                        
                                                        <li class="divSauvegardeBDD2">Sauvegarde de votre base de donnée&nbsp;<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>  
                                                        <div class="sauvegardeBDD2">2 Sauvegardes de votre base de données par semaine</div>
                                                        
                                                        <li class="divDelaisIntervention2">Délais assistance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 138, 115);"></span></li>
                                                        <div class="delaisIntervention2">Intervention sous 48 heures</div>
                                                        
                                                    </ul>
                                                <div class="pricing-footer mbr-section-btn"><a href="contact-maintenance.php?service=optimise" class="btn btn-primary display-4">Choisir ce forfait</a></div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                            <div class="price-item text-center">
                                                <div class="test">
                                                    <h4 class="title mbr-fonts-style mbr-light display-5">
                                                        <strong>
                                                            <a href="maintenance.php">Confort</a>
                                                        </strong>
                                                    </h4>
                                                </div>
                                                <div class="price-tage">
                                                    <h3 class="mbr-fonts-style costs mbr-light display-2">100€</h3>
                                                    <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                                </div>
                                                <ul class="table-content mbr-fonts-style display-7">
                                                    
                                                    <li class="option divMaintenance1">Maintenance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 255, 255);"></span> </li>
                                                    <div class="maintenance1">2 à 4 heures de maintenance par mois</div>
                                                    
                                                    <li>Mise à jour de WordPress, Prestashop ou Mobirise, des modules et des plugins <span class="mobi-mbri mobi-mbri-success mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                    
                                                    <li class="divSauvegardeSite3">Sauvegarde de votre site<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                    <div class="sauvegardeSite3">2 Sauvegardes de votre site par jour</div>
                                                    
                                                    <li class="divSauvegardeBDD3">Sauvegarde de votre base de donnée&nbsp;<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>  
                                                    <div class="sauvegardeBDD3">2 Sauvegardes de votre base de données par jour</div>
                                                    
                                                    <li class="divDelaisIntervention3">Délais assistance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 138, 115);"></span></li>
                                                    <div class="delaisIntervention3">Intervention sous 24 heures</div>
                                                                
                                                </ul>
                                                <div class="pricing-footer mbr-section-btn"><a href="contact-maintenance.php?service=confort" class="btn btn-primary display-4">Choisir ce forfait</a></div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                            <div class="price-item text-center">
                                                <div class="test">
                                                    <h4 class="title mbr-fonts-style mbr-light display-5">
                                                        <strong>
                                                            <a href="maintenance.php">Sérénité</a>
                                                        </strong>
                                                    </h4>
                                                </div>
                                                    <div class="price-tage">
                                                        <h3 class="mbr-fonts-style costs display-2">200€</h3>
                                                        <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                                    </div>
                                                    <ul class="table-content mbr-fonts-style display-7">
                                                    
                                                        <li class="option divMaintenance4">Maintenance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 255, 255);"></span> </li>
                                                        <div class="maintenance4">4 à 7 heures de maintenance par mois</div>
                                                        
                                                        <li>Mise à jour de WordPress, Prestashop ou Mobirise, des modules et des plugins <span class="mobi-mbri mobi-mbri-success mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                        
                                                        <li class="divSauvegardeSite4">Sauvegarde de votre site<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                        <div class="sauvegardeSite4">2 Sauvegardes de votre site par jour sur un serveur externe</div>
                                                        
                                                        <li class="divSauvegardeBDD4">Sauvegarde de votre base de donnée&nbsp;<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>  
                                                        <div class="sauvegardeBDD4">2 Sauvegardes de votre base de données par jour sur un serveur externe</div>
                                                        
                                                        <li class="divDelaisIntervention4">Délais assistance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 138, 115);"></span></li>
                                                        <div class="delaisIntervention4">Intervention sous 24 heures</div>
                                                    
                                                    </ul>

                                                    <div class="pricing-footer mbr-section-btn"><a href="contact-maintenance.php?service=serenite" class="btn btn-primary display-4">Choisir ce forfait</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>';
                }else{
                    echo '<div id="tab1" class="tab-pane in active" role="tabpanel">
                        <section class="extPricingTables" group="Additional Blocks">

                            <div class="container">
                                <div class="media-container-row">
                                    <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                        <div class="price-item text-center">
                                            <div class="test">
                                                <h4 class="title mbr-fonts-style mbr-light display-5">
                                                    <strong>
                                                        <a href="landing-page.php">Landing Page</a>
                                                    </strong>
                                                </h4>
                                            </div>
                                            <div class="price-tage">
                                                <h3 class="mbr-fonts-style costs mbr-light display-2">55€</h3>
                                                <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                            </div>
                                            <ul class="table-content mbr-fonts-style display-7">
                                                <li>Site internet Mobirise</li>
                                                <li>Fiche Google My Business</li>
                                                <li>Google Analytics</li>
                                                <li>Nom de domaine  e-mails (inclus)</li>
                                                <li>Hébergement  maintenance (inclus)</li>
                                            </ul>
                                            <div class="pricing-footer mbr-section-btn"><a href="devis.php?site=landingPage&service=location" class="btn btn-primary display-4">Devis gratuit</a></div>
                                        </div>
                                    </div>
                    
                                    <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                        <div class="price-item text-center">
                                            <div class="test">
                                                <h4 class="title mbr-fonts-style mbr-light display-5">
                                                    <strong>
                                                        <a href="site-vitrine.php">Vitrine</a>
                                                    </strong>
                                                </h4>
                                            </div>
                                            <div class="price-tage">
                                                <h3 class="mbr-fonts-style costs mbr-light display-2">70€</h3>
                                                <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                            </div>
                                            <ul class="table-content mbr-fonts-style display-7">
                                                <li>Site internet WordPress</li>
                                                <li>Fiche Google My Business</li>
                                                <li>Google Analytics</li>
                                                <li>Nom de domaine  e-mails (inclus)</li>
                                                <li>Hébergement  maintenance (inclus)</li>
                                            </ul>
                                            <div class="pricing-footer mbr-section-btn">
                                                <a href="devis.php?site=siteVitrine&service=location" class="btn btn-primary display-4">Devis gratuit</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                        <div class="price-item text-center">
                                            <div class="test">
                                                <h4 class="title mbr-fonts-style mbr-light display-5">
                                                    <strong>
                                                        <a href="site-e-commerce.php">E-Commerce</a>
                                                    </strong>
                                                </h4>
                                            </div>
                                            <div class="price-tage">
                                                <h3 class="mbr-fonts-style costs mbr-light display-2">85€</h3>
                                                <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                            </div>
                                            <ul class="table-content mbr-fonts-style display-7">
                                                <li>Site internet Prestashop</li>
                                                <li>Fiche Google My Business</li>
                                                <li>Google Analytics</li>
                                                <li>Nom de domaine  e-mails (inclus)</li>
                                                <li>Hébergement  maintenance (inclus)</li>
                                            </ul>
                                            <div class="pricing-footer mbr-section-btn">
                                                <a href="devis.php?site=siteECommerce&service=location" class="btn btn-primary display-4">Devis gratuit</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>';
                } 
            ?>
            <!-- maintenance -->

            <!-- achat -->
            <div id="tab2" class="tab-pane" role="tabpanel">    
                <section class="extPricingTables" group="Additional Blocks">
                    <div class="container">
                        <div class="media-container-row">
                            <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                <div class="price-item text-center">
                                    <div class="test">
                                        <h4 class="title mbr-fonts-style mbr-light display-5">
                                            <strong>
                                                <a href="landing-page.php">Landing Page</a>
                                            </strong>
                                        </h4>
                                    </div>
                                    <div class="price-tage">
                                        <p class="mbr-fonts-style costs-title display-4">A partir de</p>
                                        <h3 class="mbr-fonts-style costs mbr-light display-2">950€</h3>
                                        <p class="mbr-fonts-style costs-title display-4">/HT</p>
                                    </div>
                                    <ul class="table-content mbr-fonts-style display-7">
                                        <li>Site internet Mobirise</li>
                                        <li>Fiche Google My Business</li>
                                        <li>Google Analytics</li>
                                        <li>Nom de domaine  e-mails (Option)</li>
                                        <li>Hébergement  maintenance (Option)</li>
                                    </ul>
                                    <div class="pricing-footer mbr-section-btn"><a href="devis.php?site=landingPage&service=achat" class="btn btn-primary display-4">Devis gratuit</a></div>
                                </div>
                            </div>
            
                            <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                <div class="price-item text-center">
                                    <div class="test">
                                        <h4 class="title mbr-fonts-style mbr-light display-5">
                                            <strong>
                                                <a href="site-vitrine.php">Vitrine</a>
                                            </strong>
                                        </h4>
                                    </div>
                                    <div class="price-tage">
                                        <p class="mbr-fonts-style costs-title display-4">A partir de</p>
                                        <h3 class="mbr-fonts-style costs mbr-light display-2">1500€</h3>
                                        <p class="mbr-fonts-style costs-title display-4">/HT</p>
                                    </div>
                                    <ul class="table-content mbr-fonts-style display-7">
                                        <li>Site internet WordPress</li>
                                        <li>Fiche Google My Business</li>
                                        <li>Google Analytics</li>
                                        <li>Nom de domaine  e-mails (Option)</li>
                                        <li>Hébergement  maintenance (Option)</li>
                                    </ul>
                                    <div class="pricing-footer mbr-section-btn"><a href="devis.php?site=siteVitrine&service=achat" class="btn btn-primary display-4">Devis gratuit</a></div>
                                </div>
                            </div>

                            <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                <div class="price-item text-center">
                                    <div class="test">
                                        <h4 class="title mbr-fonts-style mbr-light display-5">
                                            <strong>
                                                <a href="site-e-commerce.php">E-Commerce</a>
                                            </strong>
                                        </h4>
                                    </div>
                                    <div class="price-tage">
                                        <p class="mbr-fonts-style costs-title display-4">A partir de</p>
                                        <h3 class="mbr-fonts-style costs mbr-light display-2">2000€</h3>
                                        <p class="mbr-fonts-style costs-title display-4">/HT</p>
                                    </div>
                                    <ul class="table-content mbr-fonts-style display-7">
                                        <li>Site internet Prestashop</li>
                                        <li>Fiche Google My Business</li>
                                        <li>Google Analytics</li>
                                        <li>Nom de domaine  e-mails (Option)</li>
                                        <li>Hébergement  maintenance (Option)</li>
                                    </ul>
                                    <div class="pricing-footer mbr-section-btn"><a href="devis.php?site=siteECommerce&service=achat" class="btn btn-primary display-4">Devis gratuit</a></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- location -->
            <?php 
                if (isset($_GET['service']) and $_GET['service'] == "maintenance") { 
                    echo '<div id="tab3" class="tab-pane" role="tabpanel">
                        <section class="extPricingTables" group="Additional Blocks">

                            <div class="container">
                                <div class="media-container-row">
                                    <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                        <div class="price-item text-center">
                                            <div class="test">
                                                <h4 class="title mbr-fonts-style mbr-light display-5">
                                                    <strong>
                                                        <a href="landing-page.php">Landing Page</a>
                                                    </strong>
                                                </h4>
                                            </div>
                                            <div class="price-tage">
                                                <h3 class="mbr-fonts-style costs mbr-light display-2">55€</h3>
                                                <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                            </div>
                                            <ul class="table-content mbr-fonts-style display-7">
                                                <li>Site internet Mobirise</li>
                                                <li>Fiche Google My Business</li>
                                                <li>Google Analytics</li>
                                                <li>Nom de domaine  e-mails (inclus)</li>
                                                <li>Hébergement  maintenance (inclus)</li>
                                            </ul>
                                            <div class="pricing-footer mbr-section-btn"><a href="devis.php?site=landingPage&service=location" class="btn btn-primary display-4">Devis gratuit</a></div>
                                        </div>
                                    </div>
                    
                                    <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                        <div class="price-item text-center">
                                            <div class="test">
                                                <h4 class="title mbr-fonts-style mbr-light display-5">
                                                    <strong>
                                                        <a href="site-vitrine.php">Vitrine</a>
                                                    </strong>
                                                </h4>
                                            </div>
                                            <div class="price-tage">
                                                <h3 class="mbr-fonts-style costs mbr-light display-2">70€</h3>
                                                <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                            </div>
                                            <ul class="table-content mbr-fonts-style display-7">
                                                <li>Site internet WordPress</li>
                                                <li>Fiche Google My Business</li>
                                                <li>Google Analytics</li>
                                                <li>Nom de domaine  e-mails (inclus)</li>
                                                <li>Hébergement  maintenance (inclus)</li>
                                            </ul>
                                            <div class="pricing-footer mbr-section-btn">
                                                <a href="devis.php?site=siteVitrine&service=location" class="btn btn-primary display-4">Devis gratuit</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                        <div class="price-item text-center">
                                            <div class="test">
                                                <h4 class="title mbr-fonts-style mbr-light display-5">
                                                    <strong>
                                                        <a href="site-e-commerce.php">E-Commerce</a>
                                                    </strong>
                                                </h4>
                                            </div>
                                            <div class="price-tage">
                                                <h3 class="mbr-fonts-style costs mbr-light display-2">85€</h3>
                                                <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                            </div>
                                            <ul class="table-content mbr-fonts-style display-7">
                                                <li>Site internet Prestashop</li>
                                                <li>Fiche Google My Business</li>
                                                <li>Google Analytics</li>
                                                <li>Nom de domaine  e-mails (inclus)</li>
                                                <li>Hébergement  maintenance (inclus)</li>
                                            </ul>
                                            <div class="pricing-footer mbr-section-btn">
                                                <a href="devis.php?site=siteECommerce&service=location" class="btn btn-primary display-4">Devis gratuit</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>';
                }else{
                    echo'<div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="row justify-content-center">
                            <section class="extPricingTables" group="Additional Blocks">
                                <div class="container">
                                    <div class="media-container-row">
                                        <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                            <div class="price-item text-center">
                                                <div class="test">
                                                    <h4 class="title mbr-fonts-style mbr-light display-5">
                                                        <strong>
                                                            <a href="maintenance.php">Basique</a>
                                                        </strong>
                                                    </h4>
                                                </div>
                                                <div class="price-tage">
                                                    <h3 class="mbr-fonts-style costs mbr-light display-2">35€</h3>
                                                    <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                                </div>
                                                <ul class="table-content mbr-fonts-style display-7">
                                                    
                                                    <li class="option divMaintenance1">Maintenance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 255, 255);"></span> </li>
                                                    <div class="maintenance1">1 heure de maintenance par mois</div>
                                                    
                                                    <li>Mise à jour de WordPress, Prestashop ou Mobirise, des modules et des plugins <span class="mobi-mbri mobi-mbri-success mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                    
                                                    <li class="divSauvegardeSite1">Sauvegarde de votre site<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                    <div class="sauvegardeSite1">2 Sauvegardes de votre site par mois</div>
                                                    
                                                    <li class="divSauvegardeBDD1">Sauvegarde de votre base de donnée&nbsp;<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>  
                                                    <div class="sauvegardeBDD1">2 Sauvegardes de votre base de données par mois</div>
                                                    
                                                    <li class="divDelaisIntervention1">Délais assistance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 138, 115);"></span></li>
                                                    <div class="delaisIntervention1">Intervention sous 48 heures</div>
                                                    
                                                </ul>
                                                <div class="pricing-footer mbr-section-btn"><a href="contact-maintenance.php?service=basique" class="btn btn-primary display-4">Choisir ce forfait</a></div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                            <div class="price-item text-center">
                                                <div class="test">
                                                    <h4 class="title mbr-fonts-style mbr-light display-5">
                                                        <strong>
                                                            <a href="maintenance.php">Optimise</a>
                                                        </strong>
                                                    </h4>
                                                </div>
                                                <div class="price-tage">
                                                    <h3 class="mbr-fonts-style costs mbr-light display-2">55€</h3>
                                                    <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                                </div>
                                                <ul class="table-content mbr-fonts-style display-7">
                                                        
                                                        <li class="option divMaintenance2">Maintenance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 255, 255);"></span> </li>
                                                        <div class="maintenance2">1 à 2 heures de maintenance par mois</div>
                                                        
                                                        <li>Mise à jour de WordPress, Prestashop ou Mobirise, des modules et des plugins <span class="mobi-mbri mobi-mbri-success mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                        
                                                        <li class="divSauvegardeSite2">Sauvegarde de votre site<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                        <div class="sauvegardeSite2">2 Sauvegardes de votre site par semaine</div>
                                                        
                                                        <li class="divSauvegardeBDD2">Sauvegarde de votre base de donnée&nbsp;<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>  
                                                        <div class="sauvegardeBDD2">2 Sauvegardes de votre base de données par semaine</div>
                                                        
                                                        <li class="divDelaisIntervention2">Délais assistance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 138, 115);"></span></li>
                                                        <div class="delaisIntervention2">Intervention sous 48 heures</div>
                                                        
                                                    </ul>
                                                <div class="pricing-footer mbr-section-btn"><a href="contact-maintenance.php?service=optimise" class="btn btn-primary display-4">Choisir ce forfait</a></div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                            <div class="price-item text-center">
                                                <div class="test">
                                                    <h4 class="title mbr-fonts-style mbr-light display-5">
                                                        <strong>
                                                            <a href="maintenance.php">Confort</a>
                                                        </strong>
                                                    </h4>
                                                </div>
                                                <div class="price-tage">
                                                    <h3 class="mbr-fonts-style costs mbr-light display-2">100€</h3>
                                                    <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                                </div>
                                                <ul class="table-content mbr-fonts-style display-7">
                                                    
                                                    <li class="option divMaintenance1">Maintenance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 255, 255);"></span> </li>
                                                    <div class="maintenance1">2 à 4 heures de maintenance par mois</div>
                                                    
                                                    <li>Mise à jour de WordPress, Prestashop ou Mobirise, des modules et des plugins <span class="mobi-mbri mobi-mbri-success mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                    
                                                    <li class="divSauvegardeSite3">Sauvegarde de votre site<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                    <div class="sauvegardeSite3">2 Sauvegardes de votre site par jour</div>
                                                    
                                                    <li class="divSauvegardeBDD3">Sauvegarde de votre base de donnée&nbsp;<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>  
                                                    <div class="sauvegardeBDD3">2 Sauvegardes de votre base de données par jour</div>
                                                    
                                                    <li class="divDelaisIntervention3">Délais assistance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 138, 115);"></span></li>
                                                    <div class="delaisIntervention3">Intervention sous 24 heures</div>
                                                                
                                                </ul>
                                                <div class="pricing-footer mbr-section-btn"><a href="contact-maintenance.php?service=confort" class="btn btn-primary display-4">Choisir ce forfait</a></div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-5 justify-content-center col-lg-3">
                                            <div class="price-item text-center">
                                                <div class="test">
                                                    <h4 class="title mbr-fonts-style mbr-light display-5">
                                                        <strong>
                                                            <a href="maintenance.php">Sérénité</a>
                                                        </strong>
                                                    </h4>
                                                </div>
                                                    <div class="price-tage">
                                                        <h3 class="mbr-fonts-style costs display-2">200€</h3>
                                                        <p class="mbr-fonts-style costs-title display-4">/Mois</p>
                                                    </div>
                                                    <ul class="table-content mbr-fonts-style display-7">
                                                    
                                                        <li class="option divMaintenance4">Maintenance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 255, 255);"></span> </li>
                                                        <div class="maintenance4">4 à 7 heures de maintenance par mois</div>
                                                        
                                                        <li>Mise à jour de WordPress, Prestashop ou Mobirise, des modules et des plugins <span class="mobi-mbri mobi-mbri-success mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                        
                                                        <li class="divSauvegardeSite4">Sauvegarde de votre site<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>
                                                        <div class="sauvegardeSite4">2 Sauvegardes de votre site par jour sur un serveur externe</div>
                                                        
                                                        <li class="divSauvegardeBDD4">Sauvegarde de votre base de donnée&nbsp;<span class="icon54-v4-information mbr-iconfont pl-2" style="font-size: 19px; color: rgb(255, 138, 115);"></span></li>  
                                                        <div class="sauvegardeBDD4">2 Sauvegardes de votre base de données par jour sur un serveur externe</div>
                                                        
                                                        <li class="divDelaisIntervention4">Délais assistance<span class="icon54-v4-information mbr-iconfont pl-2" style="color: rgb(255, 138, 115);"></span></li>
                                                        <div class="delaisIntervention4">Intervention sous 24 heures</div>
                                                    
                                                    </ul>

                                                    <div class="pricing-footer mbr-section-btn"><a href="contact-maintenance.php?service=serenite" class="btn btn-primary display-4">Choisir ce forfait</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>';
                } 
            ?>
            <!-- maintenance -->
        </div>
    </div>
</section>