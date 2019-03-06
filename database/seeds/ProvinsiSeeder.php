<?php

use Illuminate\Database\Seeder;
use App\Provinsi;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array(
        	'BALI',
        	'BANTEN',
        	'BENGKULU',
        	'DI YOGYAKARTA',
        	'DKI JAKARTA',
        	'GORONTALO',
        	'JAMBI',
        	'JAWA BARAT',
        	'JAWA TENGAH',
        	'JAWA TIMUR',
        	'KALIMANTAN BARAT',
        	'KALIMANTAN SELATAN',
        	'KALIMANTAN TENGAH',
        	'KALIMANTAN TIMUR',
        	'KALIMANTAN UTARA',
        	'KEPULAUAN BANGKA BELITUNG',
        	'KEPULAUAN RIAU',
        	'LAMPUNG',
        	'MALUKU',
        	'MALUKU UTARA',
        	'NANGROE ACEH DARUSSALAM',
        	'NUSA TENGGARA BARAT',
        	'NUSA TENGGARA TIMUR',
        	'PAPUA',
        	'PAPUA BARAT',
        	'RIAU',
        	'SULAWESI BARAT',
        	'SULAWESI SELATAN',
        	'SULAWESI TENGAH',
        	'SULAWESI TENGGARA',
        	'SULAWESI UTARA',
        	'SUMATERA BARAT',
        	'SUMATERA SELATAN',
        	'SUMATERA UTARA'
        );
        foreach ($data as $d) {
        	Provinsi::create([
        		'nama' => $d
        	]);
        }
    }
}
