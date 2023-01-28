$(document).ready(function(){
  $("#prvi").html("ovo je izmenjena vred");
  $("#dugme1").click(function(){
    $("#prvi").css({"background-color":"red", "color":"white"});
  });
  
});

function f1(){
  $(".mojaKlasa").css({"background-color":"blue", "color":"white"});
}