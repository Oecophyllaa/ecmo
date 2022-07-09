<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Covid Provinsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    {{-- @dd($responses) --}}
    <div class="container">
        <div class="row mt-3">
            @foreach ($responses as $response)
            <div class="col-md-6 my-3">
                    <div class="card text-center">
                        <div class="card-header">
                            {{ $response['key'] }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Kasus</h5>
                            <p class="card-text">{{ $response['jumlah_kasus'] }}</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="text-danger">Meninggal</h6>
                                    <p>{{ $response['jumlah_meninggal'] }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="text-warning">Dirawat</h6>
                                    <p>{{ $response['jumlah_dirawat'] }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="text-success">Sembuh</h6>
                                    <p>{{ $response['jumlah_sembuh'] }}</p>
                                </div>
                            </div>
                            <a href="/covid/{{ $loop->index }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer text-muted">
                            <p>Last Update</p>
                            {{ $last_update['last_date'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>