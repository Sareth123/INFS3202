<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $con=mysqli_connect("localhost", "root","") ;
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $name = $_POST['name'];
  
    $bool = true;

  mysqli_select_db($con,"challenger"); //Connect to database
  $query = mysqli_query($con,"SELECT * FROM teams"); //Query the users table
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
    mysqli_query($con,"INSERT INTO teams (name) VALUES ('$name')"); //Inserts the value to table users
    echo"Success";
  }
}
?>