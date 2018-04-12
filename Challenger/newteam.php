<html>
<head>
  </head>
  <body>
    <script src=https://code.jquery.com/jquery-3.2.1.min.js></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
 <form action="checknewteam.php" method="post">
   
      <p>Enter Team Name: <input type="text" name="name" required="required"/></p> <br/>

  <div class="email_field">
      <p>Please enter in 5 of team memebers email addresses:</p>
        <input type="text" name="email1" required="required"/><br>
        <input type="text" name="email2" required="required"/><br>
        <input type="text" name="email3" required="required"/><br>
        <input type="text" name="email4" required="required"/><br>
        <input type="text" name="email5" required="required"/><br>
        <p class="btn btn-primary" id="add" title="Add field">Add</p>
    </div>
    <input type="submit" class="btn btn-primary" value="Create Team"/>
    </form>
    </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
    var count = 1;
    var max = 7; //Allow for a total of 7 email fields be visible
    var add = $('#add');
    var email_field = $('.email_field'); 
    var newEmail = '<div><input type="text" name="email" value=""/><p class="btn btn-secondary" id="remove" title="Remove field">Remove</p></div>'; //new email text field
    
    $(add).click(function(){ 
        if(count < max){
            count++;
            $(email_field).append(newEmail);
        }
    });
    $(email_field).on('click', '#remove', function(e){
        e.preventDefault();
        $(this).parent('div').remove();
        count--;
    });
});
</script>