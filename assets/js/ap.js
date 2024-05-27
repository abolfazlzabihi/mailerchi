

////////////////////////////////////////////////


try {
  var splide2 = new Splide("#splide-2", {
    type: "loop",
    direction: "rtl",
    wheel: false,
    arrows: false,
    pagination: true,
    perPage: 1,
    autoScroll: {
      speed: 1,
    },
    
  });


  splide2.mount();
    jQuery("#slider-btn-prev").click(function () {
  
  splide2.go("<");
});

jQuery("#slider-btn-next").click(function () {
  splide2.go(">");
})
} catch (error) {
  
}

try {
  var splide3 = new Splide("#splide-3", {
    type: "loop",
    direction: "rtl",
    arrows: false,
    pagination: true,
    perPage: 3,
    breakpoints: {
      576: {
        perPage: 1,
      },
      768: {
        perPage: 2,
      },
      992: {
        perPage: 2,
      },
      1200: {
        perPage: 3,
      },
    },
    autoScroll: {
      speed: 1,
    },

  });


  splide3.mount();
  jQuery("#slider3-btn-prev").click(function () {

    splide3.go("<");
  });

  jQuery("#slider3-btn-next").click(function () {
    splide3.go(">");
  })
} catch (error) {

}
////////////////////////////splide carousel//////////////////////////////////

///////////////////////navbar-menu////////////////////////
try {
  var ul = document.querySelectorAll('.sub-menu');
  var ul_2 = document.querySelectorAll('.sub-menu .sub-menu');

  ul.forEach((item) => {
    item.classList.add('dropdown-menu')
  })
  ul_2.forEach((item) => {
    item.classList.add('dropdown-submenu', 'dropdown-submenu-left')
  })

  var li = document.querySelectorAll('.offcanvas-body ul li');
  li.forEach((item) => {
    item.classList.add('nav-item', 'dropdown', 'px-2','me-lg-4')
  })

  var dropdownMenu = document.querySelectorAll('.dropdown-menu');
  dropdownMenu.forEach((item) => {
    var aTagPreviousDropdownMenu = item.previousElementSibling;
    // aTagPreviousDropdownMenu.insertAdjacentHTML('afterend','<i class="bi bi-chevron-left fs-5"></i>')
    aTagPreviousDropdownMenu.classList.add('toggle')
    aTagPreviousDropdownMenu.setAttribute('data-bs-toggle', 'dropdown');
  })
  var a = document.querySelectorAll('.dropdown-menu li a');
  a.forEach((item) => {
    item.classList.add('dropdown-item')
  })

} catch (error) {

}

///////////////////////navbar-menu////////////////////////







