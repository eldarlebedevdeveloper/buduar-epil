$(document).ready(function () {
  $('#preload').fadeOut()

  $('.order_form .btn_booksy').on('click', function () {
    $('body .booksy-widget-button').trigger('click')
    if ($('popups').show()) {
      $('.popups').fadeOut()
      $('.popups .body_form').hide()
    }

    $('#menu').removeClass('active')
  })

  const forms = document.querySelectorAll('form')

  // Проходимо через всі форми
  forms.forEach(function (form) {
    // Створюємо приховане поле для зберігання токена reCAPTCHA
    const recaptchaInput = document.createElement('input')
    recaptchaInput.setAttribute('type', 'hidden')
    recaptchaInput.setAttribute('name', 'recaptcha_response')
    recaptchaInput.setAttribute('id', 'recaptchaResponse')
    form.appendChild(recaptchaInput) // Додаємо його до форми
  })
  $("form input[name='phone']").mask('+4899-99-99-999')

  //E-mail Ajax Send
  $('form .btn').on('click', function () {
    const button = $(this) // Зберігаємо контекст кнопки

    // grecaptcha.ready(function() {
    //     grecaptcha.execute('6LfERicqAAAAAMNFpWnXO-zeBctBL8uuM0rARgcl',{action: 'submit'}).then(function(token) {
    //     button.closest('form').find('input[name="recaptcha_response"]').val(token);

    var g = false
    if (button.hasClass('get_gaid_ua')) {
      var g = 'ua'
    } else if (button.hasClass('get_gaid_pl')) {
      g = 'pl'
    }
    if (!button.closest('form').find('.checkbox input').is(':checked')) {
      button.closest('form').find('.checkbox').addClass('required')
      console.log(1)
      return false
    } else if (button.closest('form').find('input[name="name"]').val() == '') {
      button
        .closest('form')
        .find('input[name="name"]')
        .css({ 'border-color': 'red' })
    } else if (button.closest('form').find('input[name="phone"]').val() == '') {
      button
        .closest('form')
        .find('input[name="phone"]')
        .css({ 'border-color': 'red' })
    } else {
      button
        .closest('form')
        .find('input[name="phone"]')
        .css({ 'border-color': '' })
      button
        .closest('form')
        .find('input[name="name"]')
        .css({ 'border-color': '' })

      button.closest('form').find('.checkbox').removeClass('required')
      console.log(3)
      // $(button.closest('form')).on('submit',function() { //Change
      console.log(2)
      // var th = $(this);

      $.ajax({
        type: 'POST',
        url: 'https://buduar-epil.pl/wp-content/themes/buduar-epil-theme/mail.php', //Change
        data: button.closest('form').serialize(),
      }).done(function () {
        button.removeAttr('disabled')
        button.closest('form').trigger('reset')
        $('.popups .body_form').hide()

        $('.popups .vaucher_from').removeClass('active')
        $('.popups').show()
        $('.popups .success').show()

        fbq('track', 'Lead')
        if (g !== false) {
          const footer = document.querySelector('footer')
          const link = document.createElement('a')

          if (g == 'ua') {
            link.href = '/Buduar_Epil_ua.pdf' // Шлях до вашого PDF файлу
            link.download = 'Buduar_Epil_ua.pdf' // Ім'я файлу для завантаження
          } else {
            link.href = '/Buduar_Epil.pdf' // Шлях до вашого PDF файлу
            link.download = 'Buduar_Epil.pdf' // Ім'я файлу для завантаження
          }

          // Додаємо <a> перед footer
          footer.parentNode.insertBefore(link, footer)

          // Ініціюємо клік на <a>
          link.click()

          // Видаляємо <a> після кліку
          link.remove()
        }
        // button.closest('form').trigger("reset");
      })
      // });
    }
    //     });
    // });

    return false
  })

  $('body').on('click', '.services-item', function () {
    $('.popups').fadeIn()
    $('.popups .order_form').slideDown()
  })
  // show popup
  $('body').on('click', ':not(form) .btn', function () {
    if ($(this).hasClass('btn_consultation')) {
      $('.popups').fadeIn()
      $('.popups .consultation').slideDown()
    } else if ($(this).hasClass('btn_vaucher')) {
      $('.popups').fadeIn()
      $('.popups .vaucher_from').addClass('active')
      $('.popups .vaucher_from').slideDown()
    } else if ($(this).hasClass('btn_gaid')) {
      $('.popups').fadeIn()
      $('.popups .gaid_form').slideDown()
    } else if ($(this).hasClass('btn_sale')) {
      $('.popups').fadeIn()
      $('.popups .sale_form').slideDown()
    } else if ($(this).hasClass('btn_order')) {
      $('.popups').fadeIn()
      $('.popups .order_form').slideDown()
    } else if ($(this).hasClass('btn_proposition')) {
      $('.popups').fadeIn()
      $('.popups .proposition_form').slideDown()
    }

    // return false;
  })
  // close popups
  $('body .close_popup, body .overflow').on('click', function () {
    $('.popups').fadeOut()
    $('.popups').hide()
    $('.popups .body_form').hide()
    $('.popups .vaucher_from').removeClass('active')
    $('.popups .success').hide()
  })

  // // Показуємо банер через 3 секунди (3000 мілісекунд)
  // setTimeout(function () {
  //   $('.popups').fadeIn()
  //   $('.popups .consultation').slideDown()
  // }, 10000)
  // scroll menu
  var header = $('header'),
    stickyHeight = header.find('.top').offset().top
  $('header nav a, .anchor').on('click', function () {
    // event.preventDefault();
    $('header nav a').removeClass('active')
    $(this).addClass('active')

    if ($(this).parent().parent('#menu').show() && $(window).width() < 1300) {
      $('#menu').slideUp()
    }
    var target = $(this).attr('href')

    $('html, body').animate(
      {
        scrollTop: $(target).offset().top - header.height() - 10,
      },
      1000
    )
  })

  $('.scroll-link').on('click', function (e) {
    e.preventDefault()
    const target = $(this.getAttribute('href'))
    if (target.length) {
      $('html, body').animate(
        {
          scrollTop: target.offset().top,
        },
        1000
      ) // Швидкість у мілісекундах
    }
  })

  $(window).scroll(function () {
    var currentScroll = $(window).scrollTop()

    if (currentScroll > stickyHeight) {
      header.addClass('sticky')
    } else {
      header.removeClass('sticky')
    }
  })

  setTimeout(() => {
    $('.slider_reviews').swiper({
      mode: 'horizontal',
      slidesPerView: 3,
      spaceBetween: 10,
      loop: true,
      nextButton: '.section-reviews .swiper_arrow-next',
      prevButton: '.section-reviews .swiper_arrow-prev',
      initialSlide: 0, // Почати з першого слайду (індекс 0)
      breakpoints: {
        // when window width is >= 320px
        1080: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 1.1,
          paginationClickable: true,
          pagination: '.section-reviews .swiper-pagination',
        },
      },
    })
  }, 100)

  // const swiper = new Swiper('.slider_reviews', {
  //   direction: 'horizontal', // замість mode: 'horizontal'
  //   slidesPerView: 3,
  //   spaceBetween: 10,
  //   loop: true,
  //   navigation: {
  //     nextEl: '.section-reviews .swiper_arrow-next',
  //     prevEl: '.section-reviews .swiper_arrow-prev',
  //   },
  //   pagination: {
  //     el: '.section-reviews .swiper-pagination',
  //     clickable: true,
  //   },
  //   breakpoints: {
  //     1080: {
  //       slidesPerView: 2,
  //     },
  //     768: {
  //       slidesPerView: 1.1,
  //     },
  //   },
  // })

  $('.slider_result').swiper({
    mode: 'horizontal',
    slidesPerView: 4,
    spaceBetween: 10,
    loop: true,
    nextButton: '.section-result .swiper_arrow-next',
    prevButton: '.section-result .swiper_arrow-prev',
    breakpoints: {
      // when window width is >= 320px
      1080: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 1.1,
        paginationClickable: true,
        pagination: '.section-result .swiper-pagination',
      },
    },
  })

  // const swiperResult = new Swiper('.slider_result', {
  //   direction: 'horizontal', // Замість mode: 'horizontal'
  //   slidesPerView: 4,
  //   spaceBetween: 10,
  //   loop: true,
  //   navigation: {
  //     nextEl: '.section-result .swiper_arrow-next',
  //     prevEl: '.section-result .swiper_arrow-prev',
  //   },
  //   pagination: {
  //     el: '.section-result .swiper-pagination',
  //     clickable: true,
  //   },
  //   breakpoints: {
  //     1080: {
  //       slidesPerView: 3,
  //     },
  //     768: {
  //       slidesPerView: 1.1,
  //     },
  //   },
  // })

  setTimeout(() => {
    $('.slider_gallery').swiper({
      mode: 'horizontal',
      slidesPerView: 4,
      spaceBetween: 10,
      loop: true,
      nextButton: '.section-gallery .swiper_arrow-next',
      prevButton: '.section-gallery .swiper_arrow-prev',
      breakpoints: {
        1080: {
          slidesPerView: 3,
        },
        768: {
          paginationClickable: true,
          pagination: '.section-gallery .swiper-pagination',
        },
        560: {
          slidesPerView: 1.1,
          paginationClickable: true,
          pagination: '.section-gallery .swiper-pagination',
        },
      },
    })
  }, 100)

  // const swiperGallery = new Swiper('.slider_gallery', {
  //   direction: 'horizontal', // Замість mode: 'horizontal'
  //   slidesPerView: 4,
  //   spaceBetween: 10,
  //   loop: true,
  //   navigation: {
  //     nextEl: '.section-gallery .swiper_arrow-next',
  //     prevEl: '.section-gallery .swiper_arrow-prev',
  //   },
  //   pagination: {
  //     el: '.section-gallery .swiper-pagination',
  //     clickable: true,
  //   },
  //   breakpoints: {
  //     1080: {
  //       slidesPerView: 3,
  //     },
  //     768: {
  //       slidesPerView: 2,
  //     },
  //     560: {
  //       slidesPerView: 1.1,
  //     },
  //   },
  // })

  //    menu
  $('#burger').on('click', () => {
    $('#menu').slideToggle()
  })

  //    faq

  $('.faq_item-title').on('click', function () {
    $(this).parent().siblings().removeClass('active')

    if ($(this).parent().hasClass('active')) {
      $(this).parent().removeClass('active')
      $(this).next().slideUp()
    } else {
      $('.faq_column').find('.faq_item-content').slideUp()

      $(this).parent().addClass('active')
      $(this).next().slideDown()
    }
  })

  $('.section_services li').on('click', function () {
    if (!$(this).hasClass('active')) {
      $('.section_services li').removeClass('active')
      $(this).addClass('active')

      $('.section_body .section_body-items').removeClass('active')

      $(
        '.section_body .section_body-items[data-id=' + $(this).attr('id') + ']'
      ).addClass('active')
    }
  })

  const animItems = document.querySelectorAll('._anim-items')

  if (animItems.length > 0) {
    window.addEventListener('scroll', animOnScroll)
    function animOnScroll() {
      for (let index = 0; index < animItems.length; index++) {
        const animItem = animItems[index]
        const animItemHeight = animItem.offsetHeight
        const animItemOffset = offset(animItem).top

        const animStart = 4
        let animItemPoint = window.innerHeight - animItemHeight / animStart
        if (animItemHeight > window.innerHeight) {
          animItemPoint = window.innerHeight - window.innerHeight / animStart
        }
        if (
          pageYOffset > animItemOffset - animItemPoint &&
          pageYOffset < animItemOffset + animItemHeight
        ) {
          animItem.classList.add('_active')
        } else {
          if (!animItem.classList.contains('_anim-no-hide')) {
            animItem.classList.remove('_active')
          }
        }
      }
      function offset(el) {
        const rect = el.getBoundingClientRect(),
          scrollLeft =
            window.pageXOffset || document.documentElement.scrollLeft,
          scrollTop = window.pageYoffset || document.documentElement.scrollTop

        return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
      }
    }
    setTimeout(() => {
      animOnScroll()
    }, 300)
  }

  initSlider()
  // $('video').on('click', function() {
  //     if (    this.paused ) {
  //         this.play();
  //     } else {
  //         this.pause();
  //     }
  // });
})

