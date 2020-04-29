<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PegawaiCrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        // insert data ke table pegawai
        for($i=1;$i<=50;$i++){

        
        DB::table('pegawai')->insert([
        	'pegawai_nama' => $faker->name,
        	'pegawai_jabatan' => $faker->jobTitle,
        	'pegawai_usia' => $faker->numberBetween(25,40),
        	'pegawai_alamat' => $faker->address
        ]);
    }
    }
}
