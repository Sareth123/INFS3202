
<head>
    <meta name="keywords" content="jQuery BarGauge, BarGauge, Radial BarGauge, jqxBarGauge" />
    <meta name="description" content="In the following demo you can see how to initialize basic jqxBarGauge with default settings. You can set range's start and end width, start and end distance from the gauge's bundaries and custom style." />
    <title id='Description'>jqxBarGauge displays an indicator within a range of values. Gauges
        can be used in a table or matrix to show the relative value of a field in a range
        of values in the data region.</title>
    <link rel="stylesheet" href="css/jqwidgets/jqx.base.css" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />
    

    <script type="text/javascript" src="js/jqwidgets/jqxcore.js"></script>
      <script type="text/javascript" src="js/jqwidgets/jqxdraw.js"></script>
      <script type="text/javascript" src="js/jqwidgets/jqxbargauge.js"></script>
      <script type="text/javascript" src="js/jqwidgets/script/demos.js"></script>

    
   

    <select id="stats">
        <option value="wins">Wins</option>
        <option value ="losses">Losses</option>
        <option value ="for">For & Against</option>
    </select>
    <div id ="wins">
   </div>
   <div id ="losses">
   </div>
   <div id="for">
   </div>
    

<script>
    $(document).ready(function(){
        $('#wins').load('wins.php');
    });
    $("#stats").on('change',function(){
       if(this.value=="losses"){
        $("#wins").empty();
        $("#for").empty();
        $("#losses").load("loss.php");
        }else if(this.value=="wins"){
            $("#losses").empty();
            $("#for").empty();
            $("#wins").load("wins.php");
        }else if(this.value=="for"){
            $("#losses").empty();
            $("#losses").empty();
            $("#for").load("foragainst.php");
        }
    });

    </script>

