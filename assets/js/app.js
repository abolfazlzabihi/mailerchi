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
  