<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <title>{{ config('app.name') }}</title>

</head>

<body style="background-image:url({{ asset('image/bgg.jpg') }});">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-9">                
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="row">
                            <div class="col-md-6 col-6 my-auto text-white">
                                <h3 class="card-title">Hasil Penelusuran</h3>
                            </div>
                            <div class="col-md-6 col-6">
                                <a href="/" class="btn btn-success btn-sm float-right"><i
                                        class="fas fa-fw fa-home mr-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Kembali Ke Halaman Awal"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="background-color: aliceblue">
                        <div class="list-group">
                            @foreach ($letters as $letter)
                                <a href="{{ route('track.detail', $letter->id) }}"
                                    class="list-group-item list-group-item-action hovered mb-1" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{ $letter->no_surat }}</h5>
                                        {{-- <small>{{ $letter->progresses[sizeof($letter->progresses) - 1]['status'] }}</small> --}}
                                        <small>{{ $letter->name }}</small>
                                    </div>
                                    <p class="mb-1">{{ $letter->asal }}</p>
                                    <small>{{ $letter->isi }}</small>
                                </a>
                            @endforeach
                        </div>     
                    </div>
                </div>
            </div>                  
        </div>
    </div>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>
