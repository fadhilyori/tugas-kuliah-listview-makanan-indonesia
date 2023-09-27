<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            [
                'name' => 'Mi Aceh',
                'province_id' => 1,
                'description' => 'Mi pedas khas Aceh di Indonesia.'
            ],
            [
                'name' => 'Bika Ambon',
                'province_id' => 2,
                'description' => 'Penganan khas Medan, Sumatera Utara.'
            ],
            [
                'name' => 'Rendang',
                'province_id' => 3,
                'description' => 'Masakan Minangkabau berbahan dasar daging.'
            ],
            [
                'name' => 'Pendap',
                'province_id' => 4,
                'description' => 'Makanan dari Provinsi Bengkulu dengan cita rasa pedas dan gurih.'
            ],
            [
                'name' => 'Gulai Belacan',
                'province_id' => 5,
                'description' => 'Makanan tradisional Riau dengan bahan dasar udang dan rempah-rempah.'
            ],
            [
                'name' => 'Pempek',
                'province_id' => 6,
                'description' => 'Makanan terbuat dari daging ikan digiling lembut.'
            ],
            [
                'name' => 'Mi Bangka',
                'province_id' => 7,
                'description' => 'Hidangan mi khas pulau Bangka.'
            ],
            [
                'name' => 'Seruit',
                'province_id' => 8,
                'description' => 'Olahan ikan yang digoreng atau dibakar.'
            ],
            [
                'name' => 'Sate Bandeng',
                'province_id' => 9,
                'description' => 'Sate khas dari ikan bandeng.'
            ],
            [
                'name' => 'Kerak Telor',
                'province_id' => 10,
                'description' => 'Makanan khas Betawi terbuat dari beras ketan putih dan telur.'
            ],
            [
                'name' => 'Karedok',
                'province_id' => 11,
                'description' => 'Salad sayuran mentah dengan saus kacang.'
            ],
            [
                'name' => 'Garang Asem',
                'province_id' => 12,
                'description' => 'Ayam dimasak dengan bumbu asam dan pedas.'
            ],
            [
                'name' => 'Gudeg',
                'province_id' => 13,
                'description' => 'Makanan khas Yogyakarta terbuat dari nangka muda dan santan.'
            ],
            [
                'name' => 'Rujak Cingur',
                'province_id' => 14,
                'description' => 'Salad dengan berbagai buah dan bahan seperti lontong, tahu, tempe, dan cingur.'
            ],
            [
                'name' => 'Ayam Betutu',
                'province_id' => 15,
                'description' => 'Ayam yang dibaluri bumbu khas Bali.'
            ],
            [
                'name' => 'Catemak Jagung',
                'province_id' => 16,
                'description' => 'Dessert dari Nusa Tenggara Timur dengan kacang-kacangan dan sayuran.'
            ],
            [
                'name' => 'Ayam Taliwang',
                'province_id' => 17,
                'description' => 'Ayam dibakar dan dibumbui dengan saus khas.'
            ],
            [
                'name' => 'Coto Makassar',
                'province_id' => 18,
                'description' => 'Sup dengan jeroan sapi dan bumbu khas Makassar.'
            ],
            [
                'name' => 'Bau Peapi',
                'province_id' => 19,
                'description' => 'Makanan Mandar yang pedas dengan ikan.'
            ],
            [
                'name' => 'Uta Dada',
                'province_id' => 20,
                'description' => 'Olahan ayam kampung dengan santan yang gurih dan pedas.'
            ],
        ];

        Food::query()->insert($foods);
    }
}
