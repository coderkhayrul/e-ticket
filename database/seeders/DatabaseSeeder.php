<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bogi;
use App\Models\Schedule;
use App\Models\Seat;
use App\Models\Station;
use App\Models\Train;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);

        //  Station Seeder Create
        foreach (eticket_stations() as $station){
            Station::create($station);
        }
        //  Train Seeder Create
        Train::insert(
            [
                [
                    'name' => 'Suborno Express',
                    'date' => '2022-01-06',
                    'home_station_id' => 1,
                    'start_time' => '06:00'
                ],
                [
                    'name' => 'Chitra Express',
                    'date' => '2022-01-06',
                    'home_station_id' => 1,
                    'start_time' => '11:00'
                ]
            ]
        );

        $trains = Train::all();
        foreach ($trains as $train){
            foreach (eticket_bogis() as $bogiItem){
                $bogi = new Bogi();
                $bogi->name = $bogiItem;
                $bogi->train_id = $train->id;
                $bogi->save();

                for ($i=0; $i<=30; $i++){
                    $seat = new Seat();
                    $seat->name = $bogi->name . '-' . $i;
                    $seat->bogi_id = $bogi->id;
                    $seat->train_id = $train->id;
                    $seat->save();
                }
            }
        }
        Schedule::create([
            'train_id' => 1,
            'station_id' => 2,
            'time' => '07:00',
            's_chair_price' => 15,
            'f_chair_price' => 20,
            'shovon_price' => 10,
        ]);
    }
}
