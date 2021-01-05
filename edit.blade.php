@extends('layout/main')


@section('container')
		<br><br>
			<h3>Edit Pegawai</h3>

			<a href="/pegawai"> Kembali</a>

			<br/>
			<br/>

			

			@foreach ($pegawai as $p)
			<form action="/pegawai/update" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
				<div class="form-group">
					<label for="formGroupExampleInput">Nama :</label>
					<input type="text" class="form-control" id="formGroupExampleInput" name="nama" required="required" value="{{ $p->pegawai_nama }}" >
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">Jabatan :</label>
					<input type="text" class="form-control" id="formGroupExampleInput" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}" >
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">Umur :</label>
					<input type="number" class="form-control" id="formGroupExampleInput" name="umur" required="required" value="{{ $p->pegawai_umur }}" >
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">Alamat :</label>
					<input type="text" class="form-control" id="formGroupExampleInput" name="alamat" required="required" value="{{ $p->pegawai_alamat }}" >
				</div>
				<div>
				<br/>
				<input type="submit" value="Simpan Data">
				</div>
				
			</form>
			@endforeach
		<br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
			</div>
		</body>
		@endsection
