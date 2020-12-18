<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('folders')->truncate();
        DB::table('boxes')->truncate();
        DB::table('folder_user')->truncate();


        $this->call(UserSeeder::class);
        $this->call(FolderSeeder::class);
        $this->call(BoxSeeder::class);
        $this->call(FolderUserSeeder::class);
    }
}
