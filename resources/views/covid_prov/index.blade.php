<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Covid Provinsi</title>
    <link rel="stylesheet" href="{{ url('bootstrap-5.2.0/css/bootstrap.min.css') }}">
</head>

<body>
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
                            <a href="/covid/{{ $loop->index }}" class="btn btn-primary">Detail</a>
                        </div>
                        <div class="card-footer text-muted">
                            <p class="mb-0">Last Update</p>
                            {{ $last_update['last_date'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ url('bootstrap-5.2.0/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>