<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    public function run()
    {
        $cities = [
            'الرياض', 'جدة', 'مكة', 'المدينة المنورة', 'الدمام', 'الخبر', 'أبها', 'الطائف', 'بريدة', 'حائل'
        ];

        foreach ($cities as $city) {
            DB::table('cities')->insert(['name' => $city]);
        }
    }
}
