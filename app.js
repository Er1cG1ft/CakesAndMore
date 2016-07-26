var main = function() {
  $(".title-text").animate({top: '50px', opacity:1}, 3000);
  $("#dets").delay(2000).animate({opacity:1}, 2000);
  $("#stand").delay(2000).animate({opacity:1}, 3000);

  $("#dets").click(function() {
    $("#dets").animate({opacity: "0"},100);
    $("#stand").animate({opacity: "0"},100);
    $("#navmenu").animate({top: "0px"});
  });
  
  $("#close").click(function() {
    $("#navmenu").animate({top: "-300px"});
    $("#dets").animate({opacity: "1"},400);
    $("#stand").animate({opacity: "1"},400);
  });
  
}
 
$(document).ready(main);