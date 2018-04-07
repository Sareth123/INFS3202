<html>
<head>
  </head>
  <body>
    <script src=https://code.jquery.com/jquery-3.2.1.min.js></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <form action="home.php" method="post">
      <p>Enter Team Name: <input type="text" name="name" required="required"/></p> <br/>
      <input type="submit" class="btn btn-primary" value="Create Team"/>
    </form>
    </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $con=mysqli_connect("localhost", "root","") ;
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $team_name = mysqli_real_escape_string($con,$_POST['name']);
  
    $bool = true;

  mysqli_select_db($con,"challenger"); //Connect to database
  $query = mysqli_query($con,"Select * from teams"); //Query the users table
  while($row = mysqli_fetch_array($query)) //display all rows from query
  {
    $table_names = $row['name']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($team_name == $table_names) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Name has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("new_team.php");</script>'; // redirects to register.php
    }
  }
  if($bool) // checks if bool is true
  {
    mysqli_query($con,"INSERT INTO teams (name) VALUES ('$name')"); //Inserts the value to table users
    Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
   Print '<script>window.location.assign("new_team.php");</script>'; // redirects to register.php
  }
}
?>