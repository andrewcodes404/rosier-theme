jQuery( document ).ready( function( $ ) {
// $() will work as an alias for jQuery() inside of this function
//your code goes here

// Drop Down nav on mobile
$(".drop-down-cont").hide();
$("#menu-btn-close").hide();

$("#menu-btn-open").click(function(){

    $(".drop-down-cont").slideDown();
    $("#menu-btn-close").fadeIn();
    $("#menu-btn-open").fadeOut();
    $("footer").fadeOut();
    // $(".drop-down-cont").mouseleave(function() {
    //         $(".drop-down-cont").fadeOut();
    // })
  });

$("#menu-btn-close").click(function(){
  $(".drop-down-cont").slideUp();
  $("#menu-btn-close").fadeOut();
  $("#menu-btn-open").fadeIn();
  $("footer").fadeIn();
});


$(".the-title").hide();

$(".hero-cont").hover(function(){
  $(".the-title", this).slideDown();
}, function(){
  $(".the-title", this).fadeOut('600');
});



});
