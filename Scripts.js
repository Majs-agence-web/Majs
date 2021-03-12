// Script ( Page d'accueil )  
let collection = document.getElementsByClassName('nosSite');
document.addEventListener('DOMContentLoaded', function() {
    var tailleFenetre = window.innerWidth

    if(tailleFenetre >= 1300){
        for (item of collection){
            item.classList.add("col-lg-4");
        }
    }else if( (tailleFenetre < 1300) && (tailleFenetre >= 1200)  ){
        for (item of collection){
            item.classList.add("col-lg-3");
        }
    }else if ( (tailleFenetre < 1200) && (tailleFenetre >= 1100) ){
        for (item of collection){
            item.classList.add("col-lg-4");
        }
    }else if( (tailleFenetre < 1100) && (tailleFenetre >= 992) ){
        for (item of collection){
            item.classList.add("col-lg-3");
        }
    }else if( (tailleFenetre < 992) && (tailleFenetre >= 768) ){
        for (item of collection){
            item.classList.add("col-md-10");
        }
    }else if( (tailleFenetre < 768) && (tailleFenetre >= 425) ){
        for (item of collection){
            item.classList.add("col-md-8");
        }
    }else{
        for (item of collection){
            item.classList.add("col-12");
        }
    }
});
window.addEventListener('resize', ()=>{  
    var tailleFenetre = window.innerWidth

    /* item.classList.remove("col-lg-4"); */
    if(tailleFenetre >= 1300){
        for (item of collection){

            item.classList.remove("col-lg-3")

            item.classList.add("col-lg-4");
        }
    }else if( (tailleFenetre < 1300) && (tailleFenetre >= 1200)  ){
        for (item of collection){

            item.classList.remove("col-lg-4")

            item.classList.add("col-lg-3");
        }
    }else if ( (tailleFenetre < 1200) && (tailleFenetre >= 1100) ){
        for (item of collection){

            item.classList.remove("col-lg-3")

            item.classList.add("col-lg-4");
        }
    }else if( (tailleFenetre < 1100) && (tailleFenetre >= 992) ){
        for (item of collection){

            item.classList.remove("col-lg-4")
            item.classList.remove("col-md-8")

            item.classList.add("col-lg-3");
        }
    }else if( (tailleFenetre < 992) && (tailleFenetre >= 768) ){
        for (item of collection){

            item.classList.remove("col-lg-3")
            item.classList.remove("col-md-10")

            item.classList.add("col-md-8");
        }
    }else if( (tailleFenetre < 768) && (tailleFenetre >= 425) ){
        for (item of collection){

            item.classList.remove("col-md-8")
            item.classList.remove("col-12")

            item.classList.add("col-md-10");
        }
    }else{
        for (item of collection){

            item.classList.remove("col-md-10")

            item.classList.add("col-12");
        }
    }
});
/* Fin */

/* Script Nos Service ( Page d'accueil )*/
let collection2 = document.getElementsByClassName('nosService');
document.addEventListener('DOMContentLoaded', function() {
    var tailleFenetre = window.innerWidth
    
    if( tailleFenetre >= 1200 ){

        for (item of collection2){

            item.classList.add("col-lg-3");
   
        }

    }else if ( (tailleFenetre < 1200) && (tailleFenetre >= 992)  ){

        for (item of collection2){

            item.classList.add("col-lg-6");
   
        }

    }
});
window.addEventListener('resize', ()=>{  
    var tailleFenetre = window.innerWidth

    if( tailleFenetre >= 1200 ){

        for (item of collection2){

            item.classList.remove("col-lg-6")

            item.classList.add("col-lg-3");
   
        }

    }else if ( (tailleFenetre < 1200) && (tailleFenetre >= 992)  ){

        for (item of collection2){

            item.classList.remove("col-lg-3")

            item.classList.add("col-lg-6");
   
        }

    }

});
/* Fin */

/*  Script Footer ( Centrage des élément )*/
let collection3 = document.getElementsByClassName('footerCentrage');
document.addEventListener('DOMContentLoaded', function() {
    var tailleFenetre = window.innerWidth

    if( tailleFenetre < 992 ){

        for (item of collection3){

            item.classList.add("d-flex");
            item.classList.add("justify-content-center");
        }

    }

});
window.addEventListener('resize', ()=>{  
    var tailleFenetre = window.innerWidth

    /* item.classList.remove("col-lg-4"); */
    if(tailleFenetre < 992){
        for (item of collection3){

            item.classList.add("d-flex");
            item.classList.add("justify-content-center");
        }
    }else{
        for (item of collection3){

            item.classList.remove("d-flex");
            item.classList.remove("justify-content-center");
        }
    }
});
/* Fin  */

/* Script barre de navigation (Header) */
let collection4 = document.getElementsByClassName('ScriptNavigation');
document.addEventListener('DOMContentLoaded', function() {
    var tailleFenetre = window.innerWidth

    if( tailleFenetre > 1200 ){

        for (item of collection4){

            item.classList.add("NavigationScript1200Plus");
        }

    }else{

        for (item of collection4){

            item.classList.add("NavigationScript1200Moin");
        }
    }

});
window.addEventListener('resize', ()=>{  
    var tailleFenetre = window.innerWidth

    /* item.classList.remove("col-lg-4"); */
    if(tailleFenetre > 1150){
        for (item of collection4){

            item.classList.remove("NavigationScript1200Moin");

            item.classList.add("NavigationScript1200Plus");
        }
    }else{
        for (item of collection4){

            item.classList.remove("NavigationScript1200Plus");

            item.classList.add("NavigationScript1200Moin");
        }
    }
});
/* Fin */