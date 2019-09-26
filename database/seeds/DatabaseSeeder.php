<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('property')->insert([
            'id'=>1,
            'owner'=>'Mr.A'
        ]);

        DB::table('property_image')->insert([
            'id'=>1,
            'id_property'=>1,
            'id_image'=>1
        ]);


        DB::table('property_image')->insert([
            'id'=>2,
            'id_property'=>1,
            'id_image'=>2
        ]);

        DB::table('image')->insert([
            'id'=>1,
            'path'=>'localhost:8000/image1',
            'name'=>'image1'
        ]);

        DB::table('image')->insert([
            'id'=>2,
            'path'=>'localhost:8000/image2',
            'name'=>'image2'
        ]);

        DB::table('image')->insert([
            'id'=>3,
            'path'=>'localhost:8000/image3',
            'name'=>'image3'
        ]);


    }
}
