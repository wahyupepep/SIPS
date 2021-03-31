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
                                <h3 class="card-title">Data Surat</h3>
                            </div>
                            <div class="col-md-6 col-6">
                                <a href="{{ route('letter.create') }}" class="btn btn-primary btn-sm float-right"><i
                                        class="fas fa-fw fa-plus mr-1"></i>Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="listletter" class="table table-bordered table-hover">
                                <thead class="text-center thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>No. Surat</th>
                                        <th>Tanggal Surat</th>
                                        <th>Deskripsi Singkat</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($letters as $no => $letter)
                                        <tr>
                                            <td class="text-center">{{ $letters->firstItem() + $no }}</td>
                                            <td class="text-center">{{ $letter->no_surat }}</td>
                                            <td class="text-center">{{ $letter->tgl_surat }}</td>
                                            <td>{{ $letter->isi }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('letter.detail', $letter) }}"
                                                    class="badge badge-info">Detail
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="float-right mt-3">
                            {{ $letters->links() }}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection






















@section('third_party_scripts')

@endsection
