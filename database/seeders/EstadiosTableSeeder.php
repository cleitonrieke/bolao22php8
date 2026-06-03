<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estadios')->insert([
            'id' => 1,
            'ds_nome' => 'Estádio Azteca - México',
            'ds_foto' => 'azteca.avif'
        ]);
        DB::table('estadios')->insert([
            'id' => 2,
            'ds_nome' => 'Estádio Akron - México',
            'ds_foto' => 'akron.avif' 
        ]);
        DB::table('estadios')->insert([
            'id' => 3,
            'ds_nome' => 'Estádio BBVA - México',
            'ds_foto' => 'estadio_bbva.avif' 
        ]);
        DB::table('estadios')->insert([
            'id' => 4,
            'ds_nome' => 'BMO Field - Canadá',
            'ds_foto' => 'bmo_field.avif'            
        ]);
        DB::table('estadios')->insert([
            'id' => 5,
            'ds_nome' => 'BC Place - Canadá',
            'ds_foto' => 'bc_place.avif'            
        ]);
        DB::table('estadios')->insert([
            'id' => 6,
            'ds_nome' => 'Estádio Mercedes-Benz - EUA',
            'ds_foto' => 'estadio_mercedes_benz.avif'            
        ]);
        DB::table('estadios')->insert([
            'id' => 7,
            'ds_nome' => 'Estádio Gillette - EUA',
            'ds_foto' => 'gillette.avif'
        ]);
        DB::table('estadios')->insert([
            'id' => 8,
            'ds_nome' => 'Estádio AT&T - EUA',
            'ds_foto' => 'at_t.avif'            
        ]);            
        DB::table('estadios')->insert([
            'id' => 9,
            'ds_nome' => 'Lincoln Financial Field - EUA',
            'ds_foto' => 'lincoln_financial_field.avif'            
        ]);        
        DB::table('estadios')->insert([
            'id' => 10,
            'ds_nome' => 'Estádio NGR - EUA',
            'ds_foto' => 'ngr.avif'            
        ]);        
        DB::table('estadios')->insert([
            'id' => 11,
            'ds_nome' => 'GEHA Field at Arrowhead - EUA',
            'ds_foto' => 'geha_field.avif'            
        ]);        
        DB::table('estadios')->insert([
            'id' => 12,
            'ds_nome' => 'Estádio SoFI - EUA',
            'ds_foto' => 'sofi.avif'            
        ]);        
        DB::table('estadios')->insert([
            'id' => 13,
            'ds_nome' => 'Estádio Hard Rock - EUA',
            'ds_foto' => 'hard_rock.avif'            
        ]);        
        DB::table('estadios')->insert([
            'id' => 14,
            'ds_nome' => 'Estádio Met Life - EUA',
            'ds_foto' => 'met_life.avif'            
        ]);        
        DB::table('estadios')->insert([
            'id' => 15,
            'ds_nome' => 'Estádio Levi\'s - EUA',
            'ds_foto' => 'levis.avif'            
        ]);        
        DB::table('estadios')->insert([
            'id' => 16,
            'ds_nome' => 'Lumen Field - EUA',
            'ds_foto' => 'lumen_field.avif'            
        ]);        
    }
}
