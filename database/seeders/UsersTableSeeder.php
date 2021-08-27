<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'superadmin@gogo.com',
            'password' => bcrypt('qawsed53'),
            'current_team_id' => 1,
            'profile_photo_path' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gogo.com',
            'password' => bcrypt('qawsed53'),
            'current_team_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
