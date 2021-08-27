<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OtpConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Dumping data for table `otp_configurations` */
        DB::table('otp_configurations')->insert([
            'id' => 1,
            'type' => 'otp_for_order',
            'value' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('otp_configurations')->insert([
            'id' => 2,
            'type' => 'otp_for_delivery_status',
            'value' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('otp_configurations')->insert([
            'id' => 3,
            'type' => 'fast2sms',
            'value' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('otp_configurations')->insert([
            'id' => 4,
            'type' => 'twillo',
            'value' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('otp_configurations')->insert([
            'id' => 5,
            'type' => 'nexmo',
            'value' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('otp_configurations')->insert([
            'id' => 6,
            'type' => 'ssl_wireless',
            'value' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('otp_configurations')->insert([
            'id' => 7,
            'type' => 'mimo',
            'value' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
