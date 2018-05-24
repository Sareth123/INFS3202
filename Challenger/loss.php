
        <?php
   
     require_once('php/connect.php');
        $losses = new MySQLDatabase();
        $losses->connect("challenger");
      
   $teams = mysqli_query($losses->link,"SELECT name, wins, losses FROM teams ORDER BY wins DESC");
   while($row=mysqli_fetch_assoc($teams)){
       $name[]=$row['name'];
       $wins[]=$row['losses'];
    }
    require_once('php/connect.php');
        $l = new MySQLDatabase();
        $l->connect("challenger");
$winMax = mysqli_query($l->link,"SELECT MAX(losses) FROM teams");
$mRow = mysqli_fetch_assoc($winMax);
$max = $mRow['MAX(losses)']+1;
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
                        return (names +"'s total losses : "+ realVal);
                       
                    },
                }
            });
        });
    </script>


     <div id="barGauge" width="100px" height="100px" float="right"></div