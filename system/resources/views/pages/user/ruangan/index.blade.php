@extends('template.base')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>RUANGAN</h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            RUANGAN TABLE
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <a href="{{url('user/ruangan/create')}}">
                                <button type="button" class="btn btn-primary waves-effect">TAMBAH</button>
                            </a>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Bangunan</th>
                                        <th>Nama Ruangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Bangunan</th>
                                        <th>Nama Ruangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($list_ruangan as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$d->nama_bangunan}}</td>
                                        <td>{{$d->nama_ruangan}}</td>
                                        <td>

                                            <div class="btn-group" role="group">
                                                <a href="{{url('user/ruangan/edit',$d->id)}}">
                                                    <button type="button" class="btn btn-warning waves-effect">
                                                        edit
                                                    </button>
                                                </a>
                                                @include('template.utils.delete', ['url' => url('user/ruangan/destroy', $d->id)])
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
@endsection