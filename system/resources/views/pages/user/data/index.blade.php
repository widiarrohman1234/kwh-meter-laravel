@extends('template.base')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>BANGUNAN</h2>
        </div>
        <!-- Voltase (V) -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Voltase (V)</h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <span class="m-r-10 font-12">REAL TIME</span>
                                    <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                </div>
                            </div>
                        </div>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="real_time_chart" class="dashboard-flot-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Voltase (V) -->


        <div class="row row-cols-1 row-cols-md-2 g-4">
            //GRAFIK VOLTAGE
            <div class="col">
                <div class="card tr-card h-100 border-0 shadow-sm p-3 p-3">
                    <div class="card-body">
                        <h5 class="card-title">Voltage</h5>
                        <div>
                            <canvas id="voltageChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scriptsChart')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = [
        // for ($i = 0; $i < $count_list_data_kwh; $i++) {
        //     echo $get_list_data_kwh[$i]->id . ",";
        //     // echo $i . ",";
        // }
        // ?>
        228.8, 228.7, 228.8, 228.9, 228.8, 228.7, 228.7, 228.6, 228.7, 228.6, 228.7, 228.7, 228.8, 228.7, 228.7, 228.8, 228.7, 228.7

    ];
    // GRAFIK VOLTAGE ------------------------------
    const dataVoltage = {
        labels: labels,
        datasets: [{
            label: 'Voltage (V)',
            backgroundColor: '#673783',
            borderColor: '#673783',
            data: [

                // while ($row = mysqli_fetch_array($voltage)) {
                //     echo $row['voltage'] . ", ";
                // } 
                // for ($data = 0; $data <= $count_list_data_kwh; $data++) {
                //    echo $get_list_data_kwh[$data];
                // }
                // while ($row = $get_list_data_kwh) {
                //     echo $row['voltage'] . ", ";
                // }
                // dd($get_list_data_kwh[0]->voltage); 
                // echo $count_list_data_kwh;
                // for ($i = 0; $i < $count_list_data_kwh; $i++) {
                //     echo $get_list_data_kwh[$i]->voltage . ",";
                //     // echo $i . ",";
                // }
                // ?>
                228.8, 228.7, 228.8, 228.9, 228.8, 228.7, 228.7, 228.6, 228.7, 228.6, 228.7, 228.7, 228.8, 228.7, 228.7, 228.8, 228.7, 228.7
            ],
        }]
    };
    const configVoltage = {
        type: 'line',
        data: dataVoltage,
        options: {
            animation: {
                duration: 0
            },
        }
    };
    const voltageChart = new Chart(
        document.getElementById('voltageChart'),
        configVoltage
    );
</script>
@endpush