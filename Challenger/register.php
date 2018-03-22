<html>
  <head>
    <title>My first PHP website</title>
  </head>
  <body>
    <h2>Registration Page</h2>
    <a href="index.php">Click here to go back</a><br/><br/>
    <form action="register.php" method="post">
      Enter Username: <input type="text" name="username" required="required"/> <br/>
      Enter Password: <input type="password" name="password" required="required" /> <br/>
      <input type="submit" value="Register"/>
    </form>
  </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $con=mysqli_connect("localhost", "root","") ;
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $username = mysqli_real_escape_string($con,$_POST['username']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
    $bool = true;

  mysqli_select_db($con,"first_db"); //Connect to database
  $query = mysqli_query($con,"Select * from users"); //Query the users table
  while($row = mysqli_fetch_array($con,$query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
    }
  }
  if($bool) // checks if bool is true
  {
    mysqli_query($con,"INSERT INTO users (username, password) VALUES ('$username','$password')"); //Inserts the value to table users
    Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
    Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
  }
}
?>