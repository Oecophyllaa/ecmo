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
    {{-- @dd($graph) --}}
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
                        <div class="row justify-content-center">
                            <div class="col-md-2">
                                <h6 class="text-danger">Meninggal</h6>
                                <p>{{ $response['jumlah_meninggal'] }}</p>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-warning">Dirawat</h6>
                                <p>{{ $response['jumlah_dirawat'] }}</p>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-success">Sembuh</h6>
                                <p>{{ $response['jumlah_sembuh'] }}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <h5 class="mb-4">Jenis Kelamin</h5>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-2">
                                <h6>Laki - Laki</h6>
                                <p>{{ $response['jenis_kelamin'][0]['doc_count'] }}</p>
                            </div>
                            <div class="col-md-2">
                                <h6>Perempuan</h6>
                                <p>{{ $response['jenis_kelamin'][1]['doc_count'] }}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <h5 class="mb-4">Kelompok Umur</h5>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <h6>{{ $response['kelompok_umur'][0]['key'] }}</h6>
                                <p>{{ $response['kelompok_umur'][0]['doc_count'] }}</p>
                            </div>
                            <div class="col-2">
                                <h6>{{ $response['kelompok_umur'][1]['key'] }}</h6>
                                <p>{{ $response['kelompok_umur'][1]['doc_count'] }}</p>
                            </div>
                            <div class="col-2">
                                <h6>{{ $response['kelompok_umur'][2]['key'] }}</h6>
                                <p>{{ $response['kelompok_umur'][2]['doc_count'] }}</p>
                            </div>
                            <div class="col-2">
                                <h6>{{ $response['kelompok_umur'][3]['key'] }}</h6>
                                <p>{{ $response['kelompok_umur'][3]['doc_count'] }}</p>
                            </div>
                            <div class="col-2">
                                <h6>{{ $response['kelompok_umur'][4]['key'] }}</h6>
                                <p>{{ $response['kelompok_umur'][4]['doc_count'] }}</p>
                            </div>
                            <div class="col-2">
                                <h6>{{ $response['kelompok_umur'][5]['key'] }}</h6>
                                <p>{{ $response['kelompok_umur'][5]['doc_count'] }}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <h5>Trend Grafik Covid</h5>
                                <canvas id="myChart" width="400" height="200"></canvas>
                            </div>
                        </div>
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
        L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);

        const ctx = document.getElementById('myChart').getContext('2d');
        const getId = {!! json_encode($id) !!}
        const xlabels = [
            {!! json_encode($graph[856]['date']) !!},
            {!! json_encode($graph[857]['date']) !!},
            {!! json_encode($graph[858]['date']) !!},
            {!! json_encode($graph[859]['date']) !!},
            {!! json_encode($graph[860]['date']) !!},
            {!! json_encode($graph[861]['date']) !!},
            {!! json_encode($graph[862]['date']) !!},
            {!! json_encode($graph[863]['date']) !!},
            {!! json_encode($graph[864]['date']) !!},
            {!! json_encode($graph[865]['date']) !!},
        ];
        const xdata = [
            {!! json_encode($graph[856]['data'][$id]['cur_doc_count']) !!},
            {!! json_encode($graph[857]['data'][$id]['cur_doc_count']) !!},
            {!! json_encode($graph[858]['data'][$id]['cur_doc_count']) !!},
            {!! json_encode($graph[859]['data'][$id]['cur_doc_count']) !!},
            {!! json_encode($graph[860]['data'][$id]['cur_doc_count']) !!},
            {!! json_encode($graph[861]['data'][$id]['cur_doc_count']) !!},
            {!! json_encode($graph[862]['data'][$id]['cur_doc_count']) !!},
            {!! json_encode($graph[863]['data'][$id]['cur_doc_count']) !!},
            {!! json_encode($graph[864]['data'][$id]['cur_doc_count']) !!},
            {!! json_encode($graph[865]['data'][$id]['cur_doc_count']) !!},
        ];
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: xlabels,
                datasets: [{
                    label: 'Update 10 Hari Terakhir',
                    data: xdata,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    </script>
</body>

</html>
