<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    
    public function run(): void
    {
        $timestamp = Carbon::now();
       // DB::table('roles')->truncate();

        DB::table('roles')->insert([
           [ 'name' => 'AdminRoot',
            'created_at' => $timestamp, 
            'updated_at' => $timestamp,
        ],
        [ 
            'name' => 'UserBlog',
            'created_at' => $timestamp, 
            'updated_at' => $timestamp,
        ],
        ]);
    }
}
