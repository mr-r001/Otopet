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
</head>
<body>
    <section class="header">
        <div class="box2">
            <p>"KTP pendukung tempel disini"</p>
        </div>
    </section>
    <section class="hero">
        <h1 class="title">SURAT PERNYATAAN DUKUNGAN PASANGAN CALON PERSEORANGAN DALAM PEMILIHAN GUBERNUR DAN WAKIL GUBERNUR</h1>
        <div class="alamat">
            <div class="alamat2">
                <div>Kelurahan/Desa : {{ $ktp->getSubdistrict ? $ktp->getSubdistrict->subdis_name : '' }}</div>
                <div>Kecamatan      : {{ $ktp->getDistrict ? $ktp->getDistrict->dis_name : '' }}</div>
            </div>
            <div class="alamat2">
                <div>Kabupaten : {{ $ktp->getCity ? $ktp->getCity->city_name : '' }}</div>
                <div>Provinsi  : <span style="font-weight: bold;margin-left: 10px;">{{ $ktp->getProvince ? $ktp->getProvince->prov_name : '' }}</span></div>
            </div>
        </div>
        <br>
        <br>
        <div class="content-biodata">
        <p>Yang bertanda tangan di bawah ini, saya</p><br>
        <div><p>1. Nama <span class="titik2">:</span> <span class="content22">{{ $ktp->nama }}</span></p></div>
        <div><p>2. NIK <span class="titik2">:</span> <span class="content22">{{ $ktp->nik }}</span></p></div>
        <div><p>3. Alamat <span class="titik2">:</span> <span class="content22">{{ $ktp->alamat }} </span></p></div>
        <div><p>4. RT/RW <span class="titik2">:</span> <span class="content22">{{ $ktp->rt}}/{{$ktp->rw}}</span></p></div>
        <div><p>5. Tempat Lahir <span class="titik2">:</span> <span class="content22">{{ $ktp->tempat_lahir }}</span></p></div>
        <div><p>6. Tanggal Lahir <span class="titik2">:</span> <span class="content22">{{ $ktp->tanggal_lahir }}</span></p></div>
        <div><p>7. Status Perkawinan <span class="titik2">:</span> <span class="content22">{{ $ktp->status_perkawinan }}</span></p></div>
        <br>
        <p>Dengan ini Menyatakan dengan sebenarnya dan secara sukarela mendukung Pasangan Calon Perseorangan dalm Pemilihan Gubernur dan Wakil Gubernur Tahun 2023, atas nama :</p>
        <br>
        <p>1. Calon Gubernur : <Span style="font-weight: bold;">{{ Request::get('name') }}</Span></p>
        <br>
        <p>Calon Wakil gubernur/Wakil Bupati/Wakil WaliKota :</p>
        <br>
        <p>{{ Request::get('wakil') }}</p>
        <p>........................................................................................................................................................................................................................................</p>    
        <br>
        <p>Sebagai bukti dukungan Pasangan Calon Perseorangan, dalam surat Pernyataan dukungan ini saya lampirkan Fotokopi Kartu Tanda Penduduk Elektronik.</p>
        <br>
        <p class="demikian">Demikian Pernyataan dukungan ini dibuat untuk digunakan sebagaimana mestinya. Apabila ternyata di kemudian hari ditemukan ketidakbenaran atau saya mengingkari pernyataan dukungan ini, saya bersedia mempertangung jawabkan secara hukum sesuai ketentuan peraturan perundang-undangan yang berlaku.</p>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>
<br>
<br>
<br>
<div class="ttd">
    <p>Papua............................................2023 <br> Yang Membuat Pernyataan,</p>
    <span style="font-weight: bold;position: relative;top: 100px;">({{ $ktp->nama }})</span>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<small style="position: relative;margin-top: 200px;left: 140px;"><span style="font-weight: bold;">Keterangan</span>: <br> *) Pilih Salah Satu</small>
<br>
<br>
<br>
<br>
<br>
</body>