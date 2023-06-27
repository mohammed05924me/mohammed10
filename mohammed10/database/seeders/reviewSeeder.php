<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class reviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'product_id' => Str::random(10),
                'reviewer' => Str::random(10),
                'rating' => Str::random(10),
                'body' => Str::random(10),
            ],
            [
                'product_id' => Str::random(10),
                'reviewer' => Str::random(10),
                'rating' => Str::random(10),
                'body' => Str::random(10),
            ],
            [
                'product_id' => Str::random(10),
                'reviewer' => Str::random(10),
                'rating' => Str::random(10),
                'body' => Str::random(10),
            ],
        ]);
    }
}
