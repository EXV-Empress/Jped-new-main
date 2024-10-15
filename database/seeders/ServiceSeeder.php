<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::create(['name' => 'Wedding Photography', 'price' => 500.00]);
        Service::create(['name' => 'Portrait Photography', 'price' => 150.00]);
        Service::create(['name' => 'Event Photography', 'price' => 300.00]);
    }
}