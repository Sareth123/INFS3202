
        <?php
   
     require_once('php/connect.php');
        $win = new MySQLDatabase();
        $win->connect("challenger");
      
   $teams = mysqli_query($win->link,"SELECT name, wins, losses FROM teams ORDER BY wins DESC");
   while($row=mysqli_fetch_assoc($teams)){
       $name[]=$row['name'];
       $wins[]=$row['wins'];
    }
    require_once('php/connect.php');
        $w = new MySQLDatabase();
        $w->connect("challenger");
$winMax = mysqli_query($w->link,"SELECT MAX(wins) FROM teams");
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


     <div id="barGauge" width="100px" height="100px" float="right"></div