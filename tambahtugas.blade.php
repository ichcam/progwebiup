@extends('layout/main')


@section('container')
			<br><br>
		<h3>Tambahkan Tugas</h3>

		<a href="/tugas">Kembali</a>

		<br/>
		<br/>

		<form action="/tugas/store" method="post">
		{{ csrf_field() }}
					<div class="form-group">
						<label for="formGroupExampleInput">Id Pegawai :</label>
						<input type="number" class="form-control" id="formGroupExampleInput" name="id_pegawai" required="required">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput">Tanggal :</label>
						<input type="datetime" class="form-control" id="formGroupExampleInput" name="tanggal" required="required">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput">Nama Tugas :</label>
						<input type="text" class="form-control" id="formGroupExampleInput" name="tugas" required="required">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput">Status :</label>
						<input type="text" class="form-control" id="formGroupExampleInput" name="status" required="required">
					</div>
					<div>
					<br/>
					<input type="submit" value="Simpan Data">
					</div>
		</form>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	</body>
	@endsection

