<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>model B.1-KWK</title>
    <link rel="stylesheet" href="{{ asset('backend/pdf/style.css') }}">
    <title>Document</title>
    <style>
        .ktp{
            width: 9cm;
        }
    </style>
</head>
<body>
    <section class="header">
        <div class="box2">
            {{-- <img src="{{ asset('img/ktp/')."/". $ktp->photo }}" alt="ktp" class="ktp"> --}}
            <img src="{{ asset('img/ktp/43140588814.png')}}" alt="ktp" class="ktp">
        </div>
    </section>
    <section class="hero">
        <h1 class="title" style="position: relative;margin-top: -80px;">SURAT PERNYATAAN DUKUNGAN PASANGAN CALON PERSEORANGAN DALAM PEMILIHAN GUBERNUR DAN WAKIL GUBERNUR</h1>
        <div class="alamat" style="margin-top: 0px;margin-bottom: 0;">
            <div class="alamat2">
                <div>Kelurahan/Desa : <b class="v">{{ $ktp->getSubdistrict ? $ktp->getSubdistrict->subdis_name : '' }}</b></div>
                <div>Kecamatan      : <b class="v">{{ $ktp->getDistrict ? $ktp->getDistrict->dis_name : '' }}</b></div>
            </div>
            <div class="alamat2">
                <div>Kabupaten : <b class="v">{{ $ktp->getCity ? $ktp->getCity->city_name : '' }}</b></div>
                <div>Provinsi  : <b class="v"><span style="font-weight: bold;margin-left: 10px;">PAPUA TENGAH</span></b></div>
            </div>
        </div>
        <br>
        <br>
        <div class="content-biodata" style="position: relative;margin-top: -30px;line-height: 1.4em">
        <p>Yang bertanda tangan di bawah ini, saya</p><br>
        <div style="position: relaitve;margin-top: -10px;"><p>1. Nama <span class="titik2">:</span> <span class="content22"><b>{{ $ktp->nama }}</b></span></p></div>
        <div style="position: relaitve;margin-top: -10px;"><p>2. NIK <span class="titik2">:</span> <span class="content22"><b>{{ $ktp->nik }}</b></span></p></div>
        <div style="position: relaitve;margin-top: -10px;"><p>3. Alamat <span class="titik2">:</span> <span class="content22"><b>{{ $ktp->alamat }}</b></span></p></div>
        <div style="position: relaitve;margin-top: -10px;"><p>4. RT/RW <span class="titik2">:</span> <span class="content22"><b>{{ $ktp->rt}}/{{$ktp->rw}}</b></span></p></div>
        <div style="position: relaitve;margin-top: -10px;"><p>5. Tempat Lahir <span class="titik2">:</span> <span class="content22"><b>{{ $ktp->tempat_lahir }}</b></span></p></div>
        <div style="position: relaitve;margin-top: -10px;"><p>6. Tanggal Lahir <span class="titik2">:</span> <span class="content22"><b>{{ $ktp->tanggal_lahir }}</b></span></p></div>
        <div style="position: relaitve;margin-top: -10px;"><p>7. Status Perkawinan <span class="titik2">:</span> <span class="content22"><b>{{ $ktp->status_perkawinan }}</b></span></p></div>
        <br>
        <p style="position: relative;margin-top: -20px;">Dengan ini Menyatakan dengan sebenarnya dan secara sukarela mendukung Pasangan Calon Perseorangan dalm Pemilihan Gubernur dan Wakil Gubernur Tahun 2023, atas nama :</p>
        <br>
        <p style="margin-top: -20px;">1. Calon Gubernur : </p>
        <Span style="font-weight: bold;margin-bottom: 20px;text-transform: uppercase;">{{ Request::get('name') }}</Span>
        <br>
        <p>2. Calon Wakil gubernur/Wakil Bupati/Wakil WaliKota :</p>
        <Span style="font-weight: bold;margin-bottom: 20px;text-transform: uppercase;">{{ Request::get('wakil') }}</Span>
        <br>
        <p style="margin-top: 10px;width: 96vw;text-indent: 20px;text-align: justify;">
            Sebagai bukti dukungan Pasangan Calon Perseorangan, dalam surat Pernyataan dukungan ini saya lampirkan Fotokopi Kartu Tanda Penduduk Elektronik.
            <p style="margin-top: 0px;width: 96vw;text-indent: 20px;text-align: justify;">Demikian Pernyataan dukungan ini dibuat untuk digunakan sebagaimana mestinya. Apabila ternyata di kemudian hari ditemukan ketidakbenaran atau saya mengingkari pernyataan dukungan ini, saya bersedia mempertangung jawabkan secara hukum sesuai ketentuan peraturan perundang-undangan yang berlaku.</p>
        </p>
        <p class="demikian"></p>
        <br>
    </div>
</section>
<div class="ttd" style="position: relative;margin-top: -30px;">
    <p>Papua Tengah, {{ $date }} <br> Yang Membuat Pernyataan,</p>
    <span style="font-weight: bold;position: relative;top: 100px;">({{ $ktp->nama }})</span>
</div>
<br>
<br>
<br>
<small style="position: relative;margin-top: -40px;left: 140px;"><span style="font-weight: bold;">Keterangan</span>: <br> *) Pilih Salah Satu</small>
<br>
<br>
<br>
<br>
<br>
</body>