$(document).ready(function() {

  //regform submit
  $("[name='regform']").submit(function() {
    var str = $(this).serialize();
    $("[name='regform-submit']").val('Идёт отправка').attr("disabled", "true");
    $.ajax({
      type: "POST",
      url: "action.php",
      data: str,
      success: function(msg) {
        console.log(msg);
        $(document).ajaxComplete(function(event, request, settings) {
          if (msg == "success") {
            $(".message__success").css('display', 'flex');
            $("[name='regform']").css('display', 'none');
          }
          if (msg == "fail") {
            $("#form__time").addClass('is-invalid');
            $("[name='regform-submit']").val('Записаться').removeAttr("disabled");
          }
        });
      }
    });
    return false;
  });

});