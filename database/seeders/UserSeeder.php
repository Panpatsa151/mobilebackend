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
        //
        DB::table('users')->insert([
            [
                "name" =>"panpatsa",
                "password" => md5("123456"),
                "email" =>"642021151@tsu.ac.th",
                "address" =>"tsu",
                "telephone" =>"0987588689",
            ],
            [
                "name" =>"bungkai",
                "password" => md5("123456"),
                "email" =>"bungkai@tsu.ac.th",
                "address" =>"tsu",
                "telephone" =>"0981111111",
            ],
            [
                "name" =>"pansa",
                "password" => md5("123456"),
                "email" =>"pansa@tsu.ac.th",
                "address" =>"tsu",
                "telephone" =>"0987511119",
            ],
            

        ]);
    }
}