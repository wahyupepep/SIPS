<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>{{ config('app.name') }}</title>

</head>

<body style="background-color: aliceblue">
    <div class="container mt-4 mb-5">
        <h1 class="text-center" style="font-family:Arial, Helvetica, sans-serif;"> Penelusuran Terkait</h1>
        <div class="card">
            <div class="card-body">
                <div class="list-group">
                    @foreach ($letters as $letter)
                        <a href="{{ route('track.detail', $letter->id) }}"
                            class="list-group-item list-group-item-action hovered" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $letter->no_surat }}</h5>
                                {{-- <small>{{ $letter->progresses[sizeof($letter->progresses) - 1]['status'] }}</small> --}}
                                <small>{{$letter->name}}</small>
                            </div>
                            <p class="mb-1">{{ $letter->isi }}</p>
                            <small>{{ $letter->asal }}</small>
                        </a>
                    @endforeach
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
