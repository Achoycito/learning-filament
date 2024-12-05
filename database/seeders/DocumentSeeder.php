<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('documents')->insert([
            'name' => 'Reporte 1',
            'folder_id' => 1
        ]);
        DB::table('documents')->insert([
            'name' => 'Reporte 2',
            'folder_id' => 1
        ]);
        DB::table('documents')->insert([
            'name' => 'Reporte 3',
            'folder_id' => 1
        ]);

        DB::table('documents')->insert([
            'name' => 'Reporte 4',
            'folder_id' => 2
        ]);
        DB::table('documents')->insert([
            'name' => 'OBJETIVO',
            'folder_id' => 2
        ]);
        DB::table('documents')->insert([
            'name' => 'Reporte 6',
            'folder_id' => 2
        ]);

        DB::table('documents')->insert([
            'name' => 'Reporte 7',
            'folder_id' => 3
        ]);
        DB::table('documents')->insert([
            'name' => 'Reporte 8',
            'folder_id' => 3
        ]);
        DB::table('documents')->insert([
            'name' => 'Reporte 9',
            'folder_id' => 3
        ]);
    }
}
