
<html>
  <head>
  </head>
  <body>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <h4>Delete</h4> 
        <br/>
        <h2> ARE YOU SURE?</h2>
        <button type="button" class="btn btn-primary" id="yes">YES</button>
        <button type="button" class="btn btn-primary" id="no">NO</button>
    </form>
    </div>
  </body>
</html>



<script>
  $('#yes').on('click', function () {
    var url="php/delete.php";
	window.location.href=url;
  });
  $('#no').on('click', function () {
    var url="update.php";
	window.location.href=url;
  });
</script>