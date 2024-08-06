function addBackgroundClass( divClass, classBackground, urlPaths )
{
    for (path in urlPaths) {
        if (document.location.href.indexOf(urlPaths[path]) >= 0) {
            $('.' + divClass).addClass(classBackground);
        }
    }
}
$(document).ready( function () {



   $('.setlanguage').on("click", function(e) {
      e.preventDefault();
      var form = $(this).closest('form');
      $(this).closest('form').find("[name=lang]").val(
          $(this).data('lang')
      );
      form.submit();
      return false;
   });

   $('.nav-item.dropdown').hover(
       function () {
          $(this).addClass('show');
          $(this).find('.dropdown-menu').addClass('show');
       },
       function () {
          $(this).removeClass('show');
          $(this).find('.dropdown-menu').removeClass('show');
       }
   );
});


document.addEventListener("DOMContentLoaded", function() {
    var menuToggle = document.createElement("div");
    menuToggle.className = "menu-toggle";
    menuToggle.innerHTML = "☰ Menu";
    document.body.appendChild(menuToggle);

    var leftMenu = document.querySelector(".left-menu");
    menuToggle.addEventListener("click", function() {
        leftMenu.classList.toggle("open");
    });
});

