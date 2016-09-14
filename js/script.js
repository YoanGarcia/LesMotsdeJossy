// Navbar //

$('.newsletter').click(function(){
    swal({   
        title: "Newsletter",   
        text: "Tenez-vous au courant",   
        type: "input",   
        showCancelButton: true,   
        closeOnConfirm: false,   
        animation: "slide-from-top",   
        inputPlaceholder: "Write something" 
    }, function(inputValue){   
        if (inputValue === false) return false;      
        if (inputValue === "") {     
            swal.showInputError("le champ ne doit pas être vide");     
            return false   
        }      
        swal("Vous ête bien inscrit", "", "success"); 
    });
});

// $(window).scroll(function() {
//     if ($(".navbar").offset().top > 50) {
//         $('#custom-nav').addClass('affix');
//         $(".navbar-fixed-top").addClass("top-nav-collapse");
//     } else {
//         $('#custom-nav').removeClass('affix');
//         $(".navbar-fixed-top").removeClass("top-nav-collapse");
//     }
// });

// // Smooth scroll //
// $(function() {
//     $('.nav a').bind('click',function(event){
//         var $anchor = $(this);
//         /*
//         if you want to use one of the easing effects:
//         $('html, body').stop().animate({
//             scrollLeft: $($anchor.attr('href')).offset().left
//         }, 1500,'easeInOutExpo');
//          */
//         $('html, body').stop().animate({
//             scrollLeft: $($anchor.attr('href')).offset().left
//         }, 1000);
//         event.preventDefault();
//     });
// });