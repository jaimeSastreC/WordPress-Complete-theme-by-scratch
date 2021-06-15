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
  $linkCourses = $('.product .summary .product_meta');
  $buyButton = $('.single_add_to_cart_button');
  $buyButton1 = $('.add_to_cart_button');

  $linkCourses.html($linkCourses.html()
    .replace("span", "button")
    ).children().addClass('button')
    .prop('text-align', 'center');

  let textLink = $linkCourses.html();
  let textButton = $buyButton1.html();
  console.log(textLink);
  console.log(textButton);

  if (english($)) {
    $linkCourses.html(textLink.replace('EN', 'All courses'));  
    $buyButton.html("buy");  
    $buyButton1.html("buy");  
  } 
  else if (german($)) {
    $linkCourses.html(textLink.replace("DE","Alle Kurse"));
    $buyButton.html("kaufen");
    $buyButton1.html("kaufen");
  } 
  else if (spanish($)) {
    $linkCourses.html(textLink.replace("ES","todas las clases"));
    $buyButton.html("comprar");
    $buyButton1.html("comprar");
  } 

  $linkCourses.html($linkCourses.html().replace("Category:",""));
});


// factorised : check language 
function english($) {
  return $('.product .summary .product_meta .posted_in:contains("EN")').length > 0;
}

function german($) {
  return $('.product .summary .product_meta .posted_in:contains("DE")').length > 0;
}

function spanish($) {
  return $('.product .summary .product_meta .posted_in:contains("ES")').length > 0;
}

