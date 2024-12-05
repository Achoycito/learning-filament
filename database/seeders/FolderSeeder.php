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
        ]);
        DB::table('folders')->insert([
            'name' => 'Universidad',
        ]);
        DB::table('folders')->insert([
            'name' => 'Normatividad',
        ]);
    }
}
