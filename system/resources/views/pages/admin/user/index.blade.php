@extends('template.base')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>User Management Page</h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BASIC EXAMPLE
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <!-- <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li> -->
                            <a href="{{url('admin/user/create')}}">
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
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($list_user as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$d->username}}</td>
                                        <td>{{$d->email}}</td>
                                        <td>{{$d->level}}</td>
                                        <td>{{$d->status}}</td>
                                        <td>

                                            <div class="btn-group" role="group">
                                                <a href="{{url('admin/user/edit',$d->id)}}">
                                                    <button type="button" class="btn btn-warning waves-effect">
                                                        edit
                                                    </button>
                                                </a>
                                                @include('template.utils.delete', ['url' => url('admin/user/destroy', $d->id)])
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