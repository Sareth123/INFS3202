
<html>
  <head>
  </head>
  <body>
    <div id="register_body">
    <script src=https://code.jquery.com/jquery-3.2.1.min.js></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
      <label>Enter Username:   </label> <input type="text" name="username" required="required" id="user" class="right"/>
      <label>Enter Password:</label> <input type="password" name="password" required="required" id="pass" class="right" />
      <label>Enter first name:</label> <input type="text" name="firstname" required="required" id="name" class="right"/>
      <label>Enter last name:</label> <input type="text" name="lastname" required="required" id="last"class="right"/>
      <label>Enter email:</label> <input type="text" name="email" required="required" id="em" class="right"/>
      <label>Enter postcode:</label> <input type="text" name="postcode" required="required" id="post" class="right" />
      <label id ="button"><input type="submit" class="btn btn-primary" onClick="newTeam()" value="Create a Team" id="new_team"/></label>
      <label id ="button"><input type="submit" class="btn btn-primary" onClick="joinTeam()" value="Join team"/></label>
      
    </div>
  </body>
</html>

<script>
  function newTeam(){
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    var name = document.getElementById("name").value;
    var last = document.getElementById("last").value;
    var em = document.getElementById("em").value;
    var post = document.getElementById("post").value;

    var dataString = 'user=' + user + '&pass=' + pass +'&name='+name+'&last='+last+'&em='+em+'&post= '+post+' ';
    console.log(dataString);
    $.ajax({
      type:"POST",
      url:"php/checkregister.php",
      data:dataString,
      success: function(html) {
        if(html.includes('Success')){
          alert(html);
           $("#register_body").remove();
          $("#body").load("newteam.php");
        }{
      alert(html);
      }
      }
    });
  };
  function joinTeam(){
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    var name = document.getElementById("name").value;
    var last = document.getElementById("last").value;
    var em = document.getElementById("em").value;
    var post = document.getElementById("post").value;

    var dataString = 'user=' + user + '&pass=' + pass +'&name='+name+'&last='+last+'&em='+em+'&post= '+post+' ';
    console.log(dataString);
    $.ajax({
      type:"POST",
      url:"php/checkregister.php",
      data:dataString,
      success: function(html) {
        if(html.includes('Success')){
          alert(html);
           $("#register_body").remove();
          $("#body").load("jointeam.php");
        }{
      alert(html);
      }
      }
    });
  };
</script>
