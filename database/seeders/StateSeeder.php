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
                'name' => 'Acre',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'AL',
                'name' => 'Alagoas',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'AM',
                'name' => 'Amazonas',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'AP',
                'name' => 'Amapá',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'BA',
                'name' => 'Bahia',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'CE',
                'name' => 'Ceará',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'DF',
                'name' => 'Distrito Federal',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'ES',
                'name' => 'Espírito Santo',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'GO',
                'name' => 'Goiás',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'MA',
                'name' => 'Maranhão',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'MG',
                'name' => 'Minas Gerais',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'MS',
                'name' => 'Mato Grosso do Sul',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'MT',
                'name' => 'Mato Grosso',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'PA',
                'name' => 'Pará',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'PB',
                'name' => 'Paraíba',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'PE',
                'name' => 'Pernambuco',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'PI',
                'name' => 'Piauí',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'PR',
                'name' => 'Paraná',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'RJ',
                'name' => 'Rio de Janeiro',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'RN',
                'name' => 'Rio Grande do Norte',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'RO',
                'name' => 'Rondônia',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'RR',
                'name' => 'Roraima',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'RS',
                'name' => 'Rio Grande do Sul',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'SC',
                'name' => 'Santa Catarina',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'SE',
                'name' => 'Sergipe',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'SP',
                'name' => 'São Paulo',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'uf' => 'TO',
                'name' => 'Tocantins',
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
