<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Гидроцикл',
                'description' => 'Заезд на гидроцикле',
                'price' => 100,
                'duration_minutes' => 10,
                'capacity' => 2,
            ],
            [
                'name' => 'Банан',
                'description' => 'Катание на надувном банане',
                'price' => 0,
                'duration_minutes' => 10,
                'capacity' => 1,
            ],
            [
                'name' => 'Ватрушка',
                'description' => 'Катание на водной ватрушке',
                'price' => 0,
                'duration_minutes' => 10,
                'capacity' => 1,
            ],
            [
                'name' => 'SUP-доска',
                'description' => 'Аренда SUP-доски',
                'price' => 0,
                'duration_minutes' => 60,
                'capacity' => 1,
            ],
        ];

        foreach ($services as $service) {
            Service::firstOrCreate(
                ['name' => $service['name']],
                [...$service, 'is_active' => true],
            );
        }
    }
}
