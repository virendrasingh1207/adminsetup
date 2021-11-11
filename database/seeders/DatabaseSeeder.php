<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CmsSeeder;
use Database\Seeders\GlobalSettingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call([
        CmsSeeder::class,
        GlobalSettingSeeder::class,
    ]);
        // \App\Models\User::factory(10)->create();
    }
}
