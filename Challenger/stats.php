<!DOCTYPE html>
<html lang="en">
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
   <?php
   $teams = mysqli_query($db->link,"SELECT name, wins, losses FROM teams ORDER BY wins DESC");
   while($row=mysqli_fetch_assoc($teams)){
       $name[]=$row['name'];
       $wins[]=$row['wins'];
    }
$winMax = mysqli_query($db->link,"SELECT MAX(wins) FROM teams");
$mRow = mysqli_fetch_assoc($winMax);
$max = $mRow['MAX(wins)']+1;



   ?>
    <script type="text/javascript">

        

    

        $(document).ready(function ()
        {   var wins = <?php Print json_encode($wins)?>;
            $('#barGauge').jqxBarGauge({
                colorScheme: "scheme02",
                width: getWidth('barGauge'),
                height: getHeight('barGauge'),
                values: wins, max: <?php Print $max?> , tooltip: {
                    visible: true, formatFunction: function (value)
                    {   
                        var teams=<?php Print json_encode($name)?>;
                        var realVal = parseInt(value);
                        //not stored
                        var loc=wins.indexOf(realVal);
                        var names = teams[loc];
                        var loc = loc+1;
                        return (names +"'s total wins : "+ realVal);
                       
                    },
                }
            });
        });
    </script>
</head>
<body>
    <div id="barGauge"></div>
</body>
</html>