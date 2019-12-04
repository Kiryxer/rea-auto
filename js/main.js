$(function () {

  $('.main-menu__btn').swipe({
    swipeStatus: function (event, phase, direction, distance, duration, fingers) {
      if (phase == "move" && direction == "right") {
        $('.menu').animate({
          left: '0px'
        }, 200);
      }
      if (phase == "move" && direction == "left") {
        $('.menu').animate({
          left: '-310px'
        }, 200);
      }
    }
  });

  $('.menu__btn').on('click', function () {
    $('.menu__list').slideToggle();
  })
});
