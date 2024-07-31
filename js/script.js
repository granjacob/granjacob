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
});