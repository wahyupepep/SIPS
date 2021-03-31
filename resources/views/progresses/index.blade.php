@extends('layouts.app')
@section('content-header')
    <div class="content-header">
        <div class="row">
            <div class="col-md-6">
                <h4>Progress</h4>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Progress</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 col-6 my-auto">
                                <h3 class="card-title">Data Progress</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="listmediator" class="table table-bordered table-hover">
                                <thead class="text-center thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>No. Surat</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($progresses as $no => $progress)
                                        <tr>
                                            <td>{{ $progresses->firstItem() + $no }}</td>
                                            <td>{{ $progress->no_surat }}</td>
                                            <td>{{ $progress->status }}</td>
                                            <td>{{ $progress->keterangan }}</td>
                                            <td class="text-center">
                                                <a href=""
                                                    class="badge badge-success">Update
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="float-right mt-3">
                            {{ $progresses->links() }}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
