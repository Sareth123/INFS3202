<?php

include('connect.php');
session_start();
$db = new MySQLDatabase();
$db->connect("challenger");
  $username = $_POST['user'];
  if(empty($username)){
    $bool = false;
    echo "Username has been entered incorrectly";
    return;
  }
  $password = $_POST['pass'];
  $firstname = $_POST['name'];
  $lastname = $_POST['name'];
  $email = $_POST['em'];
  $postcode = $_POST['post'];
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