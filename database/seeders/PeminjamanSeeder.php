<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;



class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
 
            $faker = Faker::create('id');
     
            for($i = 1; $i <= 50; $i++){
                $timestamp = $faker->dateTime();
                // $tanggal = $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d');
     
                  // insert data ke table pegawai menggunakan Faker

                DB::table('tb_peminjaman')->insert([
                'nama_siswa' => $faker->name,
                'kelas_siswa' => $faker->jobTitle,
                'nomor_hp' => $faker->phoneNumber,
                'judul_buku' => $faker->sentence,
                'tanggal_peminjaman' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' =>('BELUM KEMBALI'),
                'created_at' => $timestamp,
                ]);
     
                }
        }
    }
}
