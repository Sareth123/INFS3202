 $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
  
  $(document).ready( function() {
    $("#login").on("click", function() {
        $("#body").load("login.php");
    });
    $("#register").on("click", function() {
        $("#body").load("register.php");
    });
});
