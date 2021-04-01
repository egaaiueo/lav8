@extends('layouts.homepages')
@section('content')
   <div class="card wow fadeInUp">
      @if ($message = Session::get('setelah'))
        <div class="alert alert-dark">
            <p>{{ $message }}</p>
        </div>
      @endif
      <h3><strong>Penerimaan Peserta Didik Baru Online</strong></h3><br><br>  
         <p>Program penerimaan siswa baru tahun 2021 <br><br>
            Untuk mengajukan pertanyaan dapat konsultasi langsung melalui whatsapp 089-535-653-1211 (Widya Rahmawati) atau 0856-9344-5665 (Bapak Kunedi).   
         </p><br><br><br>
      <h4><b>Rincian Biaya</b></h4>
      <h5>Program Reguler</h5>
         <ul>
            <li>Dana Sumbangan Pendidikan Dasar : Rp. 3.500.000,-</li>
            <li>Dana Sumbangan Pendidikan Infaq* :</li>
            <li style="margin-left: 20px;">a) Rp. 500.000,-</li>
            <li style="margin-left: 20px;">b) Rp. 1.000.000,-</li>
            <li>SPP (Bulanan) : Rp. 250.000,-</li>
            <li>Praktikum (Semesteran) : Rp. 500.000,-</li>
            <li>Biaya Seleksi : Rp. 100.000,-</li>
         </ul>
      <br>
      <h5>Program Unggulan</h5>
         <ul>
            <li>Dana Sumbangan Pendidikan Dasar : Rp. 7.000.000,-</li>
            <li>Dana Sumbangan Pendidikan Infaq* :</li>
            <li style="margin-left: 20px;">a) Rp. 1.000.000,-</li>
            <li style="margin-left: 20px;">b) Rp. 2.000.000,-</li>
            <li>SPP (Bulanan) : Rp. 400.000,-</li>
            <li>Praktikum (Semesteran) : Rp. 500.000,-</li>
            <li>Biaya Seleksi : Rp. 175.000,-</li>
         </ul><br>
      <p>Keterangan : * Dana Sumbangan Infaq akan diperuntukan untuk perluasan masjid sekolah.</p>
      <br><br><br>
      <p><strong>Program Unggulan</strong></p>
      <p>Berkas Pendaftaran Dibawa Pada Saat Mengikuti Test Seleksi :</p>
         <ul>
            <li>Fotocopy Raport SMP Kelas 7-9 Semester 1</li>
            <li>Fotocopy Akte Kelahiran</li>
            <li>Fotocopy Kartu Keluarga</li>
            <li>Pas Foto Berwarna ( Berkemeja ) Ukuran : 3 X 4 ( 6 Lembar)</li>
         </ul><br>
      <p>*Data Formulir Tidak Boleh Kosong Saat Pengisian</p>
   </div>
   <center><a href="{{ route('forms.create') }}" class="ling btn btn-dark">Daftar Sekarang</a></center>
@endsection