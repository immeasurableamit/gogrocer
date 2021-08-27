<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_settings')->insert([
            'id' => 1,
            'type' => 'email_verification',
            'value' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
