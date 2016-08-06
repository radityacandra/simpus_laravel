<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->call(BookSeeder::class);
    $this->call(KategoriSeeder::class);
    $this->call(BukuKategoriSeeder::class);
    $this->call(MemberSeeder::class);
    $this->call(AdminSeeder::class);
    $this->call(UserRoleSeeder::class);
	  $this->call(PinjamanSeeder::class);
	  $this->call(MessageSeeder::class);
	  $this->call(MessageContainerSeeder::class);
  }
}
