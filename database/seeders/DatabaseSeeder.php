<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // ---- New Admin ----
        $this->call([UserAdmSeeder::class]);

        // ---- New 5 Users ----
        User::factory(5)->create();
    }
}
