<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ligas')->insert([
        	'nama' => 'Jersey',
        	'negara' => 'Indonesia',
        	'gambar' => 'bundesliga.png',
        ]);

        DB::table('ligas')->insert([
        	'nama' => 'Kaos',
        	'negara' => 'Indonesia',
        	'gambar' => 'premierleague.png',
        ]);
    }
}
