<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        $now   = \Carbon\Carbon::now();
        for ($i = 0; $i < 10; $i++) {
            $post = [
                'song_name' => $faker->word,
                'singer' => $faker->name,
                'lyrics' => $faker->sentence,
                'created_at' => $now,
                'updated_at' => $now,
                'user_id' => $faker->numberBetween(1, 10),
            ];
            DB::table('posts')->insert($post);
        }
    }
}
