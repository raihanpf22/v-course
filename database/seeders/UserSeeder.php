<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

        for($i=1; $i<=10; $i++){
            DB::table('users')->insert([
                'mahasiswa_nama' => $faker->name,
                'mahasiswa_npm' => $faker->numberBetween($min = 10000000 , $max = 99999999),
                'mahasiswa_kelas' => '4IA22',
                'password' => Hash::make('123'),
                'created_at' =>$faker-> dateTime($max = 'now', $timezone = null),
                'updated_at'=>$faker->dateTime($max = 'now', $timezone = null)
            ]);
        };

    }
}
