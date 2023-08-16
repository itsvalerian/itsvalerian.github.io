<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merks')->insert([
        	'nama' => 'BMW',
        	'negara' => 'Jerman',
        	'gambar' => 'bundesmerk.png',
        ]);

        DB::table('merks')->insert([
        	'nama' => 'Mercedez benz',
        	'negara' => 'Inggris',
        	'gambar' => 'premierleague.png',
        ]);

        DB::table('merks')->insert([
        	'nama' => 'Toyota',
        	'negara' => 'Spanyol',
        	'gambar' => 'lamerk.png',
        ]);

        DB::table('merks')->insert([
        	'nama' => 'Porsche',
        	'negara' => 'Itali',
        	'gambar' => 'seriea.png',
        ]);
    }
}
