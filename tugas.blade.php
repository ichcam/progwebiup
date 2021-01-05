
@extends('layout/main')

@section('container')
<br/><br/><br/>
    <h2>Tabel Tugas Pegawai</h2>
    <p>Cari Data Tugas ID Pegawai :</p>
    <form action="tugas/cari" method="GET">
      <input type="text" name="cari" placeholder="Cari ID pegawai .." value="{{ old('cari') }}">
      <input type="submit" value="CARI">
        </form>
        <br>
    <a href="/tugas/tambahtugas"> + Tambah Tugas Baru</a>

    <br/>
    <br/>

    <div class="container">
      
      <table table border="2" class="table table-striped table-dark">
        <thead class="thead-dark">
          <tr>
            <th>ID Pegawai</th>
            <th>Tanggal</th>
            <th>Nama Tugas</th>
            <th>Status</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
    @foreach($tugas as $p)
      <tr>
      <td>{{ $p->id_pegawai }}</td>
      <td>{{ $p->tanggal }}</td>
      <td>{{ $p->nama_tugas }}</td>
      <td>{{ $p->status }}</td>
      <td>
        <a href="/tugas/edittugas/{{ $p->id }}">Edit</a>
        <a href="/tugas/hapus/{{ $p->id }}">Hapus</a>
      </td>
      </tr>
      @endforeach
        </tbody>
      </table>
      Halaman : {{ $tugas->currentPage() }} <br/>
    Jumlah Data : {{ $tugas->total() }} <br/>
    Data Per Halaman : {{ $tugas->perPage() }} <br/>

        {{ $tugas->links() }}
      </div>
      <br><br><br><br><br><br><br>
      <br><br><br><br>
      </div>
    </body>
@endsection