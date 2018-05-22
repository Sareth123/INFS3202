<?php
  include('connect.php');
  session_start();
  $db = new MySQLDatabase();
  $db->connect("challenger");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $bool = true;
    $query = mysqli_query($db->link,"SELECT * from users WHERE username='$username'");
    $refq = mysqli_query($db->link,"SELECT * from refs WHERE username='$username'"); // Query the users table
    $u_exists = mysqli_num_rows($query);
    $r_exists = mysqli_num_rows($refq); //Checks if username exists
    $table_users = "";
    $table_password = "";
    if($u_exists>0) //IF there are no returning rows or no existing username
    {
       while($row = mysqli_fetch_assoc($query)) // display all rows from query
       {
          $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
          $table_password = $row['password']; // the first password row is passed on to $table_password, and so on until the query is finished
       }       if(password_verify($password,$table_password))// checks if there are any matching fields
       {
             $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
             header("location: ../home.php"); // redirects the user to the authenticated home page
       }
       else
       {
        
        Print '<script>alert("Incorrect Password!");</script>'; // Prompts the user
        Print '<script>window.location.assign("../index.php");</script>'; // redirects to login.php
       }
    }
    else if($r_exists>0)
      {
        while($row = mysqli_fetch_assoc($refq)) // display all rows from query
       {
          $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
          $table_password = $row['password']; // the first password row is passed on to $table_password, and so on until the query is finished
       }
       if(($username == $table_users))// checks if there are any matching fields
       {
             $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
             header("location: ../referee.php"); // redirects the user to the authenticated home page
       }
       else
       {
        
        Print '<script>alert("Incorrect Password!");</script>'; // Prompts the user
        Print '<script>window.location.assign("../index.php");</script>'; // redirects to login.php
       }

      }
    else
    {
        Print '<script>alert("No Users");</script>'; // Prompts the user
        Print '<script>window.location.assign("../index.php");</script>'; // redirects to login.php
    }
?>