<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Model B.1.1-KWK</title>
    <link rel="stylesheet" href="{{ asset('backend/pdf/style.css') }}">
</head>
<body>
    <section class="hero">
        <h1 class="title2" style="left: 4%;position: relative;">SURAT PERNYATAAN DAFTAR NAMA PENDUKUNG BAKAL PASANGAN CALON PERSEORANGAN DALAM PEMILIHAN GUBERNUR DAN WAKIL GUBERNUR</h1>
    </section>
    <div class="wrap-content2">
        <p>
            Bersama ini kami, atas nama Bakal Pasangan Calon Peseorangan:
        </p>
        <p>Nama Bakal Calon Gubernur : <span style="font-weight: bold;">{{ Request::get('name') }}</span></p>
        <p>Nama Bakal Calon Wakil Gubernur : <span style="font-weight: bold;">{{ Request::get('wakil') }}</span></p>
        <p class="menyatakan">Menyatakan daftar nama pendukung Bakal Pasangan Calon Persorangan dalam Pemilihan Gubernur dan Wakil Gubernur</p>
        <p>Provinsi <span class="titik">:</span> <span style="font-weight: bold;position: absolute;left: 27vw">PAPUA</span></p>
        <p>Kabupaten/Kota <span class="titik">:</span> </p>
        <p>Kecamatan <span class="titik">:</span> </p>
        <p>Kelurahan/Desa <span class="titik">:</span> </p>
        <p>Sebagai berikut <span class="titik">:</span></p>
        <br>
        <table class="table tbl2">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nam</th>
                <th scope="col">NIK</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">RT</th>
                <th scope="col">RW</th>
                <th scope="col">RW</th>
                <th scope="col">Tmp Lahir</th>
                <th scope="col">Tgl Lahir</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Belum/<br>Sudah/<br>PernahKawin</th>
                <th scope="col">Ket</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($ktp as $value)
                <tr>
                  <th scope="row">{{ $value->id }}</th>
                  <td>{{ $value->nama }}</td>
                  <td>{{ $value->nik }}</td>
                  <td>{{ $value->jenis_kelamin }}</td>
                  <td>{{ $value->alamat }}</td>
                  <td>{{ $value->rt }}</td>
                  <td>{{ $value->rw }}</td>
                  <td>{{ $value->rw }}</td>
                  <td>{{ $value->tempat_lahir }}</td>
                  <td>{{ $value->tanggal_lahir }}</td>
                  <td>{{ $value->keterangan }}</td>
                  <td>{{ $value->status_perkawinan }}</td>
                  <td>{{ $value->keterangan }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <br>
          <br><br><br><br><br><br><br><br><br>
          <p>Demikian daftar nama pendukung ini dibuat untuk digunakan sebagaimana mestinya. Apabila ternyata kemudian hari ditemukan ketidak benaran terhadap data tersebut di atas, kami bersedia diberikan sanksi sesuai ketentuan perundangan-undangan yang berlaku.</p>
          <br>
          <div class="footer ft">
            <div class="lls">
                <p>Bakal Calon Gubernur</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h4 style="font-size: 18px;">{{ Request::get('name') }}</h4>
            </div>
            <div>
                <div class="box">
                    <p>materai <br> 600</p>
                </div>
            </div>
            <div class="llr">
                <p>Papua, Maret 2024</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h4 style="font-size: 18px;">{{ Request::get('wakil') }}</h4>
            </div>
          </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>