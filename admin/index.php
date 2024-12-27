<?php
require_once 'header.php';
require '../koneksi.php';
?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard Data Antrian</h1>
          </div>
          <canvas class="my-4 w-100" id="AntrianChart" width="900" height="380"></canvas>
        </main>
      </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../plugins/chart.js/Chart.min.js" ></script>


    <!-- CHART -->
    <script>
      <?php 
          $antrian = mysqli_query($conn,"select poli, count(poli) as jml from t_antrian group by poli");
          while($dr = mysqli_fetch_array($antrian)){
            $poli[] = $dr['poli'];
            $jml[] = $dr['jml'];
          }
        ?>

        var ctx = document.getElementById("AntrianChart").getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels:  <?php echo json_encode($poli); ?>,
            datasets: [{
              label: 'Jumlah Antrian',
              data: <?php echo json_encode($jml); ?>,
              backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 2
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero:true
                }
              }]
            }
          }
        });
      </script>


  </body>
</html>
