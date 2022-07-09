<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Covid Provinsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    {{-- @dd($response) --}}
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card mb-3">
                    <img src="..." class="card-img-top" alt="dki_jakarta">
                    <div class="card-body text-center">
                        <h4 class="card-title">{{ $response['key'] }}</h4>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <h5 class="text-info">Jumlah Kasus</h5>
                                <p>{{ $response['jumlah_kasus'] }}</p>
                            </div>
                        </div>
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
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <h5>Jenis Kelamin</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Laki - Laki</h6>
                                <p>{{ $response['jenis_kelamin'][0]['doc_count'] }}</p>
                            </div>
                            <div class="col-md-6">
                                <h6>Perempuan</h6>
                                <p>{{ $response['jenis_kelamin'][1]['doc_count'] }}</p>
                            </div>
                        </div>
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>