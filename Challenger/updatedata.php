
<html>
  <head>
  </head>
  <body>
    <div id="register_body">
    <script src=https://code.jquery.com/jquery-3.2.1.min.js></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <form action="php/checkUpdate.php" method="POST">
      Update Password: <input type="password" name="password"/> <br/><br/>
      Update Email: <input type="text" name="email" required="required"/><br/><br/>
      Update Postcode: <input type='text' name="postcode"/><br/><br/>
     <input type="submit" class="btn btn-primary" value="Update"/>
    </form>
    </div>
  </body>
</html>

