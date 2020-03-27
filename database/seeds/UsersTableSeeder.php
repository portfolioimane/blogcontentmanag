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
        $user = App\User::create([
           'name'=>'kati frantz',
           'email'=>'kati@franz.me',
           'password'=>bcrypt('password'),
           'admin' => 1
        ]);
        App\Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'uploads/avatars/audrey.jpg',
            'about'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit In blandit sagittis mi, et molestie elit blandit eu.',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com'
        ]);
    }
}
