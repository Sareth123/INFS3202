<body>
     <?php
     include('php/stats/for_against.php');
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
</body>