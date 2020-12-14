<div class="card mt-3">
    <div class="card-header info">
        MANAGES MAP
    </div>
    <div class="card-body">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Loại', 'Số Lượng'],
                <?php
                    foreach ($items as $item){
                        echo "['$item[name]', $item[tongso]],";
                    }
                ?>
            ]);
            var options = { title: 'Goods statistics', is3D: true };
                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                chart.draw(data, options);
            }
        </script>
        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </div>
</div>
