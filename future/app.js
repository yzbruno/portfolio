// autoscroll
jQuery(document).ready(function($) {
  $('a[href^="#"]').bind('click.smoothscroll',function (e) {
    e.preventDefault();
    var target = this.hash,
    $target = $(target);

    $('html, body').stop().animate( {
      'scrollTop': $target.offset().top-0
    }, 1000, 'easeOutExpo', function () {
      window.location.hash = target;
    } );
  } );
});

// logo + nav
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 10) {
    $('.brand').fadeOut(500);
    $('.nav').css("background-color", "#f2f2f2");
  } else {
    $('.brand').fadeIn(500);
    $('.nav').css("background-color", "#f2f2f2");
  }
});

// top
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 0) {
    $('.top').fadeIn(200);
  } else {
    $('.top').fadeOut(200);
  }
});

var delayIndex = 3000;
var delayRedirect = 600;

setTimeout(function() {
  $('.load').fadeOut();
}, delayIndex);

function goHome(){
  $('.div-motionblue').animate({
    width: '100%'
  },
  {
    easing: 'easeOutSine',
    duration: 400,
  });

  setTimeout(function() {
    $('.div-motiongray').animate({
      width: '100%'
    },
    {
      easing: 'easeOutSine',
      duration: 400,
      complete: function(){
        window.location.href = "index";
      }
    });
  }, delayRedirect);
}

function openDesign01(){
  $('.div-motionblue').animate({
    width: '100%'
  },
  {
    easing: 'easeOutSine',
    duration: 400,
  });

  setTimeout(function() {
    $('.div-motiongray').animate({
      width: '100%'
    },
    {
      easing: 'easeOutSine',
      duration: 400,
      complete: function(){
        window.location.href = "gol";
      }
    });
  }, delayRedirect);
}
function openDesign02(){
  $('.div-motionblue').animate({
    width: '100%'
  },
  {
    easing: 'easeOutSine',
    duration: 400,
  });

  setTimeout(function() {
    $('.div-motiongray').animate({
      width: '100%'
    },
    {
      easing: 'easeOutSine',
      duration: 400,
      complete: function(){
        window.location.href = "eyetracking";
      }
    });
  }, delayRedirect);
}
