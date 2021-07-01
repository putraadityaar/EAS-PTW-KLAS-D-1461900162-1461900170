<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'nama' => 'T-SHIRT PERSEBAYA CURVE - BLACK',
            'liga_id' => 2,
            'gambar' => '7.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'T-SHIRT PSBY KHGK - BLACK',
            'liga_id' => 2,
            'gambar' => '4.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'T-SHIRT STABILO TAPE - GREEN',
            'liga_id' => 2,
            'gambar' => '8.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'T-SHIRT TUGU 1927 - GREEN',
            'liga_id' => 2,
            'gambar' => '5.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'T-SHIRT GREEN FORCE FLAG - BLACK',
            'liga_id' => 2,
            'gambar' => '3.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Persebaya Surabaya Home 2020',
            'liga_id' => 1,
            'gambar' => '2.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'JERSEY BOXSET 2019 AUTHENTIC - AWAY',
            'liga_id' => 1,
            'gambar' => '6.jpg'
        ]);

    }
}
