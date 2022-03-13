<?php
var_dump($json);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <canvas id="myChart" height="100"></canvas>
    <script src="chart.js"></script>
    <script id="chartConfig">
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January","February","March","April","May","June","July"],
                datasets: [{
                    label: 'Stock de batteries',
                    data: [65,59,90,81,56,55,40],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script id="event">
        var canvas = document.getElementById("myChart");
        canvas.addEventListener("click", clickHandler, false);

        function clickHandler(click) {
            const points = myChart.getElementsAtEventForMode(click, 'nearest', {intersect: false}, true);
            if(points.length){
                const firstPoint = points[0];

                //get specific label by index 
                var label = myChart.data.labels[firstPoint['index']];
                //get value by index      
                var valuePointer = myChart.data.datasets[0];   
                //valuePointer.data[firstPoint['index']] = valuePointer.data[firstPoint['index']] - 1;             
                /* other stuff that requires slice's label and value */
                console.log(firstPoint.element.y + " " + click.clientY);
                if(click.clientY <= firstPoint.element.y){
                    //miakatra
                    valuePointer.data[firstPoint['index']] = valuePointer.data[firstPoint['index']] + 1;
                } else {
                    //midina
                    valuePointer.data[firstPoint['index']] = valuePointer.data[firstPoint['index']] - 1;
                }
                myChart.update();
            }
        }

        //Get Mouse Position
        function getMousePos(canvas, evt) {
            var rect = canvas.getBoundingClientRect();
            return {
                x: evt.clientX - rect.left,
                y: evt.clientY - rect.top
            };
        }
    </script>
</body>
</html>