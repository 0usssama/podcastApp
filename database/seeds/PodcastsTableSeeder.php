<?php

use Illuminate\Database\Seeder;

class PodcastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('podcasts')->insert([
            'title' => Str::random(10),
            'file_name' => Str::random(10).'.mp3',
            'user_id' => 1
            ]);
    }
}
