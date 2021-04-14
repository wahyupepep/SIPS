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
                                <h3 class="card-title">Informasi Surat</h3>
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
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="no_surat">No. Surat</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="no_surat" name="no_surat"
                                                    value="{{ old('no_surat', $letter->no_surat) }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="tgl_surat">Tanggal Surat</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="date" class="form-control" id="tgl_surat" name="tgl_surat"
                                                    value="{{ old('tgl_surat', $letter->tgl_surat) }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="tgl_terima">Tanggal Terima</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="date" class="form-control" id="tgl_terima" name="tgl_terima"
                                                    value="{{ old('tgl_terima', $letter->tgl_terima) }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="asal">Asal Surat</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="asal" name="asal"
                                                    value="{{ old('asal', $letter->asal) }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="seksi">Jenis seksi</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="seksi"
                                                        id="inlineRadio1" value="KHI"
                                                        {{ $letter->seksi == 'KHI' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">KHI</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="seksi"
                                                        id="inlineRadio2" value="Syaker"
                                                        {{ $letter->seksi == 'Syaker' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Syaker</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="seksi"
                                                        id="inlineRadio2" value="Pengupahan"
                                                        {{ $letter->seksi == 'Pengupahan' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Pengupahan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="perselisihan">Jenis Perselisihan</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="perselisihan"
                                                        id="inlineRadio1" value="Hak"
                                                        {{ $letter->perselisihan == 'Hak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">Hak</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="perselisihan"
                                                        id="inlineRadio2" value="Kepentingan"
                                                        {{ $letter->perselisihan == 'Kepentingan' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Kepentingan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="perselisihan"
                                                        id="inlineRadio2" value="PHK"
                                                        {{ $letter->perselisihan == 'PHK' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">PHK</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="perselisihan"
                                                        id="inlineRadio2" value="SP/SB"
                                                        {{ $letter->perselisihan == 'SP/SB' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">SP/SB</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="isi">Perihal</label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea type="text" class="form-control" id="isi" name="isi"
                                                    autocomplete="off">
                                                            {{ old('isi', $letter->isi) }}
                                                            </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="keterangan">Keterangan</label>
                                            </div>
                                            <div class="col-md-8">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="image">Upload Foto</label>
                                                @if ($letter->image)
                                                    <img id="original" src="{{ url('storage/' . $letter->image) }}"
                                                        width="400">
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
