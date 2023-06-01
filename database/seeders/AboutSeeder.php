<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'Who Am I?',
            'description' => 'I am front end web developer as my passion with creativity.I always keep in mind 100% customer satisfaction with valid information and my job.Every second is important for me to deliver any project in due time.Here is some of my skills',
            'image' => 'about.png',
        ]);
    }
}
