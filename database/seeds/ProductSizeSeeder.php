<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sizes')->insert([
            [
                'id_pro'=>1,
                'id_size'=>2
            ],
            [
                'id_pro'=>1,
                'id_size'=>1
            ],
            [
                'id_pro'=>1,
                'id_size'=>3
            ],
            [
                'id_pro'=>2,
                'id_size'=>1
            ],
            [
                'id_pro'=>3,
                'id_size'=>1
            ],
            [
                'id_pro'=>2,
                'id_size'=>4
            ],
            [
                'id_pro'=>8,
                'id_size'=>1
            ],
            [
                'id_pro'=>2,
                'id_size'=>5
            ],
            [
                'id_pro'=>3,
                'id_size'=>1
            ],
            [
                'id_pro'=>4,
                'id_size'=>2
            ],
            [
                'id_pro'=>4,
                'id_size'=>1
            ],
            [
                'id_pro'=>4,
                'id_size'=>4
            ],
            [
                'id_pro'=>5,
                'id_size'=>1
            ],
            [
                'id_pro'=>5,
                'id_size'=>2
            ],
            [
                'id_pro'=>5,
                'id_size'=>4
            ],
            [
                'id_pro'=>5,
                'id_size'=>3
            ]
            ,
            [
                'id_pro'=>6,
                'id_size'=>1
            ],
            [
                'id_pro'=>6,
                'id_size'=>2
            ],
            [
                'id_pro'=>6,
                'id_size'=>3
            ],
            [
                'id_pro'=>7,
                'id_size'=>1
            ],
            [
                'id_pro'=>8,
                'id_size'=>2
            ],
            [
                'id_pro'=>8,
                'id_size'=>1
            ],
            [
                'id_pro'=>9,
                'id_size'=>2
            ],
            [
                'id_pro'=>10,
                'id_size'=>3
            ],
            [
                'id_pro'=>11,
                'id_size'=>3
            ],
            [
                'id_pro'=>12,
                'id_size'=>1
            ],
            [
                'id_pro'=>12,
                'id_size'=>2
            ],
            [
                'id_pro'=>12,
                'id_size'=>5
            ],
            [
                'id_pro'=>13,
                'id_size'=>1
            ],
            [
                'id_pro'=>13,
                'id_size'=>2
            ],
            [
                'id_pro'=>14,
                'id_size'=>2
            ],
            [
                'id_pro'=>14,
                'id_size'=>4
            ],
            [
                'id_pro'=>15,
                'id_size'=>1
            ],
            [
                'id_pro'=>15,
                'id_size'=>3
            ],
            [
                'id_pro'=>16,
                'id_size'=>2
            ],
            [
                'id_pro'=>16,
                'id_size'=>5
            ],
            [
                'id_pro'=>16,
                'id_size'=>1
            ],
            [
                'id_pro'=>16,
                'id_size'=>3
            ],
            [
                'id_pro'=>17,
                'id_size'=>2
            ],
            [
                'id_pro'=>18,
                'id_size'=>1
            ],
            [
                'id_pro'=>18,
                'id_size'=>2
            ],
            [
                'id_pro'=>19,
                'id_size'=>2
            ],
            [
                'id_pro'=>19,
                'id_size'=>3
            ],
            [
                'id_pro'=>20,
                'id_size'=>1
            ],
            [
                'id_pro'=>21,
                'id_size'=>3
            ],
            [
                'id_pro'=>22,
                'id_size'=>4
            ],
            [
                'id_pro'=>23,
                'id_size'=>2
            ],
        ]);
    }
}
