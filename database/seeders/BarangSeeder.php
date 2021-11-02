<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = 
        [
        	[
	        	'foto'=> 'admin',
	        	'nama'=> 'admin',
	        	'kode'=> 'admin',
	        	'harga_jual'=>3,
	        	'harga_beli'=>1,
	        	'stok'=>2
        	],
        	[
	        	'foto'=> 'user',
	        	'nama'=> 'user',
	        	'kode'=> 'user',
	        	'harga_jual'=>3,
	        	'harga_beli'=>1,
	        	'stok'=>2
        	],
        	[
	        	'foto'=> 'sadsadasda',
	        	'nama'=> 'sadsadasda',
	        	'kode'=> 'sadsadasda',
	        	'harga_jual'=>3,
	        	'harga_beli'=>1,
	        	'stok'=>2
        	],
        ];
        foreach ($barang as $b) {
        	Barang::create($b);
        }
    }
}
