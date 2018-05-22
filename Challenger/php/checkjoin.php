<?php
  include('connect.php');
  session_start();
  $db = new MySQLDatabase();
  $db->connect("challenger");
   
  $name = $_POST['name'];
  $code = $_POST['code'];
  
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $password = password_hash($password, PASSWORD_BCRYPT);
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $postcode = $_SESSION['postcode'];
  
  $bool = true;

  $query = mysqli_query($db->link,"SELECT code FROM teams WHERE code=('$code')"); //Query the users table
    if(mysqli_num_rows($query)<1) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      echo"bruh";
    }
  if($bool) // checks if bool is true
  {
    mysqli_query($db->link,"INSERT INTO users (username, password, firstname, lastname, email, postcode,donate) VALUES ('$username','$password,'$firstname','$lastname','$email','$postcode',0)"); //Inserts the value to table users
    mysqli_query($db->link,"INSERT INTO team_members (team_id, user_id) SELECT team_id,user_id FROM teams, users WHERE code=('$code') AND username =('$username')");

    echo"Success";
    session_destroy();
  }
?>