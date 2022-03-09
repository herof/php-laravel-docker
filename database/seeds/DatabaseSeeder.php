<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('task')->insert([
            'id' => 'test1',
            'name' => 'test1@test.com',
            'day' => '2022/12/24', 
        ]);

    }
}
