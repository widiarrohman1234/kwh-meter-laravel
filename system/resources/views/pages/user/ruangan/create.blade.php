@extends('template.base')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>RUANGAN</h2>
        </div>
        <!-- Horizontal Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            RUANGAN CREATE
                        </h2>
                    </div>
                    <div class="body">
                        <form class="form-horizontal" action="{{url('user/ruangan')}}" method="post">
                            @csrf
                            <input type="hidden" name="id_user" value="{{request()->user()->id}}">

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label>Nama Bangunan</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="col-sm-6">
                                        <div class="form-line">
                                            <div class="form-group">
                                                <select class="form-control show-tick" name="id_bangunan">
                                                    <option value="">-- PILIH --</option>
                                                    @foreach($list_bangunan as $d)
                                                    <option value="{{$d->id}}">{{$d->nama_bangunan}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Nama Ruangan</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_ruangan" class="form-control" placeholder="Nama Ruangan">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">TAMBAH</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <!-- #END# Horizontal Layout -->

    </div>
</section>
@endsection