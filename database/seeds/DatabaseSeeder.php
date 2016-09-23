<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RecordTableSeeder::class);
        $this->command->info('Record table seeded!');

        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeded!');
    }
}
