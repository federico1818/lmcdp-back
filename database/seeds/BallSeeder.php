<?php

use Illuminate\Database\Seeder;

class BallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('balls')->insert([
            [
                'name' => 'white'
            ],
            [
                'name' => 'bronze'
            ],
            [
                'name' => 'silver'
            ],
            [
                'name' => 'gold'
            ],
            [
                'name' => 'black'
            ]
        ]);
    }
}
