<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        //Array para guardar las empresas que se crean
        $companies = [];
        
        //Crear 20 empresas aleatorias
        for ($i = 0; $i < 20; $i++){
            $company = Company::factory()->create();
            $companies[] = $company;
        }
    }
}
