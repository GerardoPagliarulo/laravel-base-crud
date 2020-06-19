<?php

use Illuminate\Database\Seeder;
use App\Assistant;
use Faker\Generator as Faker;

class AssistantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Clean fake data previos new run
        Assistant::truncate();
        // Faker
        $records = 7;
        for ($i = 0; $i < $records; $i++) { 
            // Random gender
            $gender = $faker->randomElement(['male', 'female']);
            $genderInitial = ($gender == 'male') ? 'm' : 'f';
            $newAssistant = new Assistant();
            $newAssistant->name = $faker->name($gender);
            $newAssistant->age = $faker->numberBetween(30, 60);
            $newAssistant->gender = $genderInitial;
            $newAssistant->address = $faker->address;
            $newAssistant->status = $faker->randomElement(['temporary', 'permanent']);
            $newAssistant->save();
        }
    }
}
