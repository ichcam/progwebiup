@extends('layout/main')


@section('container')
			<br><br>
				<h3>Edit Pegawai</h3>

				<a href="/tugas">Kembali</a>

				<br/>
				<br/>

				@foreach ($tugas as $p)
				<form action="/tugas/update" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
					<div class="form-group">
						<label for="formGroupExampleInput">Id Pegawai :</label>
						<input type="number" class="form-control" id="formGroupExampleInput" name="id_pegawai" required="required" value="{{ $p->id_pegawai }}">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput">Tanggal :</label>
						<input type="datetime" class="form-control" id="formGroupExampleInput" name="tanggal" required="required" value="{{ $p->tanggal }}">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput">Nama Tugas :</label>
						<input type="text" class="form-control" id="formGroupExampleInput" name="tugas" required="required" value="{{ $p->nama_tugas }}">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput">Status :</label>
						<input type="text" class="form-control" id="formGroupExampleInput" name="status" required="required" value="{{ $p->status }}">
					</div>
					<div>
					<br/>
					<input type="submit" value="Simpan Data">
					</div>

				</form>
				@endforeach
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</body>
	@endsection
