@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">You are logged in!</h1>
        {{-- <div class="row mt-3">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ DB::table('letters')->count() }}</h3>

                        <p>Surat</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div> --}}
    </div>

@endsection
