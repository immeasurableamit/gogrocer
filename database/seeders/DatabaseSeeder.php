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
        $this->call(UsersTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(BusinessSettingSeeder::class);
        $this->call(SmsTemplateSeeder::class);
        $this->call(OtpConfigurationSeeder::class);
    }
}
