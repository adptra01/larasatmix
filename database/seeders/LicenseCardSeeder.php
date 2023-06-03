<?php

namespace Database\Seeders;

use App\Models\LicenseCard;
use Illuminate\Database\Seeder;

class LicenseCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LicenseCard::factory(10)->create();

    }
}
