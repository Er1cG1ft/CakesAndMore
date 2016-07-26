var main = function() {
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