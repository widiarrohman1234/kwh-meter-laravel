@extends('template.base')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Home</h2>
            <br>
            <h4 id="tanggal"></h4>
        </div>
        <!-- CPU Usage -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>kWh USAGE (%)</h2>
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
        <!-- #END# CPU Usage -->
    </div>
</section>
<script>
    // buat array hari dan bulan dalam bahasa Indonesia
    var namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu'];
    var namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    // buat objek Date untuk mendapatkan waktu saat ini
    var waktu = new Date();

    // buat string dengan format tanggal yang diinginkan
    var tanggal = namaHari[waktu.getDay()] + ', ' + waktu.getDate() + ' ' + namaBulan[waktu.getMonth()] + ' ' + waktu.getFullYear() + ' ' + waktu.getHours() + ':' + waktu.getMinutes() + ':' + waktu.getSeconds();

    // tampilkan tanggal di dalam elemen HTML dengan id "tanggal"
    document.getElementById("tanggal").innerHTML = tanggal;
</script>
@endsection