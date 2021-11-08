<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" rel="stylesheet" />
<hr>

<?php

if (isset($_GET['startDate'])) $startDate = $_GET['startDate'];
else {
  $date = date('Y-m-d');
  $startDate = strtotime('-6 day', strtotime($date));
  $startDate = date('Y-m-d', $startDate);
}

if (isset($_GET['endDate'])) $endDate = $_GET['endDate'];
else $endDate = date('Y-m-d');

//find all orders between startDate and endDate
$ordersFind = "SELECT * FROM `orders` WHERE `created_day` BETWEEN '$startDate 00:00:00' AND '$endDate 23:59:59'";
$result = $conn->query($ordersFind);
?>

<div class="container">
  <form action="./index.php" method="get">
    <div class="row">
      <div class="col-xl-5">
        <label for="startDate">Ngày bắt đầu:</label>
        <input type="date" id="startDate" name="startDate" placeholder="dd-mm-yyyy" value="<?= $startDate; ?>">
      </div>
      <div class="col-xl-5">
        <label for="endDate">Ngày kết thúc:</label>
        <input type="date" id="endDate" name="endDate" value="<?= $endDate ?>">
      </div>
      <div class="col-xl-2">
        <input type="submit" value="Thống kê" class="btn btn-success btn-sm form-control">
      </div>
    </div>
  </form>
</div>
<div class="container bg-success py-2 my-3 rounded">
  <div class="row py-2 ms-2 me-2">
    <div class="col-4 pe-2 bg-white rounded">
      Số lượng hóa đơn: <span class="h3 ms-2"><?= $result->num_rows ?></span>
    </div>
    <span class="col-2"></span>
    <div class="col-6 bg-white rounded">
      Thụ nhập: <span class="h3 ms-2">
        <?php
        $sum = 0;
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_array()) {
            $sum += $row['total_amount'];
          }
        }
        echo number_format($sum, 0, ',', '.') . " VND";

        ?>
      </span>
    </div>
  </div>
</div>
<div id="chart" style="height: 400px; width: 99%;"></div>

<script>
  Morris.Line({
    element: 'chart',
    data: [
      <?php
      $datediff = strtotime($endDate) - strtotime($startDate);

      $datediff = $datediff / (60 * 60 * 24) + 1;
      for ($i = 0; $i < $datediff; $i++) {        
        $date = strtotime('+'.$i.' day', strtotime($startDate));
        $date = date('Y-m-d', $date);

        $totalOfDate = $conn->query("SELECT * FROM orders WHERE `created_day` BETWEEN '$date 00:00:00' AND '$date 23:59:59'");
        $sum = 0;
        if($totalOfDate->num_rows > 0){
          while($row = $totalOfDate->fetch_array()){
            $sum += $row['total_amount'];
          }
        }
      ?> {
          period: '<?= $date ?>',
          park1: <?= $sum ?>
        },
      <?php } ?>
    ],
    lineColors: ['#819C79', '#fc8710', '#FF6541', '#A4ADD3', '#766B56'],
    xkey: 'period',
    ykeys: ['park1'],
    labels: ['Thu nhập'],
    xLabels: 'day',
    xLabelAngle: 45,
    xLabelFormat: function(d) {
      var weekdays = new Array(7);
      weekdays[0] = "SUN";
      weekdays[1] = "MON";
      weekdays[2] = "TUE";
      weekdays[3] = "WED";
      weekdays[4] = "THU";
      weekdays[5] = "FRI";
      weekdays[6] = "SAT";

      return weekdays[d.getDay()] + '-' +
        ("0" + (d.getMonth() + 1)).slice(-2) + '-' +
        ("0" + (d.getDate())).slice(-2);
    },
    resize: true
  });
</script>