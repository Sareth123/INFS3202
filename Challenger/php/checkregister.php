<?php

include('connect.php');
session_start();
$db = new MySQLDatabase();
$db->connect("challenger");
  $username = $_POST['user'];
  if(empty($username)||preg_match('/\s/',$username)){
      $bool = false;
      echo "Please enter a username";
    return;
  }

  $password = $_POST['pass'];
  if(strlen($password)<6){
    $bool = false;
    echo "Password must be 6 or more characters long";
    return;
  }
  
  $firstname = $_POST['name'];
  if(empty($firstname)||preg_match('/\s/',$firstname)){
    $bool = false;
    echo "Please enter your first name";
    return;
  }
  $lastname = $_POST['last'];
  if(empty($lastname)||preg_match('/\s/',$lastname)){
    $bool = false;
    echo "Please enter your last name";
    return;
  }
  $email = $_POST['em'];
  if(empty($email)||preg_match('/\s/',$email)||!strpos($email, '@')){
    $bool = false;
    echo "Please enter a valid email";
    return;
  }
  $postcode = $_POST['post'];
  if(empty($postcode)||is_numeric($postcode)){
    $bool = false;
    echo "Please enter your postcode";
    return;
  }
  $bool = true;
  $query = mysqli_query($db->link,"SELECT * FROM users"); //Query the users table
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
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['firstname']=$firstname;
    $_SESSION['lastname']=$lastname;
    $_SESSION['email']=$email;
    $_SESSION['postcode']=$postcode;
    echo"Success";
  }
?>