
      // Load the Visualization API and the controls package.
      google.charts.load('current', {'packages':['corechart', 'controls']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawDashboard);
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart_category);


      // Callback that creates and populates a data table,
      // instantiates a dashboard, a range slider and a pie chart,
      // passes in the data and draws it.
      function drawDashboard() {

      	$.get("../statistics/suburb_bushfire_area_chart_2.csv", function(csvString) {
      		var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

      		var data = new google.visualization.arrayToDataTable(arrayData);

                  // Create a dashboard.
                  var dashboard = new google.visualization.Dashboard(
                  	document.getElementById('dashboard_div'));

                  // Create a range slider, passing some options

                  var donutRangeSlider = new google.visualization.ControlWrapper({
                  	'controlType': 'CategoryFilter',
                  	'containerId': 'filter_div',
                  	'options': {
                  		'filterColumnLabel': 'Suburb',
                  		ui: {
                  			'allowTyping': true,
                  			'allowMultiple': true,
                  			'allowNone': false
                  		}
                  	}
                  });

                  // Create a pie chart, passing some options
                  var columnChart = new google.visualization.ChartWrapper({
                  	'chartType': 'ColumnChart',
                  	'containerId': 'chart_div',
                  	'options': {
                  		'title': 'Suburb Area (km2) affected by Bushfire in Victoria',
                  		'width': 1400,
                  		'height': 400,
                  		'legend': 'right'
                  	}
                  });

                  // Establish dependencies, declaring that 'filter' drives 'pieChart',
                  // so that the pie chart will only display entries that are let through
                  // given the chosen slider range.
                  dashboard.bind(donutRangeSlider, columnChart);

                  // Draw the dashboard.
                  dashboard.draw(data);
                });

      }

      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'conservation_status');
        data.addColumn('number', 'total_number');
        data.addRows([
        	['Vulnerable', 137],
        	['Endangered', 91],
        	['Critically Endangered', 37],
        	['Conservation Dependent', 5]
        	]);

        // Set chart options
        var options = {'title':'Conservation status of threatened species in Victoria',
        'width':400,
        'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
        chart.draw(data, options);
      }

      function drawChart_category() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'species');
        data.addColumn('number', 'Total Count');
        data.addRows([
        	['Birds', 48],
        	['Mammals', 27],
        	['Fishes', 18],
        	['Frogs', 10],
        	['Reptiles', 10],
        	['Other Animals', 6]
        	]);

        // Set options for Anthony's pie chart.
        var options = {title:'Number of Threatened Species classified by Species Class',
        width:400,
        height:300};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
        chart.draw(data, options);
      }
      Plotly.d3.csv("../statistics/df_count_fires.csv", function(err, rows){

       function unpack(rows, key) {
        return rows.map(function(row) { return row[key]; });
      }


      var trace1 = {
        type: "scatter",
        mode: "lines",
        name: 'Bushfire Count',
        x: unpack(rows, 'date_of_fire'),
        y: unpack(rows, 'number_burning'),
        line: {color: '#17BECF'}
      }

      var data = [trace1];

      var layout = {
        title: {'text':'<b>Number of Bushfires (Nov 21, 2019 to Dec 31, 2019) in Victoria</b>',
        'font':{'color':'black', 'size':15},
        'x':0.55, 'xanchor':'right', 'y':0.9, 'yanchor':'top'
      },
      yaxis: {
        title: 'Number of Bushfires'
      },
      xaxis:{
        title:'Date'
      }
    };

    Plotly.newPlot('myDiv_1', data, layout);
  })

      Plotly.d3.csv('../statistics/nasa_data_bushfire.csv', function(err, rows){

       var classArray = unpack(rows, 'class');
       var classes = [...new Set(classArray)];

       function unpack(rows, key) {
        return rows.map(function(row) { return row[key]; });
      }

      var data = classes.map(function(classes) {
        var rowsFiltered = rows.filter(function(row) {
         return (row.class === classes);
       });
        return {
         type: 'scattermapbox',
         name: classes,
         lat: unpack(rowsFiltered, 'LATITUDE'),
         lon: unpack(rowsFiltered, 'LONGITUDE')
       };
     });

      var layout = {
        title: 'Bushfire Locations in Victoria',
        font: {
         color: 'black'
       },
       dragmode: 'zoom',
       mapbox: {
         center: {
          lat: -37.8136,
          lon: 144.9631
        },
        domain: {
          x: [0, 1],
          y: [0, 1]
        },
        style: 'light',
        zoom: 4
      },
      margin: {
       r: 20,
       t: 40,
       b: 20,
       l: 20,
       pad: 0
     },
     paper_bgcolor: '#e1fff1',
     plot_bgcolor: '#e1fff1',
     showlegend: true,
     annotations: [{
       x: 0,
       y: 0,
       xref: 'paper',
       yref: 'paper',
       text: 'Source: <a href="https://earthdata.nasa.gov/earth-observation-data/near-real-time/firms/active-fire-data" style="color: rgb(255,255,255)">NASA</a>',
       showarrow: false
     }]
   };

   Plotly.setPlotConfig({
    mapboxAccessToken: "pk.eyJ1IjoicmlzaGFiaDQzIiwiYSI6ImNrYTI1eDQyYjA4dmUzZm1oMnVhMHB4NXkifQ.9zkORRLzVOZUUEo7oQ_0Eg"
  });

   Plotly.newPlot('myDiv_2', data, layout);
 });
