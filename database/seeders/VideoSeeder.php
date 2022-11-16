<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        do {
            $code = $randomString = \Str::random(12);
        }
        while (
            Video::where('code', $code)->first()
        );
        $data = [
            'title' => 'Want to Deepen Your Knowledge is Something? Teach It!', 'user_id' => 1,
            'code' => $code,
            'url' => '<iframe width="560" height="315" scr="https://www.youtube.com/embed/A7yXCLCka10" title="Youtube Video Player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'description' => 'Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt.',
            'publish' => 1,
        ];

        Video::create($data);
    }
}
