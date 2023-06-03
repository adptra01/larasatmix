<?php

namespace Database\Seeders;

use App\Models\LicenseCard;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        LicenseCard::factory(10)->create();
        $this->call(ThemeSeeder::class);

        $data = [
            [
                'name' => 'Adi putra',
                'email' => 'm.a.syaputra.94@gmail.com',
                'email_verified_at' => now(),
                // 'isAdmin' => true,
                'password' => bcrypt('Ad1 putra'),
               ],
               [
                'name' => 'Mul Samsat',
                'email' => 'mulsamsat@gmail.com',
                'email_verified_at' => now(),
                // 'isAdmin' => true,
                'password' => bcrypt('mulsamsat'),
               ]  
        ];

        User::insert($data);    }
}
