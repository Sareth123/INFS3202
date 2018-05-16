<html>
<head>
  </head>
  <body>
    <script src=https://code.jquery.com/jquery-3.2.1.min.js></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
   
      <p>Enter Team Name: <input type="text" name="name" required="required" id="user"/></p> <br/>
    <!--send email function will be added soon-->
  <div class="email_field">
      <p>Please enter in 5 of team memebers email addresses:</p>
        <input type="text" name="email" required="required" id="em"/><br>
        <!--<input type="text" name="email2" required="required"/><br>
        <input type="text" name="email3" required="required"/><br>
        <input type="text" name="email4" required="required"/><br>
        <input type="text" name="email5" required="required"/><br>
        <p class="btn btn-primary" id="add" title="Add field">Add</p>-->
    </div>
    <input type="submit" class="btn btn-primary" onClick="adding()" value="Create Team"/>
    </body>
</html>

<script type = "text/javascript">

function adding()
{
    var name = document.getElementById("user").value;
    var em=document.getElementById("em").value;
    var dataString = 'name= '+name+'&email='+email+' ';
    console.log(dataString);
    $.ajax({
      type:"POST",
      url:"php/checknewteam.php",
      data:dataString,
      success: function(html) {
        if(html=='Success'){
           alert(html);
        }{
      alert(html);
      }
      }
    });
  };

</script>