<?php

namespace Database\Seeders;

use App\Models\Ilce;
use App\Models\Sehir;
use Illuminate\Database\Seeder;

class CıtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $citys = Ilce::select('il_adi')->groupBy('il_adi')->get();
        foreach ($citys as $c){
            $city = new Sehir();
            $city->il_adi = $c->il_adi;
            $city->save();
        }

    }
}
