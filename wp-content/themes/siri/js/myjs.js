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



jQuery(document).ready(function($) {
  // toggle menu bar + footer menu bar
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

// methodology section
  $('.icon__wrapper').mouseenter(function(){
    $(this).children("p").slideDown('slow');
  });

  $('.icon__wrapper').mouseleave(function(){
    $(this).children("p").slideUp('slow');
  });

// Product page: todas las clases/Alle Kurze/All courses
  $contenu = $('.product .summary .product_meta');
  $contenu.html($contenu.html()
    .replace("span", "button")
    .replace("Category:","")
  ).children().addClass('button')
  .prop('text-align', 'center');

  if ($('.product .summary .product_meta .posted_in:contains("EN")').length > 0) {
    
    let text = $contenu.html();
    console.log(text);

    $contenu.html(text.replace('EN', 'All courses'));  
    //$contenu.html($contenu.html().replace("Category:",""));
  } 

  if ($('.product .summary .product_meta .posted_in:contains("DE")').length > 0) {
    
    let text = $contenu.html();
    console.log(text);

    $contenu.html(text.replace("DE","Alle Kurse"));
    $contenu.html($contenu.html().replace("Category:",""));
  } 
  
  if ($('.product .summary .product_meta .posted_in:contains("ES")').length > 0) {
  
    let text = $contenu.html();
    console.log(text);

    $contenu.html(text.replace("ES","todas las clases"));
    $contenu.html($contenu.html().replace("Category:",""));
  } 

});
