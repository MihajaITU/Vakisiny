<?php
var_dump($json);
// var_dump($etat);
?>
<!doctype html>
<html>
	<head>
		<title>Line Chart</title>
		<script src="<?php echo base_url("assets")?>/js/Chart.js"></script>
		<meta name = "viewport" content = "initial-scale = 1, user-scalable = no">
		<style>
			canvas{
			}
		</style>
	</head>
	<body>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="<?php echo base_url("assets")?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url("assets")?>/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title></title>
	</head>
    <body style=""><center>
        
	<script src="../js/jquery.js"></script>
    <script src="../script/min.js"></script>
		<canvas id="canvas" height="450" width="600"></canvas>

	
	<script>
		console.log(<?php echo $json?>.nom);
		var lineChartData = {
			labels : <?php echo $json?>.nom,
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : <?php echo $json?>.Unite
				}
				,
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					data : <?php echo $json?>.Unite
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
	
	</script>
	</body>

</html>
