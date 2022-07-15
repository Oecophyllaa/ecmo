<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Covid Provinsi</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ url('bootstrap-5.2.0/css/bootstrap.min.css') }}">
    {{-- Leaflet --}}
    <link rel="stylesheet" href="{{ url('leaflet/leaflet.css') }}">
    <script src="{{ url('leaflet/leaflet.js') }}"></script>
    {{-- ChartJs --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 justify-content-end">
                <a href="/covid" class="btn btn-dark float-end">Back</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div id="map" style="height: 50vh"></div>
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
    <script src="{{ url('bootstrap-5.2.0/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        const lon = {!! json_encode($response['lokasi']['lon']) !!}
        const lat = {!! json_encode($response['lokasi']['lat']) !!}
        const map = L.map('map').setView([lat, lon], 10);
        L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);
    </script>
</body>

</html>