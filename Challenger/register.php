<html>
  <head>
  </head>
  <body>
    <script src=https://code.jquery.com/jquery-3.2.1.min.js></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <form action="checkregister.php" method="post">
      <p>Enter Username: <input type="text" name="username" required="required"/></p> <br/>
      <p>Enter Password: <input type="password" name="password" required="required" /></p> <br/>
      <p>Enter first name: <input type="text" name="firstname" required="required" /></p> <br/>
      <p>Enter last name: <input type="text" name="lastname" required="required" /></p> <br/>
      <p>Enter email: <input type="text" name="email" required="required" /></p> <br/>
      <p>Enter postcode: <input type="text" name="postcode" required="required" /></p> <br/>
      <input type="submit" class="btn btn-primary" value="Register"/>
    </form>
  </body>
</html>

