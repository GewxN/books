<?php

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
        // $this->call(UsersTableSeeder::class);
        $user = new \App\User();
        $user->name = 'Tiptanya Sangoursub';
        $user->email = 'gewalee.tiptanya@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
