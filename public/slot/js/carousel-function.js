$(document).ready(function () {
  $(window).resize(function () {
    if ($(window).width() < 768) {
      $('.carousel').carousel('pause');
    }
  });

  if ($(window).width() < 768) {
    setTimeout(function () {
      $('.carousel').carousel('pause');
    }, 2000);
  }
});