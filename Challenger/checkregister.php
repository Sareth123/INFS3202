<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $con=mysqli_connect("localhost", "root","") ;
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $username = mysqli_real_escape_string($con,$_POST['username']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
  $firstname = mysqli_real_escape_string($con,$_POST['firstname']);
  $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $postcode = mysqli_real_escape_string($con,$_POST['postcode']);
  $bool = true;

  mysqli_select_db($con,"challenger"); //Connect to database
  $query = mysqli_query($con,"Select * from users"); //Query the users table
  while($row = mysqli_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    $table_emails = $row['email'];
    if($username == $table_users||$email==$table_emails) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
    }
  }
  if($bool) // checks if bool is true
  {
    mysqli_query($con,"INSERT INTO users (username, password, firstname, lastname, email, postcode) VALUES ('$username','$password','$firstname','$lastname','$email','$postcode')"); //Inserts the value to table users
    Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
   Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
   header("location: newteam.php");
  }
}
?>