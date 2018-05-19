<?php
  include('connect.php');
  session_start();
  $db = new MySQLDatabase();
  $db->connect("challenger");
   
  $name = $_POST['name'];
  $em=$_POST['em'];

  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $postcode = $_SESSION['postcode'];
  
  $bool = true;

  $query = mysqli_query($db->link,"SELECT * FROM teams"); //Query the users table
  while($row = mysqli_fetch_array($query)) //display all rows from query
  {
    $table_names = $row['name']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($name == $table_names) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      echo"bruh";
    }
  }
  if($bool) // checks if bool is true
  {
    mysqli_query($db->link,"INSERT INTO users (username, password, firstname, lastname, email, postcode) VALUES ('$username',PASSWORD('$password'),'$firstname','$lastname','$email','$postcode')"); //Inserts the value to table users
    mysqli_query($db->link,"INSERT INTO teams (name) VALUES ('$name')"); //Inserts the value to table team
    $id= mysqli_query($db->link,"SELECT team_id FROM teams WHERE name=('$name')");
    $rid=mysqli_fetch_array($id);
    $strid= $rid[0];
    $code=$strid.substr($name,0,4);
    $code=str_replace(" ","",$code);
    mysqli_query($db->link,"UPDATE teams SET code =('$code')WHERE name=('$name')");
    
    mysqli_query($db->link,"INSERT INTO team_members (team_id, user_id) SELECT team_id,user_id FROM teams, users WHERE name=('$name') AND username =('$username')");

  $to = (string)$em;
  $subject = "Join Challenger!";
  $message = "Your friend ".(string)$firstname." ".(string)$lastname."would you like you to Join: ".(string)$name." to join use this code: ".(string)$code;
  include('send_email.php');

    echo"Success";
    session_destroy();

  }
?>