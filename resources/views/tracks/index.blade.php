@extends('layouts.app')
@section('content-header')
    <div class="content-header">
        <div class="row">
            {{-- <div class="col-md-6">
                <h4>Lacak</h4>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Lacak</li>
                </ol>
            </div> --}}
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <h2 class="text-center display-4">Lacak Surat</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="simple-results.html">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-lg" placeholder="Tulis Nomor Surat Di Sini">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
