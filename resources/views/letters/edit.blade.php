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
                                <a href="{{ route('letter') }}" class="btn btn-sm btn-danger float-right">Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('letter.update', $letter) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <!-- no_surat -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="no_surat">No. Surat</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control"
                                            id="no_surat" name="no_surat" value="{{ old('no_surat', $letter->no_surat) }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="tgl_surat">Tanggal Surat</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control"
                                            id="tgl_surat" name="tgl_surat" value="{{ old('tgl_surat', $letter->tgl_surat) }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="asal">Asal Surat</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control"
                                            id="asal" name="asal" value="{{ old('asal', $letter->asal) }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="perselisihan">Jenis perselisihan</label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="perselisihan" id="inlineRadio1"
                                                value="Hak" {{ $letter->perselisihan == 'Hak' ? 'checked':'' }}>
                                            <label class="form-check-label" for="inlineRadio1">Hak</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="perselisihan" id="inlineRadio2"
                                                value="Kepentingan" {{ $letter->perselisihan == 'Kepentingan' ? 'checked':'' }}>
                                            <label class="form-check-label" for="inlineRadio2">Kepentingan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="perselisihan" id="inlineRadio2"
                                                value="PHK" {{ $letter->perselisihan == 'PHK' ? 'checked':'' }}>
                                            <label class="form-check-label" for="inlineRadio2">PHK</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="perselisihan" id="inlineRadio2"
                                                value="SP/SB" {{ $letter->perselisihan == 'SP/SB' ? 'checked':'' }}>
                                            <label class="form-check-label" for="inlineRadio2">SP/SB</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="isi">Deskripsi Singkat</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea type="text" class="form-control"
                                        id="isi" name="isi" autocomplete="off">
                                        {{ old('isi', $letter->isi) }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="image">Upload</label>
                                    </div>
                                    <div class="col-md-10"> 
                                        <input type="file" class="form-control-file" id="image" name="image">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mt-3 ">Submit</button>
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
