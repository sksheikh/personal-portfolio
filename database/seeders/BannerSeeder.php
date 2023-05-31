<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'name' => 'Sheikh Salah Uddin',
            'title' => 'PHP Developer, Laravel Developer, Full-Stack Web Developer',
            'bg_image' => 'banner.jpg',
            'profile_image' => 'profile.jpg',
            'resume' => 'resume.pdf',
            'github_link' => 'https://github.com/sksheikh',
            'linkedin_link' => 'https://github.com/sksheikh',
        ]);
    }
}
