
        $(function () {
                var fetchdata_json = new Array();   
                $.getJSON('data.php', function(data) {
                    // Populate simple Languages
                    for (i = 0; i < data.length; i++){
                        fetchdata_json.push([data[i].key, data[i].value]);
                    }
                 
                    // here simple bar draw chart
                    $('#container').highcharts({
                    chart: {
                        type: "line"//type defination
                    },
                    title: {
                        text: "Programming data"
                    },
                    xAxis: {
                        type: 'category',
                        allowDecimals: false,
                        title: {
                            text: ""
                        }
                    },
                    yAxis: {
                        title: {
                            text: "Marks"
                        }
                    },
                    series: [{
                     name: 'Subjects',
                        data: fetchdata_json
                    }]
                }); 
            });
        });
