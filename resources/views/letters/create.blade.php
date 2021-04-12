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
                                <a href="{{ route('letter') }}" class="btn btn-danger btn-sm float-right"><i
                                        class="fas fa-fw fa-arrow-left mr-1"></i>Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('letter.store') }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-7">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="no_surat">No. Surat</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="no_surat" name="no_surat"
                                                    value="{{ old('no_surat') }}" autocomplete="off">
                                                @error('no_surat')
                                                    <div class="text-danger mt-2">
                                                        No. Surat wajib diisi
                                                    </div>
                                                @enderror
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
                                                    value="{{ old('tgl_surat') }}" autocomplete="off">
                                                @error('tgl_surat')
                                                    <div class="text-danger mt-2">
                                                        Tanggal Surat wajib diisi
                                                    </div>
                                                @enderror
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
                                                    value="{{ old('tgl_terima') }}" autocomplete="off">
                                                @error('tgl_terima')
                                                    <div class="text-danger mt-2">
                                                        Tanggal Terima wajib diisi
                                                    </div>
                                                @enderror
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
                                                    value="{{ old('asal') }}" autocomplete="off">
                                                @error('asal')
                                                    <div class="text-danger mt-2">
                                                        Asal Surat wajib diisi
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="seksi">Seksi</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="seksi"
                                                        id="inlineRadio1" value="KHI">
                                                    <label class="form-check-label" for="inlineRadio1">KHI</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="seksi"
                                                        id="inlineRadio2" value="Syaker">
                                                    <label class="form-check-label" for="inlineRadio2">Syaker</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="seksi"
                                                        id="inlineRadio2" value="Pengupahan">
                                                    <label class="form-check-label" for="inlineRadio2">Pengupahan</label>
                                                </div>
                                                @error('seksi')
                                                    <div class="text-danger mt-2">
                                                        Seksi wajib diisi
                                                    </div>
                                                @enderror
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
                                                        id="inlineRadio1" value="Hak">
                                                    <label class="form-check-label" for="inlineRadio1">Hak</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="perselisihan"
                                                        id="inlineRadio2" value="Kepentingan">
                                                    <label class="form-check-label" for="inlineRadio2">Kepentingan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="perselisihan"
                                                        id="inlineRadio2" value="PHK">
                                                    <label class="form-check-label" for="inlineRadio2">PHK</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="perselisihan"
                                                        id="inlineRadio2" value="SP/SB">
                                                    <label class="form-check-label" for="inlineRadio2">SP/SB</label>
                                                </div>
                                                @error('perselisihan')
                                                    <div class="text-danger mt-2">
                                                        Jenis Perselisihan wajib diisi
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="keterangan">Keterangan</label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea type="text" class="form-control" id="keterangan" name="keterangan"
                                                    value="{{ old('keterangan') }}" autocomplete="off">
                                                                                    </textarea>
                                                @error('keterangan')
                                                    <div class="text-danger mt-2">
                                                        Keterangan wajib diisi
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="isi">Perihal</label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea type="text" class="form-control" id="isi" name="isi"
                                                    value="{{ old('isi') }}" autocomplete="off">
                                                                                    </textarea>
                                                @error('isi')
                                                    <div class="text-danger mt-2">
                                                        Perihal wajib diisi
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
                                                <label for="image">Upload Foto</label>
                                                <input type="file" class="form-control-file" id="image" name="image">
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
