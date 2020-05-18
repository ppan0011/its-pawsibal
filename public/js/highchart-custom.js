Highcharts.chart('container', {
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				title: {
					text: 'Total Area Affected'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				accessibility: {
					point: {
						valueSuffix: '%'
					}
				},
				credits: {
					enabled: false
				},
				responsive: {  
					rules: [{  
						condition: {  
							maxWidth: 300,
							maxHeight: 300
						},  
						chartOptions: {  
							legend: {  
								enabled: false  
							}  
						}  
					}]  
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						colors: ['#84BD56', '#257229'],
						dataLabels: {
							enabled: true,
							format: '<b>{point.name}</b>: {point.percentage:.1f} %'
						}
					}
				},
				series: [{
					name: 'Area Percentage',
					colorByPoint: true,
					data: [{
						name: 'Unaffected Area',
						y: 0.45
					}, {
						name: 'Bushfire Affected Area',
						y: 11.03
					}]
				}]
			});