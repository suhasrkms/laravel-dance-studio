<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(20)->create();
        \App\Models\Events::factory(5)->create();
        \App\Models\Feedback::factory(5)->create();
        \App\Models\TeachersProfile::factory(5)->create();
        $this->call(AdminSeeder::class);
    }
}
