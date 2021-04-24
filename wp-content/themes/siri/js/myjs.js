//*************************** Google recaptcha ***************************
function onSubmit(token) {
  document.getElementById("demo-form").submit();
}

//************ Global site tag (gtag.js) - Google Analytics ***************************

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8Y1PXNZJEN');


/*************************** my code : ********************************/ 


// toggle menu bar
jQuery(document).ready(function($) {
    if ($(window).width() < 768) {
        $(".main-header__nav .menu").hide();
        $(".footer-container__heading").next().css("display","none");
    }

    if ($(window).width() > 768) {
      $(".icon__wrapper p").hide();
  }
    

    $('.menu-link').click(function(){
        $('.menu').toggle('slow');
        return false;
    });

    $('.footer-container__heading').click(function(){
        $(this).next("div").toggle('slow')
        return false;
    });

    $('.icon__wrapper').mouseenter(function(){
      $(this).children("p").slideDown('slow');
    });

    $('.icon__wrapper').mouseleave(function(){
      $(this).children("p").slideUp('slow');
    });
});
