<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChartJs</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(255, 26, 104, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(255, 26, 104, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 700px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(255, 26, 104, 1);
        background: white;
      }
    </style>
  </head>
  <body>
    <div class="chartMenu">
    </div>
    <div class="chartCard">
      <div class="chartBox" onclick="showCords(Window.Event)">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <!-- <script type="text/javascript" src="<?php echo base_url("assets")?>/js/mychart.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url("assets")?>/js/mychart.js"></script>


    <script>
    // setup 
    console.log(<?php echo $json?>.nom);
    const data = {
      labels: <?php echo $json?>.nom,
      datasets: [{
        label: 'Nombres',
        data: <?php echo $json?>.Unite,
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };
    
    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
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
                console.log(label);
                var valuePointer = myChart.data.datasets[0];   
                //valuePointer.data[firstPoint['index']] = valuePointer.data[firstPoint['index']] - 1;             
                /* other stuff that requires slice's label and value */
                console.log(firstPoint.element.y + " " + click.clientY);
                if(click.clientY <= firstPoint.element.y){
                    //miakatra
                    valuePointer.data[firstPoint['index']] = valuePointer.data[firstPoint['index']] + 1;
                    console.log("miakatra");
                } else {
                    //midina
                    valuePointer.data[firstPoint['index']] = valuePointer.data[firstPoint['index']] - 1;
                    console.log("midina");

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