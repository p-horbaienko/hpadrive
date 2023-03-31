// formatting phone contacts
function contactsFormatUp(elems) {
  $(elems).each(function(){

    var newWord = "";
    var link = $(this).attr('href');
    link = link.slice(link.indexOf('+'));
    
    for (var i = 0; i < link.length; i++) {
      newWord += link[i];
      if (i == 2 || i == 5 || i == 8 || i == 10){
        newWord += " ";
      }
    }

    $(this).find('span:last-child').text(newWord);
  });
}

function contactsFormat(elems) {
    $(elems).each(function(){

      var newWord = "";
      var link = $(this).attr('href');
      link = link.slice(link.indexOf('+'));
      
      for (var i = 0; i < link.length; i++) {
        newWord += link[i];
        if (i == 2 || i == 5 || i == 8 || i == 10){
          newWord += " ";
        }
      }
  
      $(this).text(newWord);
    });
}


$(document).ready(function () {
  //Information page, add arrows
  let info_li = $('.d-info ul li');
  info_li.each(function () {
    $(this).html('<i class="fa-solid fa-arrow-right"></i> ' + $(this).html());
  });

  //Passing to page and scroll to anchor
  // Read the cookie and if it's defined scroll to id
  var scroll = Cookies.get('scroll');
  if (scroll) {
    scrollToID(scroll, 1000);
    Cookies.remove('scroll');
  }

  // Handle event onclick, setting the cookie when the href != #
  $('nav a').click(function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var href = $(this).attr('href');

    if (href === '#') {
      scrollToID(id, 1000);
    } else {
      Cookies.set('scroll', id);
      window.location.href = href;
    }
  });

  // scrollToID function
  function scrollToID(id, speed) {
    var offSet = 70;
    var obj = $('#' + id);
    if (obj.length) {
      var offs = obj.offset();
      var targetOffset = offs.top - offSet;
      $('html,body').animate({ scrollTop: targetOffset }, speed);
    }
  }


  // Arrow move to top
  var moveToTop = $('#move-to-top');

  $(window).scroll(function () {
    if ($(this).scrollTop() - 200 > 0) {
      moveToTop.stop().slideDown('fast'); // show the button
    } else {
      moveToTop.stop().slideUp('fast'); // hide the button
    }
  });

  moveToTop.on("click", function () {
    $("html, body").animate({
      scrollTop: 0
    }, 200);
  });


  // Animation
  $('.div-capital').animate({ "right": 0 }, 2000); 
  
  $('.div-contacts-main a').animate({"opacity":"1"},2000);
  $('.img-map').animate({ "opacity": "1" }, 300);
  $('.img-map').animate({ "top": "0" }, 1500);
  $('.h-capital, .h-country').animate({ "opacity": "1" }, 4000);
  $('.d-info i').animate({ 'opacity': '1' }, 2500);

  contactsFormatUp($('.div-contacts-main a'));
  contactsFormat($('.f-contacts a'));
  
  $('nav a').on('click',function(){
    $('.hamburger').trigger('click');
  });

  if( $(window).width() > 768 ) {
     
  }


});


// GSAP animate counters
gsap.registerPlugin(ScrollTrigger);

const numbers = $('.main-about');

var tl = gsap.timeline({
  scrollTrigger: {
    trigger: numbers,
    start: 'top center',
    toggleActions: 'play none none none',
  },
});

gsap.utils.toArray('.ma-counter').forEach(function (el) {
  var target = { val: 10 };
  tl.to(target, {
    val: el.getAttribute('data-value'),
    duration: 2,
    onUpdate: function () {
      el.innerText = target.val.toFixed(0);
    },
  });
});


