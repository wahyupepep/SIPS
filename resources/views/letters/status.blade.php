@extends('layouts.app')
@section('content-header')
    <div class="content-header">
        <div class="row">
            <div class="col-md-6">
                <h4>Surat</h4>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Update Progress</li>
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
                       <form action="{{ route('progress.update', $progress->id) }}" method="POST">
                           @csrf
                           @method('put')
                           <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="status">Progress</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" value="{{ $progress->status }}" class="form-control" readonly>                 
                                </div>
                            </div>
                        </div>
                           <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="asal">Keterangan</label>
                                </div>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10">{{ $progress->keterangan }}</textarea>                             
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mt-3 ">Update Progress</button>
                        </div>
                       </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection