<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Marketer;
use App\Models\CUP;
use Illuminate\Database\Seeder;

class CUPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = Company::all();
        $marketers = Marketer::all();
        $faker = \Faker\Factory::create('es_ES');

        $totalCupsCreated = 0;
        $maxTotalCups = 75;

        foreach ($companies as $company) {
            
            if ($totalCupsCreated >= $maxTotalCups){
                break;
            }

            $numCups = rand(1, 5);

            for ($i = 0; $i < $numCups; $i++) {
                if ($totalCupsCreated < $maxTotalCups){

                    CUP::create([
                        'company_id' => $company->id,
                        'marketer_id' => $marketers->random()->id,
                        'code' => $faker->unique()->bothify('ES00210000#########??'),
                        'tariff_type' => $faker->randomElement(['2.0TD', '3.0TD']),
                        'address_type' => $company->address_type,
                        'address_name' => $company->address_name,
                        'address_number' => $company->address_number,
                        'localidad' => $company->city,
                        'cp' => $company->postal_code,
                        'provincia' => $company->province,
                    ]);

                    $totalCupsCreated++;
                }
            }
        }
    }
}
