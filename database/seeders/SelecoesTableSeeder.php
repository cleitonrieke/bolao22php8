<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SelecoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('selecoes')->insert([
            'id' => 1,
            'ds_nome' => 'México',
            'ds_icone' => 'mexico.png',
            'id_grupo' => 1,
            'cd_handcap' => 5,
        	'ds_cor' => 'verde',
        	'ds_fonte' => '',
        	'ds_cor2' => '#ffffff'
        ]);
        DB::table('selecoes')->insert([
            'id' => 2,
            'ds_nome' => 'África do Sul',
            'ds_icone' => 'africa_do_sul.png',
            'id_grupo' => 1,
            'cd_handcap' => 9,
        		'ds_cor' => 'verde',
        		'ds_fonte' => '',
        		'ds_cor2' => '#dff10f'
        ]);
        DB::table('selecoes')->insert([
            'id' => 3,
            'ds_nome' => 'Coreia do Sul',
            'ds_icone' => 'coreia_do_sul.png',
            'id_grupo' => 1,
            'cd_handcap' => 8,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#000000'
        ]);
        DB::table('selecoes')->insert([
            'id' => 4,
            'ds_nome' => 'República Tcheca',
            'ds_icone' => 'republica_tcheca.png',
            'id_grupo' => 1,
            'cd_handcap' => 7,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#000000'
        ]);
        DB::table('selecoes')->insert([
            'id' => 5,
            'ds_nome' => 'Canadá',
            'ds_icone' => 'canada.png',
            'id_grupo' => 2,
            'cd_handcap' => 7,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#FFFFFF'
        ]);
        DB::table('selecoes')->insert([
            'id' => 6,
            'ds_nome' => 'Bosnia e Herzegovina',
            'ds_icone' => 'bosnia_herzegovina.png',
            'id_grupo' => 2,
            'cd_handcap' => 8,
        		'ds_cor' => 'azul',
        		'ds_fonte' => '',
        		'ds_cor2' => '#eeff00'
        ]);
        DB::table('selecoes')->insert([
            'id' => 7,
            'ds_nome' => 'Catar',
            'ds_icone' => 'catar.png',
            'id_grupo' => 2,
            'cd_handcap' => 9,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#FFFFFF'
        ]);
        DB::table('selecoes')->insert([
            'id' => 8,
            'ds_nome' => 'Suiça',
            'ds_icone' => 'suica.png',
            'id_grupo' => 2,
            'cd_handcap' => 5,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#ffffff'
        ]);
        DB::table('selecoes')->insert([
            'id' => 9,
            'ds_nome' => 'Brasil',
            'ds_icone' => 'brasil.png',
            'id_grupo' => 3,
            'cd_handcap' => 2,
        		'ds_cor' => 'amarela',
        		'ds_fonte' => '',
        		'ds_cor2' => '#074f07'
        ]);
        DB::table('selecoes')->insert([
            'id' => 10,
            'ds_nome' => 'Marrocos',
            'ds_icone' => 'marrocos.png',
            'id_grupo' => 3,
            'cd_handcap' => 5,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#03420e'
        ]);
        DB::table('selecoes')->insert([
            'id' => 11,
            'ds_nome' => 'Haiti',
            'ds_icone' => 'haiti.png',
            'id_grupo' => 3,
            'cd_handcap' => 10,
        		'ds_cor' => 'azul',
        		'ds_fonte' => '',
        		'ds_cor2' => '#b30909'
        ]);
        DB::table('selecoes')->insert([
            'id' => 12,
            'ds_nome' => 'Escócia',
            'ds_icone' => 'escocia.png',
            'id_grupo' => 3,
            'cd_handcap' => 6,
        		'ds_cor' => 'azul',
        		'ds_fonte' => '',
        		'ds_cor2' => '#ffffff'
        ]);
        DB::table('selecoes')->insert([
            'id' => 13,
            'ds_nome' => 'Estados Unidos',
            'ds_icone' => 'estados_unidos.png',
            'id_grupo' => 4,
            'cd_handcap' => 5,
        		'ds_cor' => 'branca',
        		'ds_fonte' => '',
        		'ds_cor2' => '#8c0606'
        ]);
        DB::table('selecoes')->insert([
            'id' => 14,
            'ds_nome' => 'Paraguai',
            'ds_icone' => 'paraguai.png',
            'id_grupo' => 4,
            'cd_handcap' => 7,
        		'ds_cor' => 'branca',
        		'ds_fonte' => '',
        		'ds_cor2' => '#cb1d06'
        ]);
        DB::table('selecoes')->insert([
            'id' => 15,
            'ds_nome' => 'Austrália',
            'ds_icone' => 'australia.png',
            'id_grupo' => 4,
            'cd_handcap' => 8,
        		'ds_cor' => 'amarela',
        		'ds_fonte' => '',
        		'ds_cor2' => '#023f07'
        ]);
        DB::table('selecoes')->insert([
            'id' => 16,
            'ds_nome' => 'Turquia',
            'ds_icone' => 'turquia.png',
            'id_grupo' => 4,
            'cd_handcap' => 6,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#ffffff'
        ]);
        DB::table('selecoes')->insert([
            'id' => 17,
            'ds_nome' => 'Alemanha',
            'ds_icone' => 'alemanha.png',
            'id_grupo' => 5,
            'cd_handcap' => 3,
        		'ds_cor' => 'branca',
        		'ds_fonte' => '',
        		'ds_cor2' => '#000000'
        ]);
        DB::table('selecoes')->insert([
            'id' => 18,
            'ds_nome' => 'Curaçao',
            'ds_icone' => 'curacao.png',
            'id_grupo' => 5,
            'cd_handcap' => 10,
        		'ds_cor' => 'amarela',
        		'ds_fonte' => '',
        		'ds_cor2' => '#0e18d9'
        ]);
        DB::table('selecoes')->insert([
            'id' => 19,
            'ds_nome' => 'Costa do Marfim',
            'ds_icone' => 'costa_do_marfim.png',
            'id_grupo' => 5,
            'cd_handcap' => 7,
        		'ds_cor' => 'laranja',
        		'ds_fonte' => '',
        		'ds_cor2' => '#2f6538'
        ]);
        DB::table('selecoes')->insert([
            'id' => 20,
            'ds_nome' => 'Equador',
            'ds_icone' => 'equador.png',
            'id_grupo' => 5,
            'cd_handcap' => 5,
        		'ds_cor' => 'amarela',
        		'ds_fonte' => '',
        		'ds_cor2' => '#020b74'
        ]);
        DB::table('selecoes')->insert([
            'id' => 21,
            'ds_nome' => 'Holanda',
            'ds_icone' => 'holanda.png',
            'id_grupo' => 6,
            'cd_handcap' => 3,
        		'ds_cor' => 'laranja',
        		'ds_fonte' => '',
        		'ds_cor2' => '#000000'
        ]);
        DB::table('selecoes')->insert([
            'id' => 22,
            'ds_nome' => 'Japão',
            'ds_icone' => 'japao.png',
            'id_grupo' => 6,
            'cd_handcap' => 4,
        		'ds_cor' => 'azul',
        		'ds_fonte' => '',
        		'ds_cor2' => '#ffffff'
        ]);
        DB::table('selecoes')->insert([
            'id' => 23,
            'ds_nome' => 'Suécia',
            'ds_icone' => 'suecia.png',
            'id_grupo' => 6,
            'cd_handcap' => 6,
        		'ds_cor' => 'amarela',
        		'ds_fonte' => '',
        		'ds_cor2' => '#0b0bac'
        ]);
        DB::table('selecoes')->insert([
            'id' => 24,
            'ds_nome' => 'Tunísia',
            'ds_icone' => 'tunisia.png',
            'id_grupo' => 6,
            'cd_handcap' => 8,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#FFFFFF'
        ]);
        DB::table('selecoes')->insert([
            'id' => 25,
            'ds_nome' => 'Bélgica',
            'ds_icone' => 'belgica.png',
            'id_grupo' => 7,
            'cd_handcap' => 4,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#d1f007'
        ]);
        DB::table('selecoes')->insert([
            'id' => 26,
            'ds_nome' => 'Egito',
            'ds_icone' => 'egito.png',
            'id_grupo' => 7,
            'cd_handcap' => 7,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#000000'
        ]);
        DB::table('selecoes')->insert([
            'id' => 27,
            'ds_nome' => 'Irã',
            'ds_icone' => 'ira.png',
            'id_grupo' => 7,
            'cd_handcap' => 8,
        		'ds_cor' => 'branca',
        		'ds_fonte' => '',
        		'ds_cor2' => '#0a3202'
        ]);
        DB::table('selecoes')->insert([
            'id' => 28,
            'ds_nome' => 'Nova Zelândia',
            'ds_icone' => 'nova_zelandia.png',
            'id_grupo' => 7,
            'cd_handcap' => 9,
        		'ds_cor' => 'preta',
        		'ds_fonte' => '',
        		'ds_cor2' => '#FFFFFF'
        ]);
        DB::table('selecoes')->insert([
            'id' => 29,
            'ds_nome' => 'Espanha',
            'ds_icone' => 'espanha.png',
            'id_grupo' => 8,
            'cd_handcap' => 1,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#8B8000'
        ]);
        DB::table('selecoes')->insert([
            'id' => 30,
            'ds_nome' => 'Cabo Verde',
            'ds_icone' => 'cabo_verde.png',
            'id_grupo' => 8,
            'cd_handcap' => 10,
        		'ds_cor' => 'azul',
        		'ds_fonte' => '',
        		'ds_cor2' => '#870808'
        ]);
        DB::table('selecoes')->insert([
            'id' => 31,
            'ds_nome' => 'Arábia Saudita',
            'ds_icone' => 'arabia_saudita.png',
            'id_grupo' => 8,
            'cd_handcap' => 9,
        		'ds_cor' => 'verde',
        		'ds_fonte' => '',
        		'ds_cor2' => '#ffffff'
        ]);
        DB::table('selecoes')->insert([
            'id' => 32,
            'ds_nome' => 'Uruguai',
            'ds_icone' => 'uruguai.png',
            'id_grupo' => 8,
            'cd_handcap' => 5,
        		'ds_cor' => 'uruguai',
        		'ds_fonte' => '',
        		'ds_cor2' => '#FFFFFF'
        ]);
        DB::table('selecoes')->insert([
            'id' => 33,
            'ds_nome' => 'França',
            'ds_icone' => 'franca.png',
            'id_grupo' => 9,
            'cd_handcap' => 1,
        		'ds_cor' => 'azul',
        		'ds_fonte' => '',
        		'ds_cor2' => '#8f0707cb'
        ]);
        DB::table('selecoes')->insert([
            'id' => 34,
            'ds_nome' => 'Senegal',
            'ds_icone' => 'senegal.png',
            'id_grupo' => 9,
            'cd_handcap' => 5,
        		'ds_cor' => 'verde',
        		'ds_fonte' => '',
        		'ds_cor2' => '#e8b419'
        ]);
        DB::table('selecoes')->insert([
            'id' => 35,
            'ds_nome' => 'Iraque',
            'ds_icone' => 'iraque.png',
            'id_grupo' => 9,
            'cd_handcap' => 10,
        		'ds_cor' => 'branca',
        		'ds_fonte' => '',
        		'ds_cor2' => '#000000'
        ]);
        DB::table('selecoes')->insert([
            'id' => 36,
            'ds_nome' => 'Noruega',
            'ds_icone' => 'noruega.png',
            'id_grupo' => 9,
            'cd_handcap' => 4,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#0f0fc2'
        ]);
        DB::table('selecoes')->insert([
            'id' => 37,
            'ds_nome' => 'Argentina',
            'ds_icone' => 'argentina.png',
            'id_grupo' => 10,
            'cd_handcap' => 2,
        		'ds_cor' => 'argentina',
        		'ds_fonte' => '',
        		'ds_cor2' => '#000000'
        ]);
        DB::table('selecoes')->insert([
            'id' => 38,
            'ds_nome' => 'Argélia',
            'ds_icone' => 'argelia.png',
            'id_grupo' => 10,
            'cd_handcap' => 7,
        		'ds_cor' => 'branca',
        		'ds_fonte' => '',
        		'ds_cor2' => '#09b322'
        ]);
        DB::table('selecoes')->insert([
            'id' => 39,
            'ds_nome' => 'Áustria',
            'ds_icone' => 'austria.png',
            'id_grupo' => 10,
            'cd_handcap' => 6,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#000000'
        ]);
        DB::table('selecoes')->insert([
            'id' => 40,
            'ds_nome' => 'Jordânia',
            'ds_icone' => 'jordania.png',
            'id_grupo' => 10,
            'cd_handcap' => 10,
        		'ds_cor' => 'branca',
        		'ds_fonte' => '',
        		'ds_cor2' => '#e80909'
        ]);
        DB::table('selecoes')->insert([
            'id' => 41,
            'ds_nome' => 'Portugal',
            'ds_icone' => 'portugal.png',
            'id_grupo' => 11,
            'cd_handcap' => 3,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#095d06'
        ]);
        DB::table('selecoes')->insert([
            'id' => 42,
            'ds_nome' => 'Congo',
            'ds_icone' => 'congo.png',
            'id_grupo' => 11,
            'cd_handcap' => 9,
        		'ds_cor' => 'azul',
        		'ds_fonte' => '',
        		'ds_cor2' => '#da0b0b'
        ]);
        DB::table('selecoes')->insert([
            'id' => 43,
            'ds_nome' => 'Uzbequistão',
            'ds_icone' => 'uzbequistao.png',
            'id_grupo' => 11,
            'cd_handcap' => 10,
        		'ds_cor' => 'azul',
        		'ds_fonte' => '',
        		'ds_cor2' => '#FFFFFF'
        ]);
        DB::table('selecoes')->insert([
            'id' => 44,
            'ds_nome' => 'Colômbia',
            'ds_icone' => 'colombia.png',
            'id_grupo' => 11,
            'cd_handcap' => 4,
        		'ds_cor' => 'amarela',
        		'ds_fonte' => '',
        		'ds_cor2' => '#e80909'
        ]);
        DB::table('selecoes')->insert([
            'id' => 45,
            'ds_nome' => 'Inglaterra',
            'ds_icone' => 'inglaterra.png',
            'id_grupo' => 12,
            'cd_handcap' => 2,
        		'ds_cor' => 'branca',
        		'ds_fonte' => '',
        		'ds_cor2' => '#e80909'
        ]);
        DB::table('selecoes')->insert([
            'id' => 46,
            'ds_nome' => 'Croácia',
            'ds_icone' => 'croacia.png',
            'id_grupo' => 12,
            'cd_handcap' => 5,
        		'ds_cor' => 'croacia',
        		'ds_fonte' => '',
        		'ds_cor2' => '#060c6b'
        ]);
        DB::table('selecoes')->insert([
            'id' => 47,
            'ds_nome' => 'Gana',
            'ds_icone' => 'gana.png',
            'id_grupo' => 12,
            'cd_handcap' => 8,
        		'ds_cor' => 'branca',
        		'ds_fonte' => '',
        		'ds_cor2' => '#000000'
        ]);
        DB::table('selecoes')->insert([
            'id' => 48,
            'ds_nome' => 'Panamá',
            'ds_icone' => 'panama.png',
            'id_grupo' => 12,
            'cd_handcap' => 9,
        		'ds_cor' => 'vermelha',
        		'ds_fonte' => '',
        		'ds_cor2' => '#FFFFFF'
        ]);
        DB::table('selecoes')->insert([
            'id' => 49,
            'ds_nome' => 'TBD',
            'ds_icone' => 'fifa.jpeg',
            'id_grupo' => 12,
            'cd_handcap' => 10,
        		'ds_cor' => '',
        		'ds_fonte' => '',
        		'ds_cor2' => ''
        ]);
    }
}
