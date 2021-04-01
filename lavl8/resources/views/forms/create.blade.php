@extends('layouts.homepages')
@section('content')
	<div class="card">
		<form action="{{ route('forms.store') }}" method="POST">
            @csrf
            <div class="row">
            	<div class="col-md-4">
				
                <h6><strong>I.DATA CALON MURID</strong></h6>
				
                <hr>
				
                <div class="row">
				
                <div class="col-md-6">
					<input type="text" class="form-control" name="np" placeholder="No. Pendaftaran">
				</div>
					<div class="col-md-6">
                		<input type="text" class="form-control" name="nama"  placeholder="Nama Lengkap"><br>
					</div>
				</div>
                <input type="text" class="form-control" name="nik"  placeholder="NIK"><br>
                <input type="text" class="form-control" name="asal"  placeholder="Asal Sekolah"><br>
                <input type="radio" class="" name="jk" value="laki-laki"> Laki-laki
                <input type="radio" class="" name="jk" value="perempuan"> Perempuan<br><br>
                <input type="text" class="form-control"  name="ttl" placeholder="Tempat Tanggal Lahir"><br>
                <input type="text" class="form-control"  name="agm" placeholder="Agama"><br>
                <input type="text" class="form-control"  name="email" placeholder="E-mail"><br>
                <input type="text" class="form-control" name="alamat"  placeholder="Alamat Rumah"><br>
                <input type="text" class="form-control"  name="nohp" placeholder="No. Telepon ( WhatsApp )"><br>
                <input type="text" class="form-control" name="nomt"  placeholder="Nama Wali"><br>
                <input type="text" class="form-control"  name="nohpt" placeholder="No. Telepon ( WhatsApp )"><br>
                <input type="text" class="form-control" name="jurusan" placeholder="Jurusan"><br>
                </div>
		
                </div>
			
            <input type="submit" value="Send" class="btn btn-dark">
			
            </div>
        </form>
	</div>
@endsection