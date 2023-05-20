@extends('blank')
@section('konten')    
</br>
    <center>
            <h1>Input Pengembalian Buku</h1>
            @foreach($id as $p)
            <form action="/lihat-peminjaman/update" method="post">
                {{ csrf_field() }}
                <div class="col-lg-6", style="width: auto; margin-left: auto; margin-right: auto">
                    <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                    <div class="p-1">
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control form-control-user" value="{{ $p->nama_siswa }}" required disabled>
                        </div>
                        <div class="form-group">
                            <label>Kelas Siswa</label>
                            <input type="text" name="kelas_siswa" class="form-control form-control-user" value="{{ $p->kelas_siswa }}" required disabled>
                        </div>
                        <div class="form-group">
                            <label>Nomor HP Siswa</label>
                            <input type="text" name="nomor_hp" class="form-control form-control-user" value="{{ $p->nomor_hp }}" required disabled>
                        </div>
                        <div class="form-group">
                            <label>Judul Buku yang Dipinjam</label>
                            <input type="text" name="judul_buku" class="form-control form-control-user" value="{{ $p->judul_buku }}" required disabled>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_peminjaman" class="form-control form-control-buku" value="{{ $p->tanggal_peminjaman }}" required disabled>
                        </div>
                    </br>
                    <button class="btn btn-danger btn-buku btn-block" type="submit">Kembalikan Buku</button>
                </div>
            </form>
            @endforeach
    </center>    
@endsection