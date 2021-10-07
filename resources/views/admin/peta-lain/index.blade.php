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
                <h1>Peta Lainnya</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <i class="fas fa-map"></i>
                        Peta Lainnya
                    </div>
                </div>
            </div>

            <div class="section-body">
                <div class="card card-success">
                    @if (auth()->user()->isUser())
                    <div class="card-body" style="width: mac-content;display: flex;">
                        <div class="row text-center" style="display: block;z-index: 44444;">
                            <br><br><br><br><br><br><br><br>
                            <div class="col"> 
                                <a href="#">
                                    <p id="narkotika">Tindak Pidana Narkotika ({{ count($narkotika) }})</p>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#">
                                    <p id="umum">Tindak Pidana Umum ({{ count($umum) }})</p>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#">
                                    <p id="obat">Pengobatan Tradisional ({{ count($obat) }})</p>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#">
                                    <p id="posko">Posko Perwakilan Kejaksaan ({{ count($posko) }})</p>
                                </a>
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
                    </div>
                    @else
                    <div class="card-body" style="width: mac-content;display: flex;">
                        <div class="row text-center" style="display: block;z-index: 44444;">
                            <br><br><br><br><br><br><br><br>
                            <div class="col"> 
                                <a href="{{ route('admin.narkotika.index') }}">
                                    <p id="narkotika">Tindak Pidana Narkotika ({{ count($narkotika) }})</p>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.umum.index') }}">
                                    <p id="umum">Tindak Pidana Umum ({{ count($umum) }})</p>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.pengobatan.index') }}">
                                    <p id="obat">Pengobatan Tradisional ({{ count($obat) }})</p>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.posko.index') }}">
                                    <p id="posko">Posko Perwakilan Kejaksaan ({{ count($posko) }})</p>
                                </a>
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
            ajaxurl = '{{ route("admin.peta-lain.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    console.log(data);
                    $('#kecamatan').html('Kecamatan : Dempo Selatan')
                    
                    $('#narkotika').html('Tindak Pidana Narkotika ('+ data[0].length +')')
                    $('#umum').html('Tindak Pidana Umum ('+ data[1].length +')')
                    $('#obat').html('Pengobatan Tradisional ('+ data[2].length +')')
                    $('#posko').html('Posko Perwakilan Kejaksaan ('+ data[3].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function purple() {
            var id = 4
            ajaxurl = '{{ route("admin.peta-lain.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    console.log(data);
                    $('#kecamatan').html('Kecamatan : Dempo Tengah')
                    $('#narkotika').html('Tindak Pidana Narkotika ('+ data[0].length +')')
                    $('#umum').html('Tindak Pidana Umum ('+ data[1].length +')')
                    $('#obat').html('Pengobatan Tradisional ('+ data[2].length +')')
                    $('#posko').html('Posko Perwakilan Kejaksaan ('+ data[3].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function red() {
            var id = 3
            ajaxurl = '{{ route("admin.peta-lain.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    console.log(data);
                    $('#kecamatan').html('Kecamatan : Dempo Utara')
                    $('#narkotika').html('Tindak Pidana Narkotika ('+ data[0].length +')')
                    $('#umum').html('Tindak Pidana Umum ('+ data[1].length +')')
                    $('#obat').html('Pengobatan Tradisional ('+ data[2].length +')')
                    $('#posko').html('Posko Perwakilan Kejaksaan ('+ data[3].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function green() {
            var id = 2
            ajaxurl = '{{ route("admin.peta-lain.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    console.log(data);
                    $('#kecamatan').html('Kecamatan : Pagar Alam Selatan')
                    $('#narkotika').html('Tindak Pidana Narkotika ('+ data[0].length +')')
                    $('#umum').html('Tindak Pidana Umum ('+ data[1].length +')')
                    $('#obat').html('Pengobatan Tradisional ('+ data[2].length +')')
                    $('#posko').html('Posko Perwakilan Kejaksaan ('+ data[3].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function cream() {
            var id = 1
            ajaxurl = '{{ route("admin.peta-lain.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    console.log(data);
                    $('#kecamatan').html('Kecamatan : Pagar Alam Utara')
                    $('#narkotika').html('Tindak Pidana Narkotika ('+ data[0].length +')')
                    $('#umum').html('Tindak Pidana Umum ('+ data[1].length +')')
                    $('#obat').html('Pengobatan Tradisional ('+ data[2].length +')')
                    $('#posko').html('Posko Perwakilan Kejaksaan ('+ data[3].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
    </script>
@endsection

