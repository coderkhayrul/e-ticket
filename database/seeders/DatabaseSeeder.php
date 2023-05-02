<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bogi;
use App\Models\Schedule;
use App\Models\Seat;
use App\Models\Station;
use App\Models\Train;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //  Station Seeder Create
        foreach (eticket_stations() as $station){
            Station::create($station);
        }
        //  Train Seeder Create
        foreach (eticket_trains() as $train){
            Train::create($train);
        }
        //  Train Bogi Seeder Create
        foreach (eticket_bogis() as $bogi){
            Bogi::create($bogi);
        }
        //  Train Seat Seeder Create
        for ($i=1; $i<=30; $i++){
            Seat::create([
                'name' =>  Bogi::all()->random()->name . '-' . $i,
                'bogi_id' => Bogi::all()->random()->id,
            ]);
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
