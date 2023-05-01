<?php

function eticket_stations(): array
{
    return [
        [
            'name' => 'Dhaka',
            'address' => 'Dhaka, Bangladesh',
            'lat' => 90.4135,
            'lon' => 23.8103,
        ],
        [
            'name' => 'Dhaka Airport',
            'address' => 'Dhaka Airport, Bangladesh',
            'lat' => 90.5125,
            'lon' => 23.5103,
        ],
        [
            'name' => 'Khulna',
            'lat' => 90.7125,
            'address' => 'Khulna, Bangladesh',
            'lon' => 23.7103,
        ]
    ];
}

function eticket_trains(): array
{
    return [
        [
            'name' => 'Subarna Express',
            'home_station_id' => 1,
            'date' => '2023-05-01',
            'start_time' => '06:00:00',

        ],
        [
            'name' => 'Chitra Express',
            'home_station_id' => 1,
            'date' => '2023-05-01',
            'start_time' => '11:00:00',

        ],
    ];
}

function eticket_bogis(): array
{
    return [
        [
            'name' => 'KA',
            'train_id' => 1,
        ],
        [
            'name' => 'KHA',
            'train_id' => 1,
        ],
    ];
}
