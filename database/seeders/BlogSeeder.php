<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Phiki\Support\Str as SupportStr;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10),
            'created_by' => 1,
            'updated_by' => 2,
        ]);
    }
}
