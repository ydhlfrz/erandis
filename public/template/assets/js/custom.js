/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

var path = location.pathname.split("/");
var url = location.origin + "/" + path[1];

$("ul.sidebar-menu li a").each(function () {
  if ($(this).attr("href").indexOf(url) !== -1) {
    $(this)
      .parent()
      .addClass("active")
      .parent()
      .parent("li")
      .addClass("active");
  }
});

// dataTables
$(document).ready(function () {
  $("#randistable").DataTable();
});

// Timer
var timeCircles = $(".someTimer").TimeCircles();

// Fade in and fade out are examples of how chaining can be done with TimeCircles
$(".fadeIn").click(function () {
  timeCircles.elements.last().fadeIn();
});
$(".fadeOut").click(function () {
  timeCircles.elements.last().fadeOut();
});

// Start and stop are methods applied on the public TimeCircles instance
$(".startTimer").click(function () {
  $(".someTimer").eq(1).TimeCircles().start();
});
$(".stopTimer").click(function () {
  $(".someTimer").eq(1).TimeCircles().stop();
});
