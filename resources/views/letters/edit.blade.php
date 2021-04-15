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
                    <li class="breadcrumb-item"><a href="{{ route('letter') }}">Surat</a></li>
                    <li class="breadcrumb-item active">Ubah</li>
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
                                <h3 class="card-title">Informasi Surat Masuk</h3>
                            </div>
                            <div class="col-md-6 col-6">
                                <a href="{{ route('letter') }}" class="btn btn-danger btn-sm float-right"><i
                                        class="fas fa-fw fa-arrow-left mr-1"></i>Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('letter.update', $letter) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="no_surat">No. Surat</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="no_surat" name="no_surat"
                                                    value="{{ old('no_surat', $letter->no_surat) }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="tgl_surat">Tanggal Surat</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" id="tgl_surat" name="tgl_surat"
                                                    value="{{ old('tgl_surat', $letter->tgl_surat) }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="tgl_terima">Tanggal Terima</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" id="tgl_terima" name="tgl_terima"
                                                    value="{{ old('tgl_terima', $letter->tgl_terima) }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="asal">Asal Surat</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="asal" name="asal"
                                                    value="{{ old('asal', $letter->asal) }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="seksi">Seksi</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="seksi" value="KHI"
                                                        {{ $letter->seksi == 'KHI' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineCheckbox1">KHI</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="seksi"
                                                        value="Syaker" {{ $letter->seksi == 'Syaker' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineCheckbox1">Syaker</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="seksi"
                                                        value="Pengupahan"
                                                        {{ $letter->seksi == 'Pengupahan' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineCheckbox1">Pengupahan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="seksi"
                                                        value="Pengaduan"
                                                        {{ $letter->seksi == 'Pengaduan' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineCheckbox1">Pengaduan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="isi">Perihal</label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea type="text" class="form-control" id="isi" name="isi"
                                                    autocomplete="off">
                                                    {{ old('isi', $letter->isi) }}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="keterangan">Keterangan</label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea type="text" class="form-control" id="keterangan" name="keterangan"
                                                    autocomplete="off">
                                                    {{ old('keterangan', $letter->keterangan) }}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="image">Upload File</label>
                                                @if ($letter->image)
                                                    <iframe class="w-100" src="{{ asset('storage/' . $letter->image) }}"
                                                        height="500">
                                                        This browser does not support PDFs.
                                                    </iframe>
                                                @endif
                                                <input type="file" class="form-control-file" id="image" name="image"
                                                    value="{{ $letter->image }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success mt-2 mb-3"><i
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
