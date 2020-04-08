<?php
$_r_ = '../';
include($_r_.'_tema/adminlte.php');

$tab_caption = 'Grafik';
$judul_content = 'Contoh Grafik (Chart)';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php html_head();?>
    <?php html_link_css($_r_);?>
    <?php html_link_js($_r_);?>
    <title><?php echo $tab_caption;?></title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php html_body_nav();?>
            <?php html_body_sidebar_open();?>
                <?php sidebar_akun($_r_);?>
                <?php sidebar_menu_open();?>
                <?php include($_r_.'_config/menu.php');?>
                <?php sidebar_menu_close();?>
            <?php html_body_sidebar_close();?>

            <?php html_body_content_open($judul_content);?>
            <!--Mulai Conten dari sini-->
            <small>File Contoh Grafik Ada Pada : <b>contoh_layout/grafik.php</b></small>

            <div class="row">
                <!-- /.Kolom Grafik-->
                <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">GRAFIK : AREA</h3>
                            </div>
                            <div class="card-body">
                            <!-- Kanvas Grafik Area-->
                            <canvas id="grafik_area" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            <!-- /.Kanvas Grafik Area-->
                            </div>
                        </div>
                        
                </div>
                <!-- /.Kolom Grafik-->
                <!-- Kolom Grafik-->
                <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">GRAFIK : LINE</h3>
                            </div>
                            <div class="card-body">
                            <!-- Kanvas Grafik Line-->
                            <canvas id="grafik_line" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            <!-- /.Kanvas Grafik Line-->
                            </div>
                        </div>
                        
                </div>
                <!-- /.Kolom Grafik-->
                <!-- Kolom Grafik-->
                <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">GRAFIK : BAR</h3>
                            </div>
                            <div class="card-body">
                            <!-- Kanvas Grafik Bar-->
                            <canvas id="grafik_bar" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            <!-- /.Kanvas Grafik Bar-->
                            </div>
                        </div>
                        
                </div>
                <!-- /.Kolom Grafik-->
                <!-- Kolom Grafik-->
                <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">GRAFIK : PIE</h3>
                            </div>
                            <div class="card-body">
                            <!-- Kanvas Grafik Pie-->
                            <canvas id="grafik_pie" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            <!-- /.Kanvas Grafik Pie-->
                            </div>
                        </div>
                        
                </div>
                <!-- /.Kolom Grafik-->
            </div>  
            <!--/.Content Sampai di sini-->
            <?php html_body_content_close();?>
    </div>
</body>
</html>
<script>
    //SCRIPT GRAFIK AREA
    var kanvas_grafik_area = $('#grafik_area').get(0).getContext('2d');
    var data_grafik_area = {
        labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mai', 'Juni', 'Juli'],
        datasets: [
            {
            label               : 'Pisang Goreng',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [28, 48, 40, 19, 86, 27, 90]
            },
            {
            label               : 'Tahu Isi',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 81, 56, 55, 40]
            },
        ]
    }
    var options_grafik_area = {
        maintainAspectRatio : true,
        responsive : true,
        legend: {
            display: true
        },
        scales: {
            xAxes: [{
            gridLines : {
                display : true,
            }
            }],
            yAxes: [{
            gridLines : {
                display : true,
            }
            }]
        }
    }
    var grafik_area = new Chart(kanvas_grafik_area, { 
        type: 'line',
        data: data_grafik_area, 
        options: options_grafik_area
    });
    //.SCRIPT GRAFIK AREA

    //SCRIPT GRAFIK LINE
    var kanvas_grafik_line = $('#grafik_line').get(0).getContext('2d');
    var data_grafik_line = {
        labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mai', 'Juni', 'Juli'],
        datasets: [
            {
            label               : 'Bakar Rica',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [28, 48, 40, 19, 86, 27, 90]
            },
            {
            label               : 'Garo Rica',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 81, 56, 55, 40]
            },
        ]
    }
    var options_grafik_line = {
        maintainAspectRatio : true,
        responsive : true,
        legend: {
            display: true
        },
        scales: {
            xAxes: [{
            gridLines : {
                display : true,
            }
            }],
            yAxes: [{
            gridLines : {
                display : true,
            }
            }]
        }
    }

    data_grafik_line.datasets[0].fill = false;
    data_grafik_line.datasets[1].fill = false;
    data_grafik_line.datasetFill = false
    var grafik_line = new Chart(kanvas_grafik_line, { 
        type: 'line',
        data: data_grafik_line, 
        options: options_grafik_line
    })
    //.SCRIPT GRAFIK LINE

    //SCRIPT GRAFIK BAR
    var kanvas_grafik_bar = $('#grafik_bar').get(0).getContext('2d');
    var data_grafik_bar = {
        labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mai', 'Juni', 'Juli'],
        datasets: [
            {
            label               : 'Kopi',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [28, 48, 40, 19, 86, 27, 90]
            },
            {
            label               : 'Susu',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 81, 56, 55, 40]
            },
        ]
    }
    var option_grafik_bar = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
    }
    var grafik_bar = new Chart(kanvas_grafik_bar, {
        type: 'bar', 
        data: data_grafik_bar,
        options: option_grafik_bar
    })
    //.SCRIPT GRAFIK BAR

    //SCRIPT GRAFIK PIE
    var kanvas_grafik_pie = $('#grafik_pie').get(0).getContext('2d');
    var data_grafik_pie = {
        labels: [
            'Kopi', 
            'Teh',
            'Susu', 
            'Jus Mangga', 
            'Jus Alvokad', 
            'Perasan Jeruk', 
        ],
        datasets: [
            {
            data: [700,500,400,600,300,100],
            backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }
        ]
    }
    var option_grafik_pie     = {
        maintainAspectRatio : false,
        responsive : true,
    }

    var grafik_pie = new Chart(kanvas_grafik_pie, {
        type: 'pie',
        data: data_grafik_pie,
        options: option_grafik_pie      
    })
    //.SCRIPT GRAFIK PIE
    </script>