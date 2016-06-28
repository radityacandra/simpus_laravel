<?php

use Illuminate\Database\Seeder;

use App\UserRole;

class UserRoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    UserRole::create([
      'role'  => 'member'
    ]);

    UserRole::create([
        'role'  => 'admin'
    ]);
  }
}
