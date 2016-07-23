<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

use App\User;

class AdminSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = new Factory();
    $faker = $faker->create();
    $faker->addProvider(new Faker\Provider\en_ZA\PhoneNumber($faker));

    for ($i = 0; $i<100; $i++){
      $nim = $faker->numberBetween(111111, 999999);
      User::create([
          'name'    => $faker->name,
          'email'   => $faker->email,
          'nip'     => $nim,
          'password'=> bcrypt($nim),
          'role'    => 'admin',
          'nomor_hp'=> $faker->mobileNumber,
          'alamat_rumah'  => $faker->address,
          'kelas'   => 'X-'.$faker->numberBetween(1,9),
          'profile_picture_ptr' => 'img/member-cover/1466931333Screenshot_from_2016-06-24_12-40-07.png'
      ]);
    }
  }
}
