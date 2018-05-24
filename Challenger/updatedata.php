
<html>
  <head>
  <script src=https://code.jquery.com/jquery-3.2.1.min.js></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel ="stylesheet" href="css/style.css">
  </head>
  <body>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <h4>Update</h4> 
        <br/>

        <form action="php/checkUpdate.php" method="POST">
          <label>Update Password:</label> <input type="password" name="password" class="right"/> <br/><br/>
          <label>Update Email:</label> <input type="text" name="email" class="right"/><br/><br/>
          <label>Update Postcode:</label> <input type='text' name="postcode" class="right"/><br/><br/>
         <input type="submit" class="btn btn-primary" value="Update"/>
        </form>

  </body>
</html>

