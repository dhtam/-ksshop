<?php

use Illuminate\Database\Seeder;

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
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123987456'),
            'email_verified' => '1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
