<?php

use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert([
            [
                'name' => 'steam'
            ],
            [
                'name' => 'playstation'
            ],
            [
                'name' => 'xbox'
            ]
        ]);
    }
}
