$(document).ready(function(){
  $(".btn-del").click(function(){
  	$(".t").val();
    $(".confirm-popup-wrapper").show();
    $(".confirm-popup").show();
  });

  $(".confirm-popup-wrapper").click(function(){
    $(".confirm-popup-wrapper").hide();
    $(".confirm-popup").hide();
  });

  $(".btn-cancel").click(function(){
    $(".confirm-popup-wrapper").hide();
    $(".confirm-popup").hide();
  });
});