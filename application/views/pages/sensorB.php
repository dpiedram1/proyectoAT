<!DOCTYPE HTML>
<html>
<head>
    
    <?php
        $datos=array();
        $datos2=array();
        foreach ($temperatura as $temp_item): 
            $datos[] = $temp_item['Grados'];
            $datos2[] = $temp_item['Hora'];
        endforeach;
        $datosY = json_encode($datos);
        $datosX = json_encode($datos2);
                    
    ?>
    
    <script type="text/javascript">
        function crearCadena(json){
            var parsed = JSON.parse(json);
            var arr=[];
            for(var x in parsed){
                arr.push(parsed[x]);
            }
            return arr;
            }
    </script>
        
<script>
window.onload = function () {

var dataPoints1 = [];
var dataPoints2 = [];
var dataPoints3 = [];

var options = {
	title: {
		text: "Electricity Generation in Turbine"
	},
	axisX: {
		title: "chart updates every 2 secs"
	},
	axisY: {
		suffix: "°C",
		includeZero: false,
                gridColor: "lightblue"
	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor: "pointer",
		verticalAlign: "top",
		fontSize: 22,
		fontColor: "dimGrey",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "line",
		xValueType: "dateTime",
		yValueFormatString: "###.00°C",
		xValueFormatString: "hh:mm:ss TT",
		showInLegend: true,
		name: "Turbine 1",
		dataPoints: dataPoints1
	}]
};

var chart = $("#chartContainer").CanvasJSChart(options);

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	e.chart.render();
}

var updateInterval = 2000;
// initial value
var yValue1 = 0;
var arreglo = [];
var arreglo2 = [];

var time = new Date;
// starting at 10.00 am
//time.setHours(10);
//time.setMinutes(00);
//time.setSeconds(00);
//time.setMilliseconds(00);

function updateChart(count) {
	count = count || 1;
	var deltaY1, deltaY2, deltaY3;
        arreglo = crearCadena('<?php echo $datosY ?>');
        arreglo2 = crearCadena('<?php echo $datosX ?>');
        
	for (var i = 0; i < count; i++) {
		//time.setTime(time.getTime() + updateInterval);
		deltaY1 = -1 + Math.random() * (1 + 1);

		// adding random value and rounding it to two digits. 
		yValue1 = Math.round((yValue1 + deltaY1) * 100) / 100;
                var tiempo = arreglo2[i].split(":");
                time.setHours(tiempo[0],tiempo[1],tiempo[2]);
                var valorY = parseInt(arreglo[i]);
		// pushing the new values
		dataPoints1.push({
			x: time.getTime(),
			y: valorY
		});
	}

	// updating legend text with  updated with y Value 
	options.data[0].legendText = "Turbine 1 : "+ yValue1 +" °C";
	$("#chartContainer").CanvasJSChart().render();
}
// generates first set of dataPoints 
updateChart(10);
//setInterval(function () { updateChart() }, updateInterval);

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>