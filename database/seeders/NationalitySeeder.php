<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->insert([
            [
                'initials' => 'E',
                'description' => 'Estrangeiro',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'initials' => 'BR',
                'description' => 'Brasileiro',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
