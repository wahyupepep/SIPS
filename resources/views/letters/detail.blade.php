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
                    <li class="breadcrumb-item active">Surat</li>
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
                                <h3 class="card-title">Detail Surat</h3>
                            </div>
                            <div class="col-md-6 col-6">
                                <a href="{{ route('letter') }}" class="btn btn-danger btn-sm float-right"><i
                                        class="fas fa-fw fa-arrow-left mr-1"></i>Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>No. Surat</label>
                                </div>
                                <div class="col-md-10">
                                    : {{ $letter->no_surat }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Tanggal Surat</label>
                                </div>
                                <div class="col-md-10">
                                    <p>: {{ $letter->tgl_surat }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Asal</label>
                                </div>
                                <div class="col-md-10">
                                    <p>: {{ $letter->asal }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Perselisihan</label>
                                </div>
                                <div class="col-md-10">
                                    <p>: {{ $letter->perselisihan }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Deskripsi Singkat</label>
                                </div>
                                <div class="col-md-10">
                                    <p>: {{ $letter->isi }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Foto</label>
                                </div>
                                <div class="col-md-10">
                                    :<img src="{{asset('storage/' . $letter->image) }}" width="400">
                                    {{-- <img src="{{ Storage::url("/storage/app/{$letter->image}") }}" alt="{{ $letter->image }}" /> --}}
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <a href="{{ route('letter.edit', $letter)}}" class="btn bg-gradient-warning"><i
                                class="fas fa-pen mr-1"></i>Ubah</a>
                            <a href="{{ route('letter.delete', $letter)}}" class="btn bg-gradient-danger ml-1"><i
                                class="fas fa-trash mr-1"></i>Hapus</a>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
