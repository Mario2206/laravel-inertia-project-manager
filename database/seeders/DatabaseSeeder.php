<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        DB::table('clients')->truncate();
        DB::table('projects')->truncate();
        Schema::enableForeignKeyConstraints();

        User::factory(3)->create();
        Client::factory(10)->create();
        Project::factory(10)->create();
    }
}
