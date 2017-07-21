var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

today = mm + '/' + dd + '/' + yyyy;
var date1 = [today;]




Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Interest Rate'
    },
    subtitle: {
        text: 'National Average'
    },
    xAxis: {
        categories: [var date1, '7-16', '7-15', '7-14', '7-13', '7-12', '7-11', '7-10', '7-9', '7-8', '7-7', '7-6']
    },
    yAxis: {
        title: {
            text: 'Interest Rate'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Rate',
        data: [4.0, 4.9, 4.7, 4.5, 4.2, 4.1, 4.5, 4.12, 4.1, 4.3, 4.9, 4.6]
    }, ]
});