<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GlobalSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('global_settings')->insert([
            'name' => Str::random(5),
            'phone_no' => Str::random(5),
            'logo' => '',
            'favicon' => '',
            'logo_base64' => '',
            'latitude' => Str::random(5),
            'longtitude' => Str::random(5),
            'facebook' => Str::random(5),
            'twitter' => Str::random(5),
            'linkedin' => Str::random(5),
            'instagram' => Str::random(5),
            'youtube' => Str::random(5),
            'play_store' => Str::random(5),
            'app_store' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'address' => Str::random(50),
            'google_analytic_script' => Str::random(50),
            'footer' => Str::random(50),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
