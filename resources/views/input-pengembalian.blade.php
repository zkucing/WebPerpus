@extends('blank')
@section('konten')    
</br>
    <center>
            <h1>Input Peminjaman Buku</h1>
            <form action="/input-peminjaman/simpan" method="post">
                {{ csrf_field() }}
                <div class="col-lg-6", style="width: auto; margin-left: auto; margin-right: auto">
                    <div class="p-5">
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control form-control-user" placeholder="Masukkan nama ..." required>
                        </div>
                        <div class="form-group">
                            <label>Kelas Siswa</label>
                            <input type="text" name="kelas_siswa" class="form-control form-control-user" placeholder="Masukkan kelas siswa ..." required>
                        </div>
                        <div class="form-group">
                            <label>Nomor HP Siswa</label>
                            <input type="text" name="nomor_hp" class="form-control form-control-user" placeholder="Masukkan nomor hp siswa ..." required>
                        </div>
                        <div class="form-group">
                            <label>Judul Buku yang Dipinjam</label>
                            <input type="text" name="judul_buku" class="form-control form-control-user" placeholder="Masukkan judul buku yang dipinjam ..." required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_peminjaman" class="form-control form-control-buku" placeholder="Masukkan tanggal pemnijaman ..." required>
                        </div>
                    </br>
                    <button class="btn btn-info btn-buku btn-block" type="submit">Input Peminjaman</button>                    </div>
                </div>
            </form>
    </center>    
@endsection