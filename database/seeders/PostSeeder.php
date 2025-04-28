<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<20; $i++)
        DB::table('posts')->insert(
            array(
                'category_id' => rand(1,10),
                'title'=>'Post '.$i,
                'description'=>'Description of Post '.$i,
                'text'=>$faker->paragraph(5).'<br>'.$i,
                'slug'=>'post-'.$i,
            )
        );
    }
}
