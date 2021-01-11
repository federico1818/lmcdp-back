<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Yamcha',
            'email' => 'yamcha@dbz.com',
            'password' => Hash::make('1234')
        ]);

        factory(User::class)->create([
            'name' => 'Krillin',
            'email' => 'krillin@dbz.com',
            'password' => Hash::make('1234')
        ]);
    }
}
