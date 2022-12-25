<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [   'id' => '178500',
                'adresa' => 'Bulevar Peka Dapčevića 29/11000 Beograd',
                'status' => 'Otkazana',
                'datum_narucivanja' => new DateTime('23.12.2022 13:39:55'),
                'kolicina' => '1000kg',
                'datum_isporuke' => new DateTime('23.12.2022 13:55:44'),
                'aktivna' => false
        ],
            [   'id' => '168591',
                'adresa' => 'Bulevar Peka Dapčevića 29/11000 Beograd',
                'status' => 'Isporučena',
                'datum_narucivanja' => new DateTime('20.12.2022 13:59:55'),
                'kolicina' => '1250kg',
                'datum_isporuke' => new DateTime('25.12.2022 13:40:34'),
                'aktivna' => false
            ],
            [   'id' => '178501',
                'adresa' => 'Bulevar Peka Dapčevića 29/11000 Beograd',
                'status' => 'U transportu',
                'datum_narucivanja' => new DateTime('23.12.2022 13:59:55'),
                'kolicina' => '1000kg',
                'datum_isporuke' => null,
                'aktivna' => true
            ],
            [   'id' => '177123',
                'adresa' => 'Bulevar Peka Dapčevića 29/11000 Beograd',
                'status' => 'Obrađena',
                'datum_narucivanja' => new DateTime('5.12.2022 13:59:55'),
                'kolicina' => '2000kg',
                'datum_isporuke' => null,
                'aktivna' => true
            ],
            ]);
    }
}
