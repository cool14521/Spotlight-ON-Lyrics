<?php

    use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('Ja_JP');
        $now = \Carbon\Carbon::now();
        for ($i = 1; $i <= 10; $i++) {
            $user = [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('users')->insert($user);
        }
    }
}
