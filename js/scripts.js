$(function(){

	console.log("It's working");

// THIS IS SMOOTH SCROLL

 $('a[href*=#]:not([href=#])').click(function() {
   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
     var target = $(this.hash);
     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
     if (target.length) {
       $('html,body').animate({
         scrollTop: target.offset().top
       }, 600);
       return false;
     }
   }
 });



// THIS IS THE BAR NAV MENU

  $('.fa-bars').on('click', function(){
    $('ul.menu').addClass('flexplicit');
  });

  $('ul.menu li a').on('click', function(){
    $('ul.menu').removeClass('flexplicit');
  });



// WHEN USER RELOADS OR ENTERS SITE 
// RUN A FUNCTION THAT RANDOMLY CHOOSES A COLOR VARIABLE OUT OF AN ARRAY
// THE COLOR CHOSEN WILL BE INSERTED AS A SASS MIXIN
// THE SASS MIXIN WILL BE NAMED $HIGHLIGHT
// $HIGHLIGHT HAS BEEN STORED AS THE COLOUR VALUE THROUGHOUT THE SASS FILE 

var blue = ('41,146,255');

var green = ('39, 174, 96');

var purple = ('142, 68, 173');

var yellow = ('241, 196, 15');

var orange = ('230, 126, 34');

var teal = ('26, 188, 156');

var pink = ('231, 76, 60');

var red = ('192, 57, 43');


// REFRESH THE PAGE TO GET A NEW COLOR

 $('div.greeting a').on('click', function(){
    location.reload();
  });




});














