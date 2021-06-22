<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                'uf' => 'AC',
                'description' => 'Acre',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'AL',
                'description' => 'Alagoas',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'AM',
                'description' => 'Amazonas',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'AP',
                'description' => 'Amapá',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'BA',
                'description' => 'Bahia',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'CE',
                'description' => 'Ceará',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'DF',
                'description' => 'Distrito Federal',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'ES',
                'description' => 'Espírito Santo',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'GO',
                'description' => 'Goiás',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'MA',
                'description' => 'Maranhão',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'MG',
                'description' => 'Minas Gerais',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'MS',
                'description' => 'Mato Grosso do Sul',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'MT',
                'description' => 'Mato Grosso',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'PA',
                'description' => 'Pará',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'PB',
                'description' => 'Paraíba',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'PE',
                'description' => 'Pernambuco',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'PI',
                'description' => 'Piauí',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'PR',
                'description' => 'Paraná',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'RJ',
                'description' => 'Rio de Janeiro',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'RN',
                'description' => 'Rio Grande do Norte',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'RO',
                'description' => 'Rondônia',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'RR',
                'description' => 'Roraima',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'RS',
                'description' => 'Rio Grande do Sul',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'SC',
                'description' => 'Santa Catarina',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'SE',
                'description' => 'Sergipe',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'SP',
                'description' => 'São Paulo',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'TO',
                'description' => 'Tocantins',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
