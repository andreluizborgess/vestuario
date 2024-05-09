<?php

namespace Database\Seeders;

use App\Models\Roupas;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Roupas::create([
                'tecido' => 'tecido' . $i,
                'tamanho' => 'tamanho' . $i,
                'cor' => 'cor' . $i, 
                'categoria' => 'categoria' . $i,
                'fabricacao' => 'fabricacao' . $i,
                'estacao' => 'estacao' . $i,
                'descricao'  => 'descricao' . $i
    
    
    
            ]);
        }

      
    }
}
