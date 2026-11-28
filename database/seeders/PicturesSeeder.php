<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PicturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode(file_get_contents(database_path('/data/pictures.json')), true);
        $data = array_map(fn($item) => $item + ['note' => null], $data);

        DB::table('pictures')->insert($data);
    }
}
