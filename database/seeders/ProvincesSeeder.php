<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['country_id' => 1, 'name' => 'Nanggroe Aceh Darussalam'],
            ['country_id' => 1, 'name' => 'Sumatera Utara'],
            ['country_id' => 1, 'name' => 'Sumatera Barat'],
            ['country_id' => 1, 'name' => 'Bengkulu'],
            ['country_id' => 1, 'name' => 'Riau'],
            ['country_id' => 1, 'name' => 'Sumatera Selatan'],
            ['country_id' => 1, 'name' => 'Bangka Belitung'],
            ['country_id' => 1, 'name' => 'Lampung'],
            ['country_id' => 1, 'name' => 'Banten'],
            ['country_id' => 1, 'name' => 'DKI Jakarta'],
            ['country_id' => 1, 'name' => 'Jawa Barat'],
            ['country_id' => 1, 'name' => 'Jawa Tengah'],
            ['country_id' => 1, 'name' => 'Yogyakarta'],
            ['country_id' => 1, 'name' => 'Jawa Timur'],
            ['country_id' => 1, 'name' => 'Bali'],
            ['country_id' => 1, 'name' => 'Nusa Tenggara Timur'],
            ['country_id' => 1, 'name' => 'Nusa Tenggara Barat'],
            ['country_id' => 1, 'name' => 'Sulawesi Selatan'],
            ['country_id' => 1, 'name' => 'Sulawesi Barat'],
            ['country_id' => 1, 'name' => 'Sulawesi Tengah'],
        ];

        Province::query()->insert($provinces);
    }
}
