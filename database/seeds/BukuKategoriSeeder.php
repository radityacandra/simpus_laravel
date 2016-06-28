<?php

use Illuminate\Database\Seeder;
use App\BukuKategori;

class BukuKategoriSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    BukuKategori::create([
      'kategori'  => 'Matematika',
      'judul_buku'=> 'Matematika 2 Untuk SMA/MA Program Studi IPS Kelas XI'
    ]);

    BukuKategori::create([
        'kategori'  => 'Kimia',
        'judul_buku'=> 'Memahami Kimia SMA/MA 1'
    ]);

    BukuKategori::create([
        'kategori'  => 'Bahasa Inggris',
        'judul_buku'=> 'Developing English Competencies for Senior High School Grade X'
    ]);
  }
}
