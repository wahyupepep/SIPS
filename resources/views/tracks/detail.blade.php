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

<body style="background-color:aliceblue">
    <div class="container mt-5">
        <!-- Timelime example  -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="row">
                            <div class="col-md-6 col-6 my-auto">
                                <h3 class="card-title">Data Progress Surat</h3>
                            </div>
                            <div class="col-md-6 col-6">
                                <a href="/" class="btn btn-danger btn-sm float-right"><i
                                        class="fas fa-fw fa-home mr-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Kembali Ke Halaman Awal"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- The time line -->
                        <div class="timeline">
                            <!-- timeline time label -->
                            <div class="time-label">
                                <span class="bg-warning">Timeline</span>
                            </div>
                            <!-- /.timeline-label -->
                            @foreach ($letter->progresses as $progress)
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-envelope bg-primary"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fas fa-clock"></i>
                                            {{ date_format($progress->created_at, 'd-M-Y') }}</span>
                                        <h3 class="timeline-header">{{ $progress->status[0] }}</h3>

                                        <div class="timeline-body">
                                            {{ $progress->keterangan }}
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                            @endforeach                            
                            <div>
                                <i class="fas fa-clock bg-gray"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
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
