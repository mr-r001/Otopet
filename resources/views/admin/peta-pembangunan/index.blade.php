@extends('admin.layouts.master')
@section('title', 'Peta Sosial Budaya')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/css/map.css') }}">
@endsection

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Peta & Simbol sektor pada bidang pengamanan pembangunan strategis</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <i class="fas fa-map"></i>
                        Peta Sosial Budaya
                    </div>
                </div>
            </div>

            <div class="section-body">
                <div class="card card-success">
                    @if (auth()->user()->isUser())
                    <div class="card-body" style="width: mac-content;display: flex;">
                        <div class="row text-center" style="display: block;z-index: 44444;">
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/1_infrastruktur jalan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="jalan">Infrastuktur Jalan ({{ count($jalan) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/2_infrastruktur perkeretaapian.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="kereta">Infrastuktur Kereta ({{ count($kereta) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/3_infrastruktur kebandarudaraan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="bandara">Infrastuktur Bandara ({{ count($bandara) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/4_infrastruktur telekomunikasi.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="telekomunikasi">Infrastuktur Telekomunikasi ({{ count($telekomunikasi) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/5_infrastruktur kepelabuhanan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="pelabuhan">Infrastuktur Pelabuhan ({{ count($pelabuhan) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/12_ketenagalistrikan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="listrik">Ketenagalistrikan ({{ count($listrik) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/13_energi alternatif.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="energi">Energi Alternatif ({{ count($energi) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/14_minyak dan gas bumi.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="minyak">Minyak dan Gas Bumi ({{ count($minyak) }})</p>
                            </div>
                        </div>
                        <p id="kecamatan">Kecamatan : </p>
                        <section class="map">
                            <div class="wrap-map">
                                <img src="{{ asset('backend/img/yellow.png') }}" alt="full" class="yellow" onclick="yellow()">
                                <img src="{{ asset('backend/img/purple.png') }}" alt="full" class="purple" onclick="purple()">
                                <img src="{{ asset('backend/img/red.png') }}" alt="full" class="red" onclick="red()">
                                <img src="{{ asset('backend/img/green.png') }}" alt="full" class="green" onclick="green()">
                                <img src="{{ asset('backend/img/cream.png') }}" alt="full" class="cream" onclick="cream()">
                            </div>
                        </section>
                        <div class="row text-center" style="display: block;left: 0px;position: relative;">
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/15_ilmu pengetahuan dan teknologi.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="ilmu">Ilmu Pengetahuan <br> Teknologi ({{ count($ilmu) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/6_smelter.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="smelter">Smelter ({{ count($smelter) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/7_infrastruktur pengolahan air.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="air">Infrastuktur <br> Pengolahan Air ({{ count($air) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/8_tanggul.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="tanggul">Tanggul ({{ count($tanggul) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/9_bendungan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="bendungan">Bendungan ({{ count($bendungan) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/10_pertanian.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="pertanian">Pertanian ({{ count($pertanian) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/11_kelautan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="kelautan">Kelautan ({{ count($kelautan) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/16_perumahan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="perumahan">Perumahan ({{ count($perumahan) }})</p>
                            </div>
                            <div class="col">
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/17_pariwisata.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="pariwisata">Pariwisata ({{ count($pariwisata) }})</p>
                            </div>
                            <div class="col">   
                            <a href="#">
                                <img src="{{ asset('backend/img/pembangunan/18_kawasan industri prioritas.jpg') }}" alt="" width="40" height="40">
                            </a>    
                                <p id="industri">Kawasan Industri ({{ count($industri) }})</p>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="card-body" style="width: mac-content;display: flex;">
                        <div class="row text-center" style="display: block;z-index: 44444;">
                            <div class="col">
                            <a href="{{ route('admin.infrastruktur.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/1_infrastruktur jalan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="jalan">Infrastuktur Jalan ({{ count($jalan) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.kereta.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/2_infrastruktur perkeretaapian.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="kereta">Infrastuktur Kereta ({{ count($kereta) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.bandara.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/3_infrastruktur kebandarudaraan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="bandara">Infrastuktur Bandara ({{ count($bandara) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.telekomunikasi.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/4_infrastruktur telekomunikasi.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="telekomunikasi">Infrastuktur Telekomunikasi ({{ count($telekomunikasi) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.pelabuhan.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/5_infrastruktur kepelabuhanan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="pelabuhan">Infrastuktur Pelabuhan ({{ count($pelabuhan) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.listrik.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/12_ketenagalistrikan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="listrik">Ketenagalistrikan ({{ count($listrik) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.energi.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/13_energi alternatif.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="energi">Energi Alternatif ({{ count($energi) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.minyak.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/14_minyak dan gas bumi.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="minyak">Minyak dan Gas Bumi ({{ count($minyak) }})</p>
                            </div>
                        </div>
                        <p id="kecamatan">Kecamatan : </p>
                        <section class="map">
                            <div class="wrap-map">
                                <img src="{{ asset('backend/img/yellow.png') }}" alt="full" class="yellow" onclick="yellow()">
                                <img src="{{ asset('backend/img/purple.png') }}" alt="full" class="purple" onclick="purple()">
                                <img src="{{ asset('backend/img/red.png') }}" alt="full" class="red" onclick="red()">
                                <img src="{{ asset('backend/img/green.png') }}" alt="full" class="green" onclick="green()">
                                <img src="{{ asset('backend/img/cream.png') }}" alt="full" class="cream" onclick="cream()">
                            </div>
                        </section>
                        <!-- <br><br><br>
                        <p id="kecamatan">Kecamatan : </p> -->
                        <!-- <br><br> -->
                        <div class="row text-center" style="display: block;left: 0px;position: relative;">
                            <div class="col">
                            <a href="{{ route('admin.ilmu.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/15_ilmu pengetahuan dan teknologi.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="ilmu">Ilmu Pengetahuan <br> Teknologi ({{ count($ilmu) }})</p>
                            </div>
                            <div class="col">\
                            <a href="{{ route('admin.smelter.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/6_smelter.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="smelter">Smelter ({{ count($smelter) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.air.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/7_infrastruktur pengolahan air.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="air">Infrastuktur <br> Pengolahan Air ({{ count($air) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.tanggul.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/8_tanggul.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="tanggul">Tanggul ({{ count($tanggul) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.bendungan.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/9_bendungan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="bendungan">Bendungan ({{ count($bendungan) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.pertanian.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/10_pertanian.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="pertanian">Pertanian ({{ count($pertanian) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.kelautan.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/11_kelautan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="kelautan">Kelautan ({{ count($kelautan) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.perumahan.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/16_perumahan.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="perumahan">Perumahan ({{ count($perumahan) }})</p>
                            </div>
                            <div class="col">
                            <a href="{{ route('admin.pariwisata.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/17_pariwisata.jpg') }}" alt="" width="40" height="40">
                            </a>
                                <p id="pariwisata">Pariwisata ({{ count($pariwisata) }})</p>
                            </div>
                            <div class="col">   
                            <a href="{{ route('admin.industri.index') }}">
                                <img src="{{ asset('backend/img/pembangunan/18_kawasan industri prioritas.jpg') }}" alt="" width="40" height="40">
                            </a>    
                                <p id="industri">Kawasan Industri ({{ count($industri) }})</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script>
        function yellow() {
            var id = 5
            ajaxurl = '{{ route("admin.peta-pembangunan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Selatan')
                    $('#jalan').html('Infrastuktur Jalan ('+ data[0].length +')')
                    $('#kereta').html('Infrastuktur Kereta ('+ data[1].length +')')
                    $('#bandara').html('Infrastuktur Bandara ('+ data[2].length +')')
                    $('#telekomunikasi').html('Infrastuktur Telekomunikasi ('+ data[3].length +')')
                    $('#pelabuhan').html('Infrastuktur Pelabuhan ('+ data[4].length +')')
                    $('#listrik').html('Ketenagalistrikan ('+ data[5].length +')')
                    $('#energi').html('Energi Alternatif ('+ data[6].length+ ')')
                    $('#minyak').html('Minyak dan Gas Bumi ('+ data[7].length +')')

                    $('#ilmu').html('Ilmu Pengetahuan Teknologi ('+ data[8].length +')')
                    $('#smelter').html('Smelter ('+ data[9].length+ ')')
                    $('#air').html('Infrastuktur Pengolahan Air ('+ data[10].length +')')
                    $('#tanggul').html('Tanggul ('+ data[11].length +')')
                    $('#bendungan').html('Bendungan ('+ data[12].length +')')
                    $('#pertanian').html('Pertanian ('+ data[13].length +')')
                    $('#kelautan').html('Kelautan ('+ data[14].length +')')
                    $('#perumahan').html('Perumahan ('+ data[15].length +')')
                    $('#pariwisata').html('Pariwisata ('+ data[16].length +')')
                    $('#industri').html('Kawasan Industri ('+ data[17].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function purple() {
            var id = 4
            ajaxurl = '{{ route("admin.peta-pembangunan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Tengah')
                    $('#jalan').html('Infrastuktur Jalan ('+ data[0].length +')')
                    $('#kereta').html('Infrastuktur Kereta ('+ data[1].length +')')
                    $('#bandara').html('Infrastuktur Bandara ('+ data[2].length +')')
                    $('#telekomunikasi').html('Infrastuktur Telekomunikasi ('+ data[3].length +')')
                    $('#pelabuhan').html('Infrastuktur Pelabuhan ('+ data[4].length +')')
                    $('#listrik').html('Ketenagalistrikan ('+ data[5].length +')')
                    $('#energi').html('Energi Alternatif ('+ data[6].length+ ')')
                    $('#minyak').html('Minyak dan Gas Bumi ('+ data[7].length +')')

                    $('#ilmu').html('Ilmu Pengetahuan Teknologi ('+ data[8].length +')')
                    $('#smelter').html('Smelter ('+ data[9].length+ ')')
                    $('#air').html('Infrastuktur Pengolahan Air ('+ data[10].length +')')
                    $('#tanggul').html('Tanggul ('+ data[11].length +')')
                    $('#bendungan').html('Bendungan ('+ data[12].length +')')
                    $('#pertanian').html('Pertanian ('+ data[13].length +')')
                    $('#kelautan').html('Kelautan ('+ data[14].length +')')
                    $('#perumahan').html('Perumahan ('+ data[15].length +')')
                    $('#pariwisata').html('Pariwisata ('+ data[16].length +')')
                    $('#industri').html('Kawasan Industri ('+ data[17].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function red() {
            var id = 3
            ajaxurl = '{{ route("admin.peta-pembangunan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Utara')
                    $('#jalan').html('Infrastuktur Jalan ('+ data[0].length +')')
                    $('#kereta').html('Infrastuktur Kereta ('+ data[1].length +')')
                    $('#bandara').html('Infrastuktur Bandara ('+ data[2].length +')')
                    $('#telekomunikasi').html('Infrastuktur Telekomunikasi ('+ data[3].length +')')
                    $('#pelabuhan').html('Infrastuktur Pelabuhan ('+ data[4].length +')')
                    $('#listrik').html('Ketenagalistrikan ('+ data[5].length +')')
                    $('#energi').html('Energi Alternatif ('+ data[6].length+ ')')
                    $('#minyak').html('Minyak dan Gas Bumi ('+ data[7].length +')')

                    $('#ilmu').html('Ilmu Pengetahuan Teknologi ('+ data[8].length +')')
                    $('#smelter').html('Smelter ('+ data[9].length+ ')')
                    $('#air').html('Infrastuktur Pengolahan Air ('+ data[10].length +')')
                    $('#tanggul').html('Tanggul ('+ data[11].length +')')
                    $('#bendungan').html('Bendungan ('+ data[12].length +')')
                    $('#pertanian').html('Pertanian ('+ data[13].length +')')
                    $('#kelautan').html('Kelautan ('+ data[14].length +')')
                    $('#perumahan').html('Perumahan ('+ data[15].length +')')
                    $('#pariwisata').html('Pariwisata ('+ data[16].length +')')
                    $('#industri').html('Kawasan Industri ('+ data[17].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function green() {
            var id = 2
            ajaxurl = '{{ route("admin.peta-pembangunan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Pagar Alam Selatan')
                    $('#jalan').html('Infrastuktur Jalan ('+ data[0].length +')')
                    $('#kereta').html('Infrastuktur Kereta ('+ data[1].length +')')
                    $('#bandara').html('Infrastuktur Bandara ('+ data[2].length +')')
                    $('#telekomunikasi').html('Infrastuktur Telekomunikasi ('+ data[3].length +')')
                    $('#pelabuhan').html('Infrastuktur Pelabuhan ('+ data[4].length +')')
                    $('#listrik').html('Ketenagalistrikan ('+ data[5].length +')')
                    $('#energi').html('Energi Alternatif ('+ data[6].length+ ')')
                    $('#minyak').html('Minyak dan Gas Bumi ('+ data[7].length +')')

                    $('#ilmu').html('Ilmu Pengetahuan Teknologi ('+ data[8].length +')')
                    $('#smelter').html('Smelter ('+ data[9].length+ ')')
                    $('#air').html('Infrastuktur Pengolahan Air ('+ data[10].length +')')
                    $('#tanggul').html('Tanggul ('+ data[11].length +')')
                    $('#bendungan').html('Bendungan ('+ data[12].length +')')
                    $('#pertanian').html('Pertanian ('+ data[13].length +')')
                    $('#kelautan').html('Kelautan ('+ data[14].length +')')
                    $('#perumahan').html('Perumahan ('+ data[15].length +')')
                    $('#pariwisata').html('Pariwisata ('+ data[16].length +')')
                    $('#industri').html('Kawasan Industri ('+ data[17].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function cream() {
            var id = 1
            ajaxurl = '{{ route("admin.peta-pembangunan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Pagar Alam Utara')
                    $('#jalan').html('Infrastuktur Jalan ('+ data[0].length +')')
                    $('#kereta').html('Infrastuktur Kereta ('+ data[1].length +')')
                    $('#bandara').html('Infrastuktur Bandara ('+ data[2].length +')')
                    $('#telekomunikasi').html('Infrastuktur Telekomunikasi ('+ data[3].length +')')
                    $('#pelabuhan').html('Infrastuktur Pelabuhan ('+ data[4].length +')')
                    $('#listrik').html('Ketenagalistrikan ('+ data[5].length +')')
                    $('#energi').html('Energi Alternatif ('+ data[6].length+ ')')
                    $('#minyak').html('Minyak dan Gas Bumi ('+ data[7].length +')')

                    $('#ilmu').html('Ilmu Pengetahuan Teknologi ('+ data[8].length +')')
                    $('#smelter').html('Smelter ('+ data[9].length+ ')')
                    $('#air').html('Infrastuktur Pengolahan Air ('+ data[10].length +')')
                    $('#tanggul').html('Tanggul ('+ data[11].length +')')
                    $('#bendungan').html('Bendungan ('+ data[12].length +')')
                    $('#pertanian').html('Pertanian ('+ data[13].length +')')
                    $('#kelautan').html('Kelautan ('+ data[14].length +')')
                    $('#perumahan').html('Perumahan ('+ data[15].length +')')
                    $('#pariwisata').html('Pariwisata ('+ data[16].length +')')
                    $('#industri').html('Kawasan Industri ('+ data[17].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
    </script>
@endsection

