<html>
    <head>
    <script src=https://code.jquery.com/jquery-3.2.1.min.js></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="css/style.css">
      </head>
    <body>

        <form action="php/checklogin.php" method="POST">
           <label>Enter Username:</label> <input type="text" name="username" required="required" /> <br/><br/>
           <label>Enter Password:</label> <input type="password" name="password" required="required" /> <br/><br/>
           
           <input type="submit" class="btn btn-primary" value="Login"/>
        </form>
    </body>
</html>