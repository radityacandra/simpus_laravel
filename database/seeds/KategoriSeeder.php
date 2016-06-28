<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Kategori::create([
      'nama'  => 'Matematika'
    ]);

    Kategori::create([
        'nama'  => 'Kimia'
    ]);

    Kategori::create([
        'nama'  => 'Bahasa Inggris'
    ]);
  }
}
