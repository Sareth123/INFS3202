
   <?php
     require_once('php/connect.php');
        $for = new MySQLDatabase();
        $for->connect("challenger");
      
   $teams = mysqli_query($for->link,"SELECT name, wins, losses FROM teams ORDER BY wins DESC");
   while($row=mysqli_fetch_assoc($teams)){
       $name[]=$row['name'];
       $points[]=$row['wins']-$row['losses'];
    }
    require_once('php/connect.php');
        $f = new MySQLDatabase();
        $f->connect("challenger");
$winMax = mysqli_query($f->link,"SELECT MAX(wins),MAX(losses) FROM teams");
$mRow = mysqli_fetch_assoc($winMax);
$max = $mRow['MAX(wins)']+1;
$min = $mRow['MAX(losses)']+1;
?>
  
    <script type="text/javascript">
        $(document).ready(function ()
         { var points = <?php Print json_encode($points)?>;
            $('#barGauge').jqxBarGauge({
                colorScheme: "scheme02",
                width: getWidth('barGauge'),
                height: getHeight('barGauge'),
                values: points,
                min: -<?php Print $min ?>,
                baseValue: 0,
                max: <?php Print $max ?>,
                tooltip:{
                    visible: true, formatFunction: function (value)
                    {   
                        var teams=<?php Print json_encode($name)?>;
                        var realVal = parseInt(value);
                        //not stored
                        var loc=points.indexOf(realVal);
                        var names = teams[loc];
                        var loc = loc+1;
                        return (names +"'s currently: "+ realVal);

               },
                }
            });
        });
    </script>

    <div id='barGauge'></div>
