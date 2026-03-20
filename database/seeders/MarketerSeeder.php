<?php

namespace Database\Seeders;

use App\Models\Marketer;
use Illuminate\Database\Seeder;

class MarketerSeeder extends Seeder
{
    public function run(): void
    {
        $marketers = [
            ['name' => 'Axpo', 'url_web' => 'https://www.axpo.com'],
            ['name' => 'Contigo Energía', 'url_web' => 'https://contigoenergia.com'],
            ['name' => 'EDP', 'url_web' => 'https://www.edpenergia.es'],
            ['name' => 'Eleia', 'url_web' => 'https://eleiaenergia.es'],
            ['name' => 'Endesa', 'url_web' => 'https://www.endesa.com'],
            ['name' => 'Gestornova', 'url_web' => 'https://gestornova.es'],
            ['name' => 'Iberdrola', 'url_web' => 'https://www.iberdrola.es'],
            ['name' => 'Naturgy', 'url_web' => 'https://www.naturgy.es'],
            ['name' => 'Total', 'url_web' => 'https://www.totalenergies.es'],
            ['name' => 'Visalia', 'url_web' => 'https://grupo-visalia.com'],
        ];

        foreach ($marketers as $marketer){
            Marketer::updateOrCreate(
                ['name' => $marketer['name']],
                ['url_web' => $marketer['url_web']]
            );
        }
    }
}
