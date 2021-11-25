<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css" />
    <style>
        @page {
            size: A4;
        }
        
        div {
            font-size: 12px;
        }
    </style>

    <title>Biodata</title>
</head>

<body class="A4">
    <section class="sheet padding-10mm">
        <u><span>KEJAKSAAN PAGAR ALAM</span></u>
        <br>

        <h5 class="text-center">KARTU TIK BIODATA</h5>
        <h6 class="text-center">
            Nomor :  {{ $data->nomor }}
        </h6>

        <div class="container fs-6 text-sm py-3">
            <div class="row">
                <div class="col-12">1. IDENTITAS</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">a. Nomor Induk Kependudukan</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->nik }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">b. Nama Lengkap</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->nama }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">c. Tempat/Tgl. Lahir/Umur</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->tempat_lahir }} / {{ $data->tanggal_lahir }} / {{ $age }} tahun</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">d. Jenis Kelamin</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->jenis_kelamin }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">e. Bangsa/Suku</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->bangsa->name }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">f. Kewarganegaraan</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->kewarganegaraan->name }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">h. Nonior Telepon,/HP</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->phone }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">i. Nomor Passport</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->pasport }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">j. Agama/Kepercayaan</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->agama->name }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">k. Pendidikan</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->pendidikan->name }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">l. Pekerjaan</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->pekerjaan->name }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">m. Alamat Kantor</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->alamat_kantor }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">n. Status Perkawinan</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->perkawinan->name }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">o. legitimasi Perkawinan</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->legitimasi_perkawinan }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-4">p. Tempat dan Tgl. Perkawinari</div>
                <div class="col-1">:</div>
                <div class="col-6">{{ $data->tempat_perkawinan }}, {{ $data->tanggal_perkawinan }}</div>
            </div>
            <br />
            <div class="row">
                <div class="col-12">2. BIOGRAFI INTELIJEN:</div>
            </div>
            <div class="row">
                <div class="col-11 px-5">a. Riwayat Hidup singkat:</div>
                <div class="row px-5">
                    <div class="col-5 px-4">1. Pekerjaan</div>
                    <div class="col-1">:</div>
                    <div class="col-5">{{ $data->riwayat_pekerjaan }}</div>
                </div>
                <div class="row px-5">
                    <div class="col-5 px-4">2. Pendidikan</div>
                    <div class="col-1">:</div>
                    <div class="col-5">{{ $data->riwayat_pendidikan }}</div>
                </div>
                <div class="row px-5">
                    <div class="col-5 px-4">3. Kepartaian</div>
                    <div class="col-1">:</div>
                    <div class="col-5">{{ $data->riwayat_kepartaian }}</div>
                </div>
                <div class="row px-5">
                    <div class="col-5 px-4">4. Ormas lainnya</div>
                    <div class="col-1">:</div>
                    <div class="col-5">{{ $data->riwayat_ormas }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-11 px-5">b. Keluarga</div>
                <div class="row px-5">
                    <div class="col-5 px-4">1 Nama Isteri/Suami</div>
                    <div class="col-1">:</div>
                    <div class="col-5">{{ $data->nama_istri }}</div>
                </div>
                <div class="row px-5">
                    <div class="col-5 px-4">2. Nama anak-anak</div>
                    <div class="col-1">:</div>
                    <div class="col-5">{{ $data->nama_anak }}</div>
                </div>
                <div class="row px-5">
                    <div class="col-5 px-4">3. Nama Saudara kandung</div>
                    <div class="col-1">:</div>
                    <div class="col-5">{{ $data->nama_saudara }}</div>
                </div>
                <div class="row px-5">
                    <div class="col-5 px-4">4. Nama Ayah Kandung</div>
                    <div class="col-1">:</div>
                    <div class="col-5">{{ $data->nama_ayah_kandung }}</div>
                    <div class="row">
                        <div class="col-5 px-5">Alamat</div>
                        <div class="col-1 px-4" style="position: relative;left: -2px;">:</div>
                        <div class="col-4 px-4">{{ $data->alamat_ayah_kandung }}</div>
                    </div>
                    <div class="row">
                        <div class="col-5 px-5">Nama Ibu Kandung</div>
                        <div class="col-1 px-4" style="position: relative;left: -2px;">:</div>
                        <div class="col-4 px-4">{{ $data->nama_ibu_kandung }}</div>
                    </div>
                    <div class="row">
                        <div class="col-5 px-5">Alamat</div>
                        <div class="col-1 px-4" style="position: relative;left: -2px;">:</div>
                        <div class="col-4 px-4">{{ $data->alamat_ibu_kandung }}</div>
                    </div>
                </div>
                <div class="row px-5">
                    <div class="col-5 px-4">5. Nama Ayah Mertua</div>
                    <div class="col-1">:</div>
                    <div class="col-5">{{ $data->nama_ayah_mertua }}</div>
                    <div class="row">
                        <div class="col-5 px-5">Alamat</div>
                        <div class="col-1 px-4" style="position: relative;left: -2px;">:</div>
                        <div class="col-4 px-4">{{ $data->alamat_ayah_mertua }}</div>
                    </div>
                    <div class="row">
                        <div class="col-5 px-5">Nama Ibu Mertua</div>
                        <div class="col-1 px-4" style="position: relative;left: -2px;">:</div>
                        <div class="col-4 px-4">{{ $data->nama_ibu_mertua }}</div>
                    </div>
                    <div class="row">
                        <div class="col-5 px-5">Alamat</div>
                        <div class="col-1 px-4" style="position: relative;left: -2px;">:</div>
                        <div class="col-4 px-4">{{ $data->alamat_ibu_merua }}</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-11 px-5">c. Referensi/ Kenalan</div>
                <div class="row px-5">
                    <div class="col-5 px-4">(nama dan alamat)</div>
                    <div class="col-1">:</div>
                    <div class="col-1">1.</div>
                    <div class="col-5">{{ $data->nama_kenalan_pertama }}, {{ $data->alamat_kenalan_pertama }}</div>
                </div>
                <div class="row px-5">
                    <div class="col-5 px-4"></div>
                    <div class="col-1">:</div>
                    <div class="col-1">2</div>
                    <div class="col-5">{{ $data->nama_kenalan_kedua }}, {{ $data->alamat_kenalan_kedua }}</div>
                </div>
                <div class="row px-5">
                    <div class="col-5 px-4"></div>
                    <div class="col-1">:</div>
                    <div class="col-1">3</div>
                    <div class="col-5">{{ $data->nama_kenalan_ketiga }}, {{ $data->alamat_kenalan_ketiga }}</div>
                </div>
            </div>

            <div class="row">
                <div class="col-5 px-5">d. Hobi/Kegemaran</div>
                <div class="col-1 px-4" style="position: relative;left: -16px;">:</div>
                <div class="col-4 px-4">{{ $data->hobi }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-5">e. Kedudukan Dimasyarakat</div>
                <div class="col-1 px-4" style="position: relative;left: -16px;">:</div>
                <div class="col-4 px-4">{{ $data->kedudukan }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-5">f. Lain-lain</div>
                <div class="col-1 px-4" style="position: relative;left: -16px;">:</div>
                <div class="col-4 px-4">{{ $data->lain }}</div>
            </div>
            <div class="row">
                <div class="col-5 px-5">
                    Otentikasi <br /> (Stampel dan Paraf)
                </div>
            </div>
            <div class="row py-3" style="margin-left: 25px;">
                <div class="col-12">3. PAS PHOTO</div>
            </div>
            <div class="row" style="margin-left: 25px;overflow: hidden;margin-bottom: 20px;position: relative;top: -6px;">
                <div class="col-12" style="overflow: hidden;margin-bottom: 20px;height: 130px;">
                    <img src="{{ asset('img/biodata'). '/' . $data->photo }}" alt="" width="100" height="auto" />
                </div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>