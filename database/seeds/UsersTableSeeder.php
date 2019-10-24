<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        User::truncate();

          $admin = User::create([
         'name' => 'admin',
         'email' => 'admin@admin.com',
         'password' => bcrypt('admin'),
         'is_admin' => '1',
         ]);
    }
}
