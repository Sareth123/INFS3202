
        <?php
   
    include ('php/stats/losses.php');
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