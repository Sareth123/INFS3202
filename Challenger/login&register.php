<div class="modal fade" id="content" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" id="body">
        
        
      </div>
    </div>
  </div>
</div>
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
  
  $(document).ready( function() {
    $("#login").on("click", function() {
        $("#header").append("Login");
        $("#body").load("login.php");
    });
    $("#register").on("click", function() {
        $("#header").append("Register");
        $("#body").load("register.php");
    });
});

</script>