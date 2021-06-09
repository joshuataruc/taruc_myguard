 $(window).on("scroll", function(){
 	if ($(window).scrollTop()) {
               // $('nav').addClass('black');
               $('nav').addClass('white');
           }
           else{
               // $('nav').removeClass('black');
               $('nav').removeClass('white');
           }
});
// form
 var $contform = $('.cont-form');

 $contform.waypoint(function(){

 	$contform.addClass('animated');
 	$contform.addClass('slideInRight');
 },{ offset:'90%' });
//end form
//contak text
 var $contackdiv = $('.contack-div');
$contackdiv.waypoint(function(){
	$contackdiv.addClass('animated');
	$contackdiv.addClass('slideInLeft');
},{offset:'90%'});
// end contak text
// video
var $videoPowtoon = $('.video-powtoon');
$videoPowtoon.waypoint(function(){
	$videoPowtoon.addClass('animated');
	$videoPowtoon.addClass('flipInY');
}, {offset:'90%'});
// end video

var quickIcons1 = $('.quick-icon-1');
quickIcons1.waypoint(function(){
	quickIcons1.addClass('fadeInUp');
}, {offset:'90%'});

var quickIcons2 = $('.quick-icons-2');
quickIcons2.waypoint(function(){
  quickIcons2.addClass('fadeInUp');
}, {offset:'90%'});


// var catchTitle = $('.catch-title');
// catchTitle.waypoint(function(){
// 	catchTitle.addClass('animated');
// 	catchTitle.addClass('fadeInDownBig');
// });

