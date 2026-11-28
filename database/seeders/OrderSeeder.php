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

        foreach ($data as &$item) {
            $item['order_pictures'] = json_encode($item['order_pictures']);
        }

        DB::table('orders')->insert($data);
    }
}
