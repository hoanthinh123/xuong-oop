@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page_title_box d-flex align-items-center justify-content-between">
            <div class="page_title_left">
                <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                <ol class="breadcrumb page_bradcam mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Salessa </a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Sales</li>
                </ol>
            </div>
            <a href="#" class="white_btn3">Create Report</a>
        </div>
    </div>
</div>

<div class="row ">
    <div class="col-lg-12">
    <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tổng Số lượng sản phẩm
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $analysisProduct ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-bag fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="myChart" style="width:100%; max-width:600px; height:500px;">
        </div>
</div>
@endsection
@section('script')
    <script src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            let analysisProduct = JSON.parse('{!! json_encode($analysisProduct) !!}');
            
            // Set Data
            const data = google.visualization.arrayToDataTable(analysisProduct);
            // Set Options
            const options = {
                title: 'Sơ Đồ Sản Phẩm'
            };
            // Draw
            const chart = new google.visualization.BarChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>
    
@endsection