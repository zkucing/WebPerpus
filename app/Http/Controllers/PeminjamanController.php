<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 
class PeminjamanController extends Controller
{
    public function lihat()
    {
    	// mengambil data dari table tb_peminjaman
    	$db_peminjaman = DB::table('tb_peminjaman')->paginate(4);
    	// mengirim data ke view index
    	return view('lihat-peminjaman',['tb_peminjaman' => $db_peminjaman]);
    }

    public function input()
    {
		// memanggil view input
		return view('input-peminjaman');
    }

    public function simpan(Request $request)
    {
        // insert data ke table pegawai
        DB::table('tb_peminjaman')->insert([
        'nama_siswa' => $request->nama_siswa,
        'kelas_siswa' => $request->kelas_siswa,
        'nomor_hp' => $request->nomor_hp,
        'judul_buku' => $request->judul_buku,
        'tanggal_peminjaman' => $request->tanggal_peminjaman]);

        // alihkan halaman ke halaman pegawai 
        return redirect ('lihat-peminjaman');

		// $db_peminjaman = new tb_peminjaman();
        // $db_peminjaman->nama_siswa = $request->post("nama_siswa");
        // $db_peminjaman->kelas_siswa = $request->post("kelas_siswa");
        // $db_peminjaman->nomor_hp = $request->post("nomor_hp");
		// $db_peminjaman->judul_buku = $request->post("judul_buku");
        // $db_peminjaman->tanggal_peminjaman = $request->post("tanggal_peminjaman");
		// $db_peminjaman->save();
        // return redirect(route("lihat-peminjaman"));
    }

    public function edit($id)
    {
        // mengambil data berdasarkan id yang dipilih
        $db_peminjaman = DB::table('tb_peminjaman')->where('id',$id)->get();
        // passing data yang didapat ke view edit.blade.php
        return view('edit-peminjaman',['id' => $db_peminjaman]);
    }

    public function update(Request $request)
    {
        // update data ke table
        DB::table('tb_peminjaman')->where('id', $request->id)->update([
            'nama_siswa' => $request->nama_siswa,
            'kelas_siswa' => $request->kelas_siswa,
            'nomor_hp' => $request->nomor_hp,
            'judul_buku' => $request->judul_buku,
            'tanggal_peminjaman' => $request->tanggal_peminjaman]);
    
            // alihkan halaman ke halaman pegawai 
            return redirect ('lihat-peminjaman');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tb_peminjaman')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('lihat-peminjaman');
    }

    public function pengembalian($id)
    {
        // mengambil data berdasarkan id yang dipilih
        $db_peminjaman = DB::table('tb_peminjaman')->where('id',$id)->get();
        // passing data yang didapat ke view edit.blade.php
        return view('input-pengembalian',['id' => $db_peminjaman]);
    }

    public function selesai(Request $request)
    {
        // update data ke table
        DB::table('tb_peminjaman')->where('id', $request->id)->update([
            // 'nama_siswa' => $request->nama_siswa,
            // 'kelas_siswa' => $request->kelas_siswa,
            // 'nomor_hp' => $request->nomor_hp,
            // 'judul_buku' => $request->judul_buku,
            // 'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'denda' => $request->denda]);
    
            // alihkan halaman ke halaman pegawai 
            return redirect ('lihat-peminjaman');
    }
}