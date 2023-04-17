<?php



  ?>

<script>
  window.onload = function() {


    var chart = new CanvasJS.Chart("chartContainer", {
      theme: "light2",
      animationEnabled: true,
      data: [{
        type: "doughnut",
        indexLabel: "{symbol} - {y}",
        legendText: "{label} : {y}",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
      }]
    });
    chart.render();

  }
</script>

<div class="row">
</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>