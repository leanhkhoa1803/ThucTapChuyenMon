<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'cate_name'=>'Iphone',
                'cate_slug'=>Str::slug('Iphone')
            ],
            [
                'cate_name'=>'Samsung',
                'cate_slug'=>Str::slug('Samsung')
            ]
        ];
        DB::table('category')->insert($data);
    }
}
