<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $totalUsers = 0;
        $maxUsers = 60;

        //Obtener todas las empreas (aleatorias + manuales)
        $companies = Company::all();

        foreach ($companies as $company){
            if ($totalUsers >= $maxUsers) break;

            $name = fake()->firstName();
            $surname1 = fake()->lastName();
            $surname2 = fake()->lastName();

            User::create([
                'name' => $name,
                'surname1' => $surname1,
                'surname2' => $surname2,
                'email' => Str::lower($name . '.' . substr($surname1,0,1) . substr($surname2,0,1) . '@' . Str::slug($company->name) . '.com'),
                'password' => bcrypt('password'),
                'birthdate' => fake()->dateTimeBetween('-100 years', '-18 years')->format('Y-m-d'),
                'phone' => fake()->regexify('6[0-9]{8}'),
                'role' => 'client',
                'is_main_contact' => true,
                'company_id' => $company->id,
            ]);

            $totalUsers++;

            if ($totalUsers >= $maxUsers) break;

            $extraUsers = fake()->numberBetween(0,2);

            for ($i = 0; $i < $extraUsers; $i++) {
                if ($totalUsers >= $maxUsers) break;

                $name = fake()->firstName();
                $surname1 = fake()->lastName();
                $surname2 = fake()->lastName();

                User::create([
                    'name' => $name,
                    'surname1' => $surname1,
                    'surname2' => $surname2,
                    'email' => Str::lower($name . '.' . substr($surname1,0,1) . substr($surname2,0,1) . '@' . Str::slug($company->name) . '.com'),
                    'password' => bcrypt('password'),
                    'birthdate' => fake()->dateTimeBetween('-100 years', '-18 years')->format('Y-m-d'),
                    'phone' => fake()->regexify('6[0-9]{8}'),
                    'role' => 'client',
                    'is_main_contact' => false,
                    'company_id' => $company->id,
                ]);

                $totalUsers++;
            }
        }

    }
}
