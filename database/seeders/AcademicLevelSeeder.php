<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academic_levels')->insert([
            [
                'slug' => 'EF',
                'name' => 'Ensino Fundamental',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'slug' => 'EM',
                'name' => 'Ensino Médio',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'slug' => 'ES',
                'name' => 'Ensino Superior - Graduação',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'slug' => 'PGLS',
                'name' => 'Pós-Graduação (Lato Sensu)',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'slug' => 'PGSSM',
                'name' => 'Pós-Graduação (Stricto Sensu - Mestrado)',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'slug' => 'PGSSD',
                'name' => 'Pós-Graduação (Stricto Sensu - Doutorado)',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'slug' => 'N',
                'name' => 'Nenhum',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
