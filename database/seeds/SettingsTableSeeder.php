<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Setting::create([
        'site_name' => 'laravel blog',
        'contact_number' => '0000000000',
        'contact_email' => 'harry@potter.com',
        'address' => 'Hogwards'
       ]);
    }
}
