<html>
<head>
	<title>My first chart using FusionCharts Suite XT</title>
	<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
	<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

    <script src="https://code.jquery.com/jquery-latest.js"></script>
    	<script type="text/javascript">


        $(document).ready(function() {
var refreshId = setInterval( function(){
 //$('#feedback-bg-info').load('chat.php');//actualizas el div automaticamente
 $.ajax({
            url:"{{ url('datos') }}",
            method:"get",
            dataType: "json",
            success:function(data){
                console.log(data);
                damevalor(data);
            }});

}, 3000 );
});
function damevalor(data){

 //   valog = {!!json_encode($velocidad)!!};
    val=data['velocidad'];
    FusionCharts.ready(function(){
         //   val="50";
			var chartObj = new FusionCharts({
    type: 'angulargauge',
    renderAt: 'chart-container',
    width: '450',
    height: '300',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Velocidad del motor",
            "subcaption": "Velocidad en tiempo real",
            "lowerLimit": "0",
            "upperLimit": "1300",
            // "theme": "fusion"
        },
        "colorRange": {
            "color": [{
                "minValue": "0",
                "maxValue": "500",
                "code": "#e44a00"
            }, {
                "minValue": "500",
                "maxValue": "800",
                "code": "#f8bd19"
            }, {
                "minValue": "800",
                "maxValue": "1000",
                "code": "#6baa01"
            }
            , {
                "minValue": "1000",
                "maxValue": "1300",
                "code": "#a702aa"
            }]
        },
        "dials": {
            "dial": [{
                "value": val
            }]
        }
    }
}
);
			chartObj.render();
		});
}

	</script>
	</head>
	<body>
    <h2>esto no se actualiza</h2>
    <form action="" method="get">
        <input type="date" name="hora" id="hora">
    </form>
		<div id="chart-container">FusionCharts XT will load here!</div>
         <input type="button" value="mostrar" onclick="damevalor(600)">
	</body>
</html>
