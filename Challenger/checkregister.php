<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $con=mysqli_connect("localhost", "root","") ;
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $firstname = $_POST['name'];
  $lastname = $_POST['name'];
  $email = $_POST['em'];
  $postcode = $_POST['post'];
  $bool = true;

  mysqli_select_db($con,"challenger"); //Connect to database
  $query = mysqli_query($con,"SELECT * FROM users"); //Query the users table
  while($row = mysqli_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    $table_emails = $row['email'];
    if($username == $table_users||$email==$table_emails) // checks if there are any matching fields
    {
      $bool = false;
      echo"This user exists";
      return;

    }
  }
  if($bool) // checks if bool is true
  {
    mysqli_query($con,"INSERT INTO users (username, password, firstname, lastname, email, postcode) VALUES ('$username','$password','$firstname','$lastname','$email','$postcode')"); //Inserts the value to table users
    echo"Success";
  }
}
?>