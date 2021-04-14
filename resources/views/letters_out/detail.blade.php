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
                    <li class="breadcrumb-item active">Surat Keluar</li>
                    <li class="breadcrumb-item active">detail</li>
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
                                <h3 class="card-title">Detail Surat Keluar</h3>
                            </div>
                            <div class="col-md-6 col-6">
                                <a href="{{ route('out') }}" class="btn btn-danger btn-sm float-right"><i
                                        class="fas fa-fw fa-arrow-left mr-1"></i>Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Perihal</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control-plaintext border-0" readonly
                                                value="{{ $out->perihal }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Ordner</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control-plaintext border-0" readonly
                                                value="{{ $out->ordner }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <iframe class="w-100" src="{{ asset('storage/' . $out->hasil) }}"
                                                height="500">
                                                This browser does not support PDFs.
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('out.edit', $out) }}" class="btn bg-gradient-warning btn-sm"><i
                                    class="fas fa-pen mr-1"></i>Ubah</a>
                            <form action="{{ route('out.delete', $out) }}" method="POST"
                                onsubmit="return confirm('Yakin Ingin Menghapus Data Ini?')">
                                @method('delete')
                                @csrf
                                <button class="btn bg-gradient-danger btn-sm ml-1"><i
                                        class="fas fa-trash mr-1"></i>Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
