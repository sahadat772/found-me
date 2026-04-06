<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('listings')->insert([
            [
                'title' => 'Senior Full Stack Developer',
                'company' => 'Tech Solutions BD',
                'location' => 'Dhaka, Bangladesh',
                'salary' => '80,000 - 100,000 BDT',
                'description' => 'We are looking for an experienced full stack developer with React and Laravel experience.',
                'type' => 'full-time',
                'email' => 'careers@techsolutions.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Frontend Developer (React)',
                'company' => 'Innovative Soft',
                'location' => 'Remote (Bangladesh)',
                'salary' => '60,000 - 75,000 BDT',
                'description' => 'Join our team as a React developer. Must have experience with Next.js and Tailwind CSS.',
                'type' => 'full-time',
                'email' => 'hr@innovativesoft.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Part Time WordPress Developer',
                'company' => 'Web Agency BD',
                'location' => 'Chattogram, Bangladesh',
                'salary' => '30,000 - 40,000 BDT',
                'description' => 'Looking for a WordPress expert for part-time work. Flexible hours.',
                'type' => 'part-time',
                'email' => 'info@webagencybd.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}