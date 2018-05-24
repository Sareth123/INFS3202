
    <div id="all">
        <link rel="stylesheet" href="../../jqwidgets-ver5.7.2/jqwidgets/styles/jqx.base.css" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />	    
   
    <script type="text/javascript">
        $(document).ready(function ()
        {
            var data = [{
                "id": "1",
                "name": "Hot Chocolate",
                "calories": "370"
            }, {
                "id": "2",
                "name": "Peppermint Hot Chocolate",
                "calories": "440"
            }, {
                "id": "3",
                "name": "Salted Caramel Hot Chocolate",
                "calories": "450"
            }, {
                "id": "4",
                "name": "White Hot Chocolate",
                "calories": "420"
            }, {
                "id": "5",
                "name": "Caffe Americano",
                "calories": "15"
            }, {
                "id": "6",
                "name": "Caffe Latte",
                "calories": "190"
            }, {
                "id": "7",
                "name": "Caffe Mocha",
                "calories": "330"
            }];
            var source = {
                datatype: "json",
                datafields: [
                    { name: 'name' },
                    { name: 'calories', type: 'int' }
                ],
                id: 'id',
                localdata: data
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#jqxlistbox").jqxListBox({
                width: 230,
                source: dataAdapter,
                displayMember: "name",
                valueMember: "calories",
                checkboxes: true
            });
            $("#jqxlistbox").jqxListBox('checkIndex', 2);
            $("#jqxlistbox").jqxListBox('checkIndex', 5);
            $("#jqxlistbox").jqxListBox('checkIndex', 6);
            var getValues = function ()
            {
                var items = $("#jqxlistbox").jqxListBox('getCheckedItems');
                var array = convertToArray(items);
                return array;
            };
            var convertToArray = function (items)
            {
                var preparedArray = new Array(items.length);
                for (var i = 0; i < items.length; i += 1)
                {
                    preparedArray[i] = items[i].value;
                }
                return preparedArray;
            }
            $('#barGauge').jqxBarGauge({
                width: getWidth('barGauge'),
                height: getHeight('barGauge'),
                title: 'Nutritional Values',
                values: getValues(),
                baseValue: 50,
                max: 500,
                barSpacing: 9,
                animationDuration: 0,
                relativeInnerRadius: 0.2,
                startAngle: 0,
                endAngle: 360,
                colorScheme: 'scheme05',
                tooltip: {
                    visible: true,
                    formatFunction: function (value, index)
                    {
                        var items = $("#jqxlistbox").jqxListBox('getCheckedItems');
                        var item = items[index];
                        return item.label + ": " + value + ' cal.';
                    }
                },
                labels: { formatFunction: function (value) { return value + ' cal.'; }, precision: 0, indent: 15, connectorWidth: 1 }
            });
            var getSum = function (array)
            {
                array = array || [];
                var sum = 0;
                if (!!array.length)
                {
                    for (var i = 0; i < array.length; i += 1)
                    {
                        sum += array[i];
                    }
                }
                return sum;
            };
            $('#log').html('<strong>Summary calories: ' + 970 + '</strong>');
            $("#jqxlistbox").on('checkChange', function (event)
            {
                var items = $("#jqxlistbox").jqxListBox('getCheckedItems');
                var arrayOfItems = convertToArray(items);
                $('#log').html('<strong>Summary calories: ' + getSum(arrayOfItems) + '</strong>');
                $('#barGauge').jqxBarGauge('val', arrayOfItems);
            });
        });
    </script>
</head>
<body class='default'>
    <div id='barGauge'></div>
    <div style=" float: right;">
        <div id='jqxlistbox'></div>
        <div id='log'></div>
    </div>
</body>
</div>