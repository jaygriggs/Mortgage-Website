Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
         text: '2 Week Interest Average Interest Rate'
    },
    subtitle: {
        text: 'Source: Mortgagenewsdaily.com'
    },
    xAxis: {
         type: 'datetime'
    },
	 dateTimeLabelFormats: {
                second: '%H:%M:%S',
                minute: '%H:%M',
                hour: '%H:%M',
                day: '%e. %b',
                week: '%e. %b',
                month: '%b \'%y',
                year: '%Y'
            },
            tickInterval: 24 * 3600 * 1000 // interval of 1 day
    yAxis: {
	min:0,
        title: {
            text: ''
        }
    },
    
    legend: {
    enabled:false,
    }, 
	
	
   
    series: [{
        
        
        name: 'Interest Rate',
        data: [4.0, 4.9, 4.5, 4.5, 4.4, 4.5, 4.2, 4.5, 4.3, 4.3]
		pointInterval: 24 * 3600 * 1000
     }]
});