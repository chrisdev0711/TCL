<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contact' => $this->faker->text(255),
            'email' => $this->faker->text(255),
            'company_id' => \App\Models\Company::factory(),
            'phone' => $this->faker->phoneNumber,
            'contact' => $this->faker->text(255),
            'mobile' => $this->faker->phoneNumber,
        ];
    }
}
