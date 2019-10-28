$(document).ready(function(){
  $(".btn-del").click(function(){

    var info = JSON.parse($(this).val());

    $("#show_name").html( info.fname+" "+info.lname );
    $("#show_username").html( info.username );
    $("#show_role").html( info.role );
  	$("#key").val( info.staff_id );

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