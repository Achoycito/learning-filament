<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('folders')->insert([
            'name' => 'Gestion',
            'category_id' => 1
        ]);
        DB::table('folders')->insert([
            'name' => 'Recursos Financieros',
            'category_id' => 2,
            'parent_id' => 1
        ]);
        DB::table('folders')->insert([
            'name' => 'Ley Disciplina Financiera',
            'category_id' => 3,
            'parent_id' =>2
        ]);
        
    }
}
