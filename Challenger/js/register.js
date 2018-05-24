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