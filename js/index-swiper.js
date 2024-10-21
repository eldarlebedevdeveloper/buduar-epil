$(document).ready(function () {
  // const swiperHome = new Swiper('.slider_home', {
  //   direction: 'horizontal', // Замість mode: 'vertical'
  //   slidesPerView: 1,
  //   loop: true,
  //   speed: 1000,
  //   navigation: {
  //     nextEl: '.slider_home .swiper_arrow-next',
  //     prevEl: '.slider_home .swiper_arrow-prev',
  //   },
  //   pagination: {
  //     el: '.swiper-home-pagination',
  //     clickable: true,
  //   },
  // })

  // // Автоматичне перемикання слайдів кожні 4.5 секунди
  // setInterval(() => {
  //   swiperHome.slideNext() // Тепер використовується API Swiper
  // }, 4500)

  setInterval(() => {
    $('.slider_home').find('.swiper_arrow-next').trigger('click')
  }, 4500)

  $('.slider_home').swiper({
    mode: 'vertical',
    slidesPerView: 1,
    nextButton: '.slider_home .swiper_arrow-next',
    prevButton: '.slider_home .swiper_arrow-prev',
    loop: true,
    paginationClickable: true,
    pagination: '.swiper-home-pagination',
    speed: 1000,
  })
})
