<?php

namespace Database\Seeders;

use Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        for($i=0;  $i < 10; $i++) {	
            $faker= Faker\Factory::create('it_IT');
            $newTrain = new Train();
            $newTrain -> company =$faker->randomElement(['Freccia Gialla','Freccia Rossa','Italo','Trenitalia']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->dateTimeBetween('-1 day','+1 day');
            $newTrain->departure_time = $faker->time('H:i:s');
            $newTrain->arrival_date = $faker->dateTimeBetween('+1 day','+2 day');
            $newTrain->arrival_time = $faker->time('H:i:s');
            $newTrain->train_code = $faker->numberBetween(111111111111,999999999999);
            $newTrain->number_of_carriages = $faker->numberBetween(1,10);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
