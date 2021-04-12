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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">No. Surat</label>
                                            <input type="text" class="form-control-plaintext border-0" readonly
                                                value="{{ $letter->no_surat }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Tanggal Surat</label>
                                            <input type="text" class="form-control-plaintext border-0" readonly
                                                value="{{ $letter->tgl_surat }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Tanggal Terima</label>
                                            <input type="text" class="form-control-plaintext border-0" readonly
                                                value="{{ $letter->tgl_terima }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Asal</label>
                                            <input type="text" class="form-control-plaintext border-0" readonly
                                                value="{{ $letter->asal }}">
                                        </div>
                                        {{-- <div class="col-md-12">
                                            <label class="form-label">Perselisihan</label>
                                            <input type="text" class="form-control-plaintext border-0" readonly
                                                value="{{ $letter->perselisihan }}">
                                        </div> --}}
                                        <div class="col-md-12">
                                            <label class="form-label">Seksi</label>
                                            <input type="text" class="form-control-plaintext border-0" readonly
                                                value="{{ $letter->seksi }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Keterangan</label>
                                            <input type="text" class="form-control-plaintext border-0" readonly
                                                value="{{ $letter->keterangan }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Perihal</label>
                                            <input type="text" class="form-control-plaintext border-0" readonly
                                                value="{{ $letter->isi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <a href="{{ route('letter.edit', $letter) }}"
                                    class="btn bg-gradient-warning btn-sm"><i class="fas fa-pen mr-1"></i>Ubah</a>
                                    <form action="{{ route('letter.delete', $letter) }}" method="POST" onsubmit="return confirm('Yakin Ingin Menghapus Data Ini?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn bg-gradient-danger btn-sm ml-1"><i
                                        class="fas fa-trash mr-1"></i>Hapus</button>
                                    </form>
                                    {{-- <a href="{{ route('letter.delete', $letter) }}"
                                    class="btn bg-gradient-danger btn-sm ml-1"><i
                                    class="fas fa-trash mr-1"></i>Hapus</a> --}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img class="w-100" src="{{ asset('storage/' . $letter->image) }}" alt="tidak ada gambar">
                            </div>
                            <div class="col-md-5">
                                <ul class="list-group">
                                    @foreach ($letter->progresses as $key => $progress)
                                        <li
                                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="font-weight-bold">{{ $progress['status'] }}</div>
                                                {{ $progress['keterangan'] }}
                                            </div>
                                            @if ((sizeof($letter->progresses)-1) <= $key)
                                                <a href="{{ route('progress.show', $progress) }}"
                                                    class="btn btn-info btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Ubah Keterangan">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                                <a href="{{ route('letter.add-status', $letter->id) }}"
                                    class="btn btn-primary mt-3 btn-block">Perbarui Status</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
