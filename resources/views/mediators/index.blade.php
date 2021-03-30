@extends('layouts.app')
@section('content-header')
    <div class="content-header">
        <div class="row">
            <div class="col-md-6">
                <h4>Mediator</h4>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Mediator</li>
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
                                <h3 class="card-title">Data Mediator</h3>
                            </div>
                            <div class="col-md-6 col-6">
                                <a href="" class="btn btn-primary btn-sm float-right"><i
                                        class="fas fa-fw fa-plus mr-1"></i>Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="listmediator" class="table table-bordered table-hover">
                                <thead class="text-center thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>nip</th>
                                        <th>email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $no => $user)
                                        <tr>
                                            <td class="text-center">{{ $users->firstItem() + $no }}</td>
                                            <td class="text-center">{{ $user->name }}</td>
                                            <td class="text-center">{{ $user->nip }}</td>
                                            <td class="text-center">{{ $user->email }}</td>
                                            {{-- <td class="text-center">
                                                <a href="{{ route('user.detail', $user) }}"
                                                    class="badge badge-info">Detail
                                                </a>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="float-right mt-3">
                            {{ $users->links() }}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
