<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            [
                "id" => 11,
                "uf" => "RO",
                "nome" => "Rondônia",
            ],
            [
                "id" => 12,
                "uf" => "AC",
                "nome" => "Acre",
            ],
            [
                "id" => 13,
                "uf" => "AM",
                "nome" => "Amazonas",
            ],
            [
                "id" => 14,
                "uf" => "RR",
                "nome" => "Roraima",
            ],
            [
                "id" => 15,
                "uf" => "PA",
                "nome" => "Pará",
            ],
            [
                "id" => 16,
                "uf" => "AP",
                "nome" => "Amapá",
            ],
            [
                "id" => 17,
                "uf" => "TO",
                "nome" => "Tocantins",
            ],
            [
                "id" => 21,
                "uf" => "MA",
                "nome" => "Maranhão",
            ],
            [
                "id" => 22,
                "uf" => "PI",
                "nome" => "Piauí",
            ],
            [
                "id" => 23,
                "uf" => "CE",
                "nome" => "Ceará",
            ],
            [
                "id" => 24,
                "uf" => "RN",
                "nome" => "Rio Grande do Norte",
            ],
            [
                "id" => 25,
                "uf" => "PB",
                "nome" => "Paraíba",
            ],
            [
                "id" => 26,
                "uf" => "PE",
                "nome" => "Pernambuco",
            ],
            [
                "id" => 27,
                "uf" => "AL",
                "nome" => "Alagoas",
            ],
            [
                "id" => 28,
                "uf" => "SE",
                "nome" => "Sergipe",
            ],
            [
                "id" => 29,
                "uf" => "BA",
                "nome" => "Bahia",
            ],
            [
                "id" => 31,
                "uf" => "MG",
                "nome" => "Minas Gerais",
            ],
            [
                "id" => 32,
                "uf" => "ES",
                "nome" => "Espírito Santo",
            ],
            [
                "id" => 33,
                "uf" => "RJ",
                "nome" => "Rio de Janeiro",
            ],
            [
                "id" => 35,
                "uf" => "SP",
                "nome" => "São Paulo",
            ],
            [
                "id" => 41,
                "uf" => "PR",
                "nome" => "Paraná",
            ],
            [
                "id" => 42,
                "uf" => "SC",
                "nome" => "Santa Catarina",
            ],
            [
                "id" => 43,
                "uf" => "RS",
                "nome" => "Rio Grande do Sul",
            ],
            [
                "id" => 50,
                "uf" => "MS",
                "nome" => "Mato Grosso do Sul",
            ],
            [
                "id" => 51,
                "uf" => "MT",
                "nome" => "Mato Grosso",
            ],
            [
                "id" => 52,
                "uf" => "GO",
                "nome" => "Goiás",
            ],
            [
                "id" => 53,
                "uf" => "DF",
                "nome" => "Distrito Federal",
            ],
        ];
        DB::table('estados')->insert($estados);

    }
}
