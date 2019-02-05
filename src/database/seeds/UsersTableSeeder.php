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
        DB::table("users")->insert([
            'name'=> 'おがわしょうへい',
            'email'=> 'shoheiogawa1028@gmail.com',
            'password'=> bcrypt('secret'),

        ]);//DBに直打ち
        
        $user = new User();
        $user->name = 'おがわしょうへい';
        $user->email = 'kensho1028@yahoo.co.jp';
        $user->password = bcrypt('secret');
        $user->save();//eloquentを使った記述

        // factory(User::class, 20)->create();
        //fakerを使う。
    }
}
