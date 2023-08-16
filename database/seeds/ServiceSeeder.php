<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([ 
            'nama' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'produk' => Str::random(10),
            'alamat' => Str::random(10),
            'status' => Str::random(10),
        ]);
    }
}
