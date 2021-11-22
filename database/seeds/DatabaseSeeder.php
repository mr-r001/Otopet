<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
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
        if (Schema::hasTable('roles')) {
            if (DB::table('roles')->count() > 0) {
                DB::table('roles')->truncate();
            }

            DB::table('roles')->insert([
                [
                    'name' => 'Superadmin',
                ],
                [
                    'name' => 'Admin',
                ],
            ]);
        }

        if (Schema::hasTable('users')) {
            if (DB::table('users')->count() > 0) {
                DB::table('users')->truncate();
            }

            DB::table('users')->insert([
                [
                    'name' => 'SuperAdmin',
                    'email' => 'administrator@mail.com',
                    'password' => bcrypt('123'),
                    'profile_url' => 'admin.jpg',
                    'role_id' => 1,
                    'kabupaten' => null,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]);
        }

        if (Schema::hasTable('kabupatens')) {
            if (DB::table('kabupatens')->count() > 0) {
                DB::table('kabupatens')->truncate();
            }

            DB::table('kabupatens')->insert([
                [
                    'name' => 'Nabire',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Dogiyai',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Deiyai',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Paniai',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Intan Jaya',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Mimika',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]);
        }
    }
}
