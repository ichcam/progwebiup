@extends('layout/main')


@section('container')
<br><br>
	<h3>Tambahkan Data Pegawai</h3>

	<a href="/pegawai">Kembali</a>

	<br/>
	<br/>


	
	<form action="/pegawai/store" method="post">
	{{ csrf_field() }}
		<div class="form-group">
			<label for="formGroupExampleInput">Nama</label>
			<input type="text" class="form-control" id="formGroupExampleInput" name="nama" required="required">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Jabatan</label>
			<input type="text" class="form-control" id="formGroupExampleInput2" name="jabatan" required="required">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Umur</label>
			<input type="number" class="form-control" id="formGroupExampleInput2" name="umur" required="required">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Alamat</label>
			<input type="text" class="form-control" id="formGroupExampleInput2" name="alamat" required="required">
		</div>
		<div>
		<br/>
		<input type="submit" value="Simpan Data">
		</div>
	</form>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br>
	</div>
</body>
@endsection

