$(document).ready(function() {
  pageLoader();
})

function pageLoader() {
  $("#containerContent").load("ancientWar.php");
  $("#aw").click(function() {
    $("#containerContent").load("ancientWar.php");
  });
  $("#cc").click(function() {
    $("#containerContent").load("candyCatcher.php");
  });
  $("#panel").click(function() {
    $("#containerContent").load("adminPanel.php");
  });
}
