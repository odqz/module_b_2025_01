<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode(file_get_contents(database_path('/data/orders.json')), true);

        $data = array_map(function ($item) {
            $item['order_pictures'] = json_encode($item['order_pictures']);

            return array_merge($item, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }, $data);

        DB::table('orders')->insert($data);
    }
}
