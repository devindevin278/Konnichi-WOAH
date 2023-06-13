<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Province;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = Province::all();

        foreach ($provinces as $province) {
            $provinceName = $province->name;
            $cities = [];

            // Add cities for each province
            switch ($provinceName) {

                case 'Aceh':
                    $cities = [
                        ['name' => 'Banda Aceh'],
                        ['name' => 'Lhokseumawe'],
                        ['name' => 'Langsa'],
                        ['name' => 'Subulussalam'],
                        ['name' => 'Meulaboh'],
                    ];
                    break;
                case 'North Sumatra':
                    $cities = [
                        ['name' => 'Medan'],
                        ['name' => 'Pematang Siantar'],
                        ['name' => 'Tebing Tinggi'],
                        ['name' => 'Binjai'],
                        ['name' => 'Padangsidimpuan'],
                    ];
                    break;
                case 'West Sumatra':
                    $cities = [
                        ['name' => 'Padang'],
                        ['name' => 'Bukittinggi'],
                        ['name' => 'Payakumbuh'],
                        ['name' => 'Padangpanjang'],
                        ['name' => 'Sawahlunto'],
                    ];
                    break;
                case 'Bengkulu':
                    $cities = [
                        ['name' => 'Bengkulu'],
                        ['name' => 'Curup'],
                        ['name' => 'Mukomuko'],
                        ['name' => 'Kepahiang'],
                        ['name' => 'Argamakmur'],
                    ];
                    break;
                case 'Riau':
                    $cities = [
                        ['name' => 'Pekanbaru'],
                        ['name' => 'Dumai'],
                        ['name' => 'Tembilahan'],
                        ['name' => 'Selat Panjang'],
                        ['name' => 'Bagansiapiapi'],
                    ];
                    break;
                case 'Jambi':
                    $cities = [
                        ['name' => 'Jambi'],
                        ['name' => 'Sungai Penuh'],
                        ['name' => 'Muara Bungo'],
                        ['name' => 'Muarasabak'],
                        ['name' => 'Kuala Tungkal'],
                    ];
                    break;
                case 'South Sumatra':
                    $cities = [
                        ['name' => 'Palembang'],
                        ['name' => 'Prabumulih'],
                        ['name' => 'Pagar Alam'],
                        ['name' => 'Lubuklinggau'],
                        ['name' => 'Baturaja'],
                    ];
                    break;
                case 'Bangka Belitung Islands':
                    $cities = [
                        ['name' => 'Pangkalpinang'],
                        ['name' => 'Tanjung Pandan'],
                        ['name' => 'Muntok'],
                        ['name' => 'Toboali'],
                        ['name' => 'Koba'],
                    ];
                    break;
                case 'Lampung':
                    $cities = [
                        ['name' => 'Bandar Lampung'],
                        ['name' => 'Metro'],
                        ['name' => 'Liwa'],
                        ['name' => 'Gedong Tataan'],
                        ['name' => 'Kalianda'],
                    ];
                    break;

                case 'Bali':
                    $cities = [
                        ['name' => 'Denpasar'],
                        ['name' => 'Badung'],
                        ['name' => 'Tabanan'],
                        ['name' => 'Gianyar'],
                        ['name' => 'Bangli'],
                    ];
                    break;

                case 'Banten':
                        $cities = [
                            ['name' => 'Serang'],
                            ['name' => 'Tangerang'],
                            ['name' => 'Cilegon'],
                            ['name' => 'Serang City'],
                            ['name' => 'Tangerang City'],
                        ];
                        break;
                case 'West Java':
                        $cities = [
                            ['name' => 'Bandung'],
                            ['name' => 'Bogor'],
                            ['name' => 'Depok'],
                            ['name' => 'Cimahi'],
                            ['name' => 'Tasikmalaya'],
                        ];
                        break;
                case 'Central Java':
                    $cities = [
                        ['name' => 'Semarang'],
                        ['name' => 'Surakarta (Solo)'],
                        ['name' => 'Surakarta City'],
                        ['name' => 'Salatiga'],
                        ['name' => 'Pekalongan'],
                    ];
                    break;
                case 'Yogyakarta Special Region':
                    $cities = [
                        ['name' => 'Yogyakarta'],
                        ['name' => 'Bantul'],
                        ['name' => 'Sleman'],
                        ['name' => 'Kulon Progo'],
                        ['name' => 'Gunung Kidul'],
                    ];
                    break;
                case 'East Java':
                    $cities = [
                        ['name' => 'Surabaya'],
                        ['name' => 'Malang'],
                        ['name' => 'Sidoarjo'],
                        ['name' => 'Mojokerto'],
                        ['name' => 'Jember'],
                    ];
                    break;

                case 'West Kalimantan':
                    $cities = [
                        ['name' => 'Pontianak'],
                        ['name' => 'Singkawang'],
                        ['name' => 'Ketapang'],
                        ['name' => 'Sambas'],
                        ['name' => 'Mempawah'],
                    ];
                    break;
                case 'South Kalimantan':
                    $cities = [
                        ['name' => 'Banjarmasin'],
                        ['name' => 'Banjarbaru'],
                        ['name' => 'Martapura'],
                        ['name' => 'Pelaihari'],
                        ['name' => 'Tanah Laut'],
                    ];
                    break;
                case 'Central Kalimantan':
                    $cities = [
                        ['name' => 'Palangkaraya'],
                        ['name' => 'Sampit'],
                        ['name' => 'Kuala Pembuang'],
                        ['name' => 'Buntok'],
                        ['name' => 'Muara Teweh'],
                    ];
                    break;
                case 'East Kalimantan':
                    $cities = [
                        ['name' => 'Balikpapan'],
                        ['name' => 'Samarinda'],
                        ['name' => 'Bontang'],
                        ['name' => 'Tenggarong'],
                        ['name' => 'Sangatta'],
                    ];
                    break;
                case 'North Kalimantan':
                    $cities = [
                        ['name' => 'Tarakan'],
                        ['name' => 'Nunukan'],
                        ['name' => 'Malinau'],
                        ['name' => 'Tanjung Selor'],
                        ['name' => 'Tideng Pale'],
                    ];
                    break;

                case 'South Sulawesi':
                    $cities = [
                        ['name' => 'Makassar'],
                        ['name' => 'Makassar City'],
                        ['name' => 'Parepare'],
                        ['name' => 'Palopo'],
                        ['name' => 'Mamuju'],
                    ];
                    break;
                case 'North Sulawesi':
                    $cities = [
                        ['name' => 'Manado'],
                        ['name' => 'Bitung'],
                        ['name' => 'Tomohon'],
                        ['name' => 'Kotamobagu'],
                        ['name' => 'Tondano'],
                    ];
                    break;
                case 'Central Sulawesi':
                    $cities = [
                        ['name' => 'Palu'],
                        ['name' => 'Donggala'],
                        ['name' => 'Poso'],
                        ['name' => 'Buol'],
                        ['name' => 'Toli-Toli'],
                    ];
                    break;
                case 'West Sulawesi':
                    $cities = [
                        ['name' => 'Mamuju'],
                        ['name' => 'Majene'],
                        ['name' => 'Polewali Mandar'],
                        ['name' => 'Mamasa'],
                        ['name' => 'Mamuju Tengah'],
                    ];
                    break;
                case 'Southeast Sulawesi':
                    $cities = [
                        ['name' => 'Kendari'],
                        ['name' => 'Baubau'],
                        ['name' => 'Kolaka'],
                        ['name' => 'Kendari City'],
                        ['name' => 'Lasusua'],
                    ];
                    break;
                case 'Gorontalo':
                    $cities = [
                        ['name' => 'Gorontalo'],
                        ['name' => 'Limboro'],
                        ['name' => 'Tilamuta'],
                        ['name' => 'Marisa'],
                        ['name' => 'Gorontalo City'],
                    ];
                    break;
                case 'Papua':
                    $cities = [
                        ['name' => 'Jayapura'],
                        ['name' => 'Biak'],
                        ['name' => 'Merauke'],
                        ['name' => 'Timika'],
                        ['name' => 'Wamena'],
                    ];
                    break;
                case 'West Papua':
                        $cities = [
                            ['name' => 'Manokwari'],
                            ['name' => 'Sorong'],
                            ['name' => 'Fakfak'],
                            ['name' => 'Kaimana'],
                            ['name' => 'Raja Ampat'],
                        ];
                        break;
                default:
                    // No cities defined
                    break;
            }

            // Insert cities into the database
            foreach ($cities as $city) {
                $city['province_id'] = $province->id;
                City::create($city);
            }
        }
    }
}
