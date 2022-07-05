$( document ).ready(function() {
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    //i numeri 0,600,1000 dicono: se la dim è maggiore di 1000 fai vedere 1 items se compreso tra 600 e 1000 fai vedere 1 item (gli item decidi tu quanti farne vedere) 
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
});