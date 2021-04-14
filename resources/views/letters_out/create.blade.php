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
                    <li class="breadcrumb-item"><a href="{{ route('letter') }}">Surat Keluar</a></li>
                    <li class="breadcrumb-item active">Tambah</li>
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
                                <h3 class="card-title">Informasi Surat</h3>
                            </div>
                            <div class="col-md-6 col-6">
                                <a href="{{ route('out') }}" class="btn btn-danger btn-sm float-right"><i
                                        class="fas fa-fw fa-arrow-left mr-1"></i>Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('out.store') }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-7">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="perihal">Perihal</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="perihal" name="perihal"
                                                    value="{{ old('perihal') }}" autocomplete="off">
                                                @error('perihal')
                                                    <div class="text-danger mt-2">
                                                        Perihal wajib diisi
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="ordner">Ordner</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="ordner" name="ordner"
                                                    value="{{ old('ordner') }}" autocomplete="off">
                                                @error('ordner')
                                                    <div class="text-danger mt-2">
                                                        Ordner wajib diisi
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="hasil">Upload File</label>
                                                <input type="file" class="form-control-file" id="hasil" name="hasil">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success mt-3"><i
                                    class="fas fa-fw fa-check mr-1"></i>Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('third_party_scripts')

@endsection
