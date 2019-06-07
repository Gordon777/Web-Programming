<?php
$connect = mysqli_connect("localhost","root","root","DBHW")
$query="SELECT `居住地區`,COUNT(`居住地區`) as 各地區居住人數 FROM 會員資料檔 GROUP by `居住地區`";
$result=mysqli_query($connect,$query);
?>
 

 <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['居住地區', '各地區居住人數'],
        <?php
         while($row=mysql_fetch_array($result))
         {
             echo "['".$row["居住地區"]."',".$row["各地區居住人數"]."],";
         }   
            
            
        ?>
        ]);

        var options = {
          title: '會員分布地區'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>