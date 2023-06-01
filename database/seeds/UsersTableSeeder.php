<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Indra Surya Hanjaya',
            'email' => 'Indra321@gmail.com',
            'password' => Hash::make('1234567'),
        ]);

    }
}
