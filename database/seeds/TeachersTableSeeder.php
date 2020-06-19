<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use Faker\Generator as Faker;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Clean fake data previos new run
        //Teacher::truncate();
        // Faker
        $records = 7;
        for ($i = 0; $i < $records; $i++) { 
            // Random gender
            $gender = $faker->randomElement(['male', 'female']);
            $genderInitial = ($gender == 'male') ? 'm' : 'f';
            $newTeacher = new Teacher();
            $newTeacher->name = $faker->name($gender);
            $newTeacher->age = $faker->numberBetween(30, 60);
            $newTeacher->gender = $genderInitial;
            $newTeacher->address = $faker->address;
            // Data Save
            $newTeacher->save();
        }
    }
}
