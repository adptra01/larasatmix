<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class LicenseCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'nameOfOwner' => $this->faker->name(),
             'address' => $this->faker->address(),
            'telp' => $this->faker->phoneNumber(),
            'dateOfExpire' => Carbon::now()->format('y-m-d'),
            'extraTime' => Carbon::now()->addYears(1)->format('y-m-d'),
            'payDate' => Carbon::now()->format('y-m-d'),
            'payment' => $this->faker->numerify(),
             'status' => rand(0,1),
             'description' => $this->faker->paragraph(),
            'policeNumber' => 'BH '.$this->faker->numerify(),
            'brandAndType' => $this->faker->company(),
            'categoryAndModel' => $this->faker->countryCode(),
            'manufactureYear' => $this->faker->year(),
            'cylindrerCapacity' => $this->faker->numerify().' cc',
            'bodyNumber' => $this->faker->randomNumber(),
            'engineNumber' => $this->faker->randomNumber(),
            'color' => $this->faker->colorName(),
            'typeFuel' => $this->faker->emoji(),
            'licensePlateColor' => $this->faker->colorName(),
        ];
    }
}
