<?php

namespace Database\Seeders;

use App\Models\CUP;
use App\Models\Price;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $cups = CUP::all();
        $faker = \Faker\Factory::create();

        foreach ($cups as $cup) {
            // 1. Decidimos la potencia de forma aleatoria (entre 3 y 800 kW como en tus fotos)
            $potenciaBase = $faker->randomFloat(2, 3, 800); 

            // 2. Determinamos Tarifa y Precios Aleatorios
            if ($potenciaBase <= 15) {
                $tariff = '2.0TD';
                // Generamos precios de energía aleatorios (0.10 - 0.15) y los ordenamos de mayor a menor
                $precios = [rand(1200, 1500)/10000, rand(1000, 1200)/10000, rand(800, 1000)/10000];
                $p_ener = [$precios[0], $precios[1], $precios[2], null, null, null];
                $p_pote = [$potenciaBase, $potenciaBase, 0, 0, 0, 0];
            } else {
                $tariff = ($potenciaBase <= 50) ? '3.0TD' : '6.1TD';
                // Generamos 6 precios aleatorios y los ordenamos para que P1 > P2... > P6
                $precios = [];
                for($i=0; $i<6; $i++) { $precios[] = rand(700, 1400)/10000; }
                rsort($precios); // Ordenar de mayor a menor
                
                $p_ener = $precios;
                $p_pote = array_fill(0, 6, $potenciaBase);
            }

            // 3. Actualizamos el CUP con su nueva tarifa real
            $cup->update(['tariff_type' => $tariff]);

            // 4. Creamos el registro de precio
            Price::create([
                'cup_id' => $cup->id,
                'p1_e' => $p_ener[0], 'p2_e' => $p_ener[1], 'p3_e' => $p_ener[2],
                'p4_e' => $p_ener[3], 'p5_e' => $p_ener[4], 'p6_e' => $p_ener[5],
                'p1_p' => $p_pote[0], 'p2_p' => $p_pote[1], 'p3_p' => $p_pote[2],
                'p4_p' => $p_pote[3], 'p5_p' => $p_pote[4], 'p6_p' => $p_pote[5],
                'fecha_vigor' => Carbon::now()->subMonths(rand(1, 12))->startOfMonth(),
                'fecha_fin' => null,
            ]);
        }
    }
}