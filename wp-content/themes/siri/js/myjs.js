//*************************** Google recaptcha ***************************
function onSubmit(token) {
  document.getElementById("demo-form").submit();
}


/*************************** my code : ********************************/ 


// toggle menu bar
jQuery(document).ready(function() {
    if (jQuery(window).width() < 768) {
        jQuery(".main-header__nav .menu").css("display","none");
    }

    jQuery('.menu-link').click(function(){
        jQuery('.menu').toggle('slow', function(){

        });
    });
});

/* 
jQuery(document).ready(function() {
    jQuery ('.menu-link').click(function(){
        jQuery('.menu').toggle('slow', function(){

        });
    });
}); */