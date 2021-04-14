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
                @include('layouts.alerts')
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
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="text-center thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>No. Surat</th>
                                        <th>Tanggal Terima</th>
                                        <th>Asal</th>
                                        <th>Perihal</th>
                                        {{-- <th>Perselisihan</th> --}}
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($surat as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $item->no_surat }}</td>
                                            <td>{{ $item->tgl_terima }}</td>
                                            <td>{{ $item->asal }}</td>
                                            <td>{{ $item->isi }}</td>
                                            {{-- <td>{{ $item->perselisihan }}</td> --}}
                                            <td>{{ $item->progresses[sizeof($item->progresses) - 1]['status'] }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('letter.detail', $item) }}"
                                                    class="btn btn-outline-info btn-sm " data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Detail Surat">
                                                    <i class="fas fa-clipboard-list"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- @foreach ($letters as $no => $letter)
                                        <tr>
                                            <td class="text-center">{{ $letters->firstItem() + $no }}</td>
                                            <td>{{ $letter->no_surat }}</td>
                                            <td>{{ $letter->tgl_surat }}</td>
                                            <td>{{ $letter->asal }}</td>
                                            <td>{{ $letter->perselisihan }}</td>
                                            <td>{{ $letter->progresses[sizeof($letter->progresses) - 1]['status'] }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('letter.detail', $letter) }}"
                                                    class="btn btn-outline-info btn-sm " data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Detail Surat">
                                                    <i class="fas fa-clipboard-list"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
