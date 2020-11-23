<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
            'username' => Str::random(10),
            'email' => Str::random(4) . "@gmail.com",
            'password' => Str::random(8),
            'passport' => Str::random(8) . ".jpg"

        ]);
    }
}