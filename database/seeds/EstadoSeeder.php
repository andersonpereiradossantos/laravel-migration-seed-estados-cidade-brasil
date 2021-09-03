<?php

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
        DB::table('estado')->insert([
            'codigo_uf' => 12,
            'uf' => 'AC',
            'nome' => 'Acre',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 27,
            'uf' => 'AL',
            'nome' => 'Alagoas',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 16,
            'uf' => 'AP',
            'nome' => 'Amapá',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 13,
            'uf' => 'AM',
            'nome' => 'Amazonas',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 29,
            'uf' => 'BA',
            'nome' => 'Bahia',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 23,
            'uf' => 'CE',
            'nome' => 'Ceará',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 53,
            'uf' => 'DF',
            'nome' => 'Distrito Federal',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 32,
            'uf' => 'ES',
            'nome' => 'Espírito Santo',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 52,
            'uf' => 'GO',
            'nome' => 'Goiás',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 21,
            'uf' => 'MA',
            'nome' => 'Maranhão',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 51,
            'uf' => 'MT',
            'nome' => 'Mato Grosso',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 50,
            'uf' => 'MS',
            'nome' => 'Mato Grosso do Sul',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 31,
            'uf' => 'MG',
            'nome' => 'Minas Gerais',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 15,
            'uf' => 'PA',
            'nome' => 'Pará',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 25,
            'uf' => 'PB',
            'nome' => 'Paraíba',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 41,
            'uf' => 'PR',
            'nome' => 'Paraná',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 26,
            'uf' => 'PE',
            'nome' => 'Pernambuco',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 22,
            'uf' => 'PI',
            'nome' => 'Piauí',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 33,
            'uf' => 'RJ',
            'nome' => 'Rio de Janeiro',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 24,
            'uf' => 'RN',
            'nome' => 'Rio Grande do Norte',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 43,
            'uf' => 'RS',
            'nome' => 'Rio Grande do Sul',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 11,
            'uf' => 'RO',
            'nome' => 'Rondônia',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 14,
            'uf' => 'RR',
            'nome' => 'Roraima',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 42,
            'uf' => 'SC',
            'nome' => 'Santa Catarina',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 35,
            'uf' => 'SP',
            'nome' => 'São Paulo',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 28,
            'uf' => 'SE',
            'nome' => 'Sergipe',
        ]);
        DB::table('estado')->insert([
            'codigo_uf' => 17,
            'uf' => 'TO',
            'nome' => 'Tocantins',
        ]);
    }
}