function initSlider() {
  if ($(window).width() <= 768) {
    // gallery info
    var sectionGalleryInfo = document.querySelector('.info_gallery')

    if (sectionGalleryInfo) {
      var swiperWrap = document.createElement('div')
      swiperWrap.classList.add('swiper-wrapper')

      swiperWrap.innerHTML = sectionGalleryInfo.innerHTML

      sectionGalleryInfo.innerHTML = ''

      sectionGalleryInfo.appendChild(swiperWrap)
      // $('.info_gallery').swiper({
      //   breakpoints: {
      //     768: {
      //       mode: 'horizontal',
      //       slidesPerView: 1,
      //       loop: true,
      //       autoplay: true,
      //       speed: 4500,
      //       effect: 'fade',
      //     },
      //   },
      // })
    }

    // if (sectionBodyItems) {

    let mySwiper // Створюємо змінну для слайдера
    function initSwiper() {
      if (window.innerWidth <= 600 && !mySwiper) {
        var sectionBodyItems = document.querySelectorAll('.section_body-items')
        sectionBodyItems.forEach(function (sectionBodyItems) {
          // Создаем новый div элемент
          var newDiv = document.createElement('div')
          newDiv.classList.add('swiper-wrapper')
          // Копируем внутренний HTML из существующего элемента
          newDiv.innerHTML = sectionBodyItems.innerHTML
          sectionBodyItems.innerHTML = ''
          // Добавляем новый div как дочерний элемент
          sectionBodyItems.appendChild(newDiv)
        })
        mySwiper = $('.section_body-items').swiper({
          mode: 'horizontal',
          slidesPerView: 1.3,
          spaceBetween: 10,
          loop: false,
          centeredSlides: false,
        })
        // mySwiper = new Swiper('.section_body-items', {
        //   direction: 'horizontal', // Замість mode: 'horizontal'
        //   slidesPerView: 1.5,
        //   spaceBetween: 10,
        //   loop: false,
        //   centeredSlides: false,
        // })
      } else if (window.innerWidth > 600 && mySwiper) {
        mySwiper.destroy(true, true) // Знищуємо слайдер на великих екранах
        mySwiper = null
      }
    }
    initSwiper()
    $(window).resize(initSwiper) // Відстежуємо зміну розміру вікна

    // }
  }
}
