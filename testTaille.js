let collection = document.getElementsByClassName('nosSite');

document.addEventListener('DOMContentLoaded', function() {
    var tailleFenetre = window.innerWidth
    console.log(tailleFenetre)

    if(tailleFenetre >= 1300){
        for (item of collection){
            item.classList.add("col-lg-4");
            console.log("1300")
        }
    }else if( (tailleFenetre < 1300) && (tailleFenetre >= 1200)  ){
        for (item of collection){
            item.classList.add("col-lg-3");
            console.log("1200-1300")
        }
    }else if ( (tailleFenetre < 1200) && (tailleFenetre >= 1100) ){
        for (item of collection){
            item.classList.add("col-lg-4");
            console.log("1100-1200")
        }
    }else if( (tailleFenetre < 1100) && (tailleFenetre >= 992) ){
        for (item of collection){
            item.classList.add("col-lg-3");
            console.log("1100-992")
        }
    }else if( (tailleFenetre < 992) && (tailleFenetre >= 768) ){
        for (item of collection){
            item.classList.add("col-md-10");
            console.log("992-768")
        }
    }else if( (tailleFenetre < 768) && (tailleFenetre >= 425) ){
        for (item of collection){
            item.classList.add("col-md-8");
            console.log("768-425")
        }
    }else{
        for (item of collection){
            item.classList.add("col-12");
            console.log("425")
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
            
            console.log(tailleFenetre)
            console.log("1300")
            console.log(item)
        }
    }else if( (tailleFenetre < 1300) && (tailleFenetre >= 1200)  ){
        for (item of collection){

            item.classList.remove("col-lg-4")

            item.classList.add("col-lg-3");

            console.log(tailleFenetre)
            console.log("1200-1300")
            console.log(item)
        }
    }else if ( (tailleFenetre < 1200) && (tailleFenetre >= 1100) ){
        for (item of collection){

            item.classList.remove("col-lg-3")

            item.classList.add("col-lg-4");

            console.log(tailleFenetre)
            console.log("1100-1200")
            console.log(item)
        }
    }else if( (tailleFenetre < 1100) && (tailleFenetre >= 992) ){
        for (item of collection){

            item.classList.remove("col-lg-4")
            item.classList.remove("col-md-8")

            item.classList.add("col-lg-3");

            console.log(tailleFenetre)
            console.log("992-1100")
            console.log(item)
        }
    }else if( (tailleFenetre < 992) && (tailleFenetre >= 768) ){
        for (item of collection){

            item.classList.remove("col-lg-3")
            item.classList.remove("col-md-10")

            item.classList.add("col-md-8");

            console.log(tailleFenetre)
            console.log("992-768")
            console.log(item)
        }
    }else if( (tailleFenetre < 768) && (tailleFenetre >= 425) ){
        for (item of collection){

            item.classList.remove("col-md-8")
            item.classList.remove("col-12")

            item.classList.add("col-md-10");

            console.log(tailleFenetre)
            console.log("768-425")
            console.log(item)
        }
    }else{
        for (item of collection){

            item.classList.remove("col-md-10")

            item.classList.add("col-12");

            console.log(tailleFenetre)
            console.log("425")
            console.log(item)
        }
    }
});

let collection2 = document.getElementsByClassName('nosService');

document.addEventListener('DOMContentLoaded', function() {
    var tailleFenetre = window.innerWidth
    console.log(tailleFenetre)

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