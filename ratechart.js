$(function () {
    $.getJSON('http://localhost:90/Assignment1/data.php', function(data) {
    
    	$('#container').highcharts({
    	
		    chart: {
		        type: 'line'
		    },
		    
		    title: {
		        text: 'National Interest Rate'
		    },
		    subtitle: {
        text: 'Source: mortgagenewsdaily.com'
    },
		    xAxis: {
		        type: 'datetime'
		    },
		    
		    yAxis: {
		        title: {
		            text: 'Interest Rate'
		        }
		    },
		    legend: {
		        enabled: false
		    },
		
		    series: [{
		        name: 'Interest Rate',
		        data: data,
		        color: '#16f345',
		     
		    }]
		
		});
    });
    });
  
