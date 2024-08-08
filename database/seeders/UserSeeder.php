<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name" => "admin",
                "email" => "admin@admin.com",
                "password" => "admin",
                "role_id" => 1,
            ],
            [
                "name" => "user",
                "email" => "user@gmail.com",
                "password" => "user",
                "role_id" => 2,
            ]
        ]);
    }
}
