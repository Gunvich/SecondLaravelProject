<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<10; $i++)
        DB::table('categories')->insert(
            [
                'title'=>'Category'.$i,
                'slug'=>'category='.$i,
            ]
        );
    }
}
