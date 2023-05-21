@extends('blank')
@section('konten')


</br>
<center>
    <h1>Semua Buku yang Sedang Dipinjam</h1>
</center>
</br>
Halaman : {{ $tb_peminjaman->currentPage() }} <br/>
Jumlah Data : {{ $tb_peminjaman->total() }} <br/>
    <center>
        <table class="table">
        </br>
            <thead>
                <tr>
                    <th>Nomor Peminjaman</th>
                    <th>Nama Siswa yang Meminjam</th>
                    <th>Kelas Siswa yang Meminjam</th>
                    <th>Nomor Hp Siswa yang Meminjam</th>
                    <th>Judul Buku yang Dipinjam</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tb_peminjaman as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama_siswa }}</td>
                    <td>{{ $p->kelas_siswa }}</td>
                    <td>{{ $p->nomor_hp }}</td>
                    <td>{{ $p->judul_buku }}</td>
                    <td>{{ $p->tanggal_peminjaman }}</td>
                    <td>{{ $p->tanggal_pengembalian }}</td>
                    @if($p -> status == 'BELUM KEMBALI')
                        <td style="color: crimson">{{ $p->status }}</td>
                    @else
                        <td style="color:blue">{{ $p->status }}</td>
                    @endif
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              Opsi
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/lihat-peminjaman/edit/{{ $p->id }}">Edit</a></li>
                              <li><a class="dropdown-item" href="/lihat-peminjaman/hapus/{{ $p->id }}">Hapus</a></li>
                              <li><a class="dropdown-item" href="/input-pengembalian/{{ $p->id }}">Kembalikan Buku</a></li>
                            </ul>
                          </div>
                    </td>
                </tr>
                @endforeach
            </tbody>    
        </table>
        <br/>
        <ul class="pagination justify-content-center">
            {{ $tb_peminjaman->links('pagination::simple-bootstrap-4') }}
        </ul>
    </center>   
@endsection