<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = Carbon::now();
        //

        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => '1234',
                'idrol' => 1,
                'created_at' => $timestamp, 
                'updated_at' => $timestamp,
            ]

        ]);

    }
}
