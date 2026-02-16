<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $Valmy = Company::create([
            'nif' => '44026669T',
            'name' => 'Valmy Atlántica',
            'phone' => '981 261 704',
            'email' => 'valmyatlantica@valmyatlantica.com',
            'address_type' => 'Calle',
            'address_name' => 'Juan Flórez',
            'address_number' => '42',
            'address_info' => '3o izquierda',
            'city' => 'A Coruña',
            'postal_code' => '15004',
            'province' => 'A Coruña',
        ]);

        User::factory()->create([
            'password' => Hash::make('!aiFu%794_'),
            'name' => 'Aiyana',
            'surname1' => 'Funes',
            'surname2' => 'Nomdedeu',
            'birthdate' => '2003-01-17',
            'email' => 'ayan@gm.com',
            'phone' => '666623794',
            'role' => 'admin',
            'companyID' => $Valmy->id,
            'is_main_contact' => true,
        ]);
    }
}
