<?php

use Illuminate\Database\Seeder;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'id'=>'1',
            'name'=>'TestName',
            'email'=>'testname@mail.ru',
            'password'=>'123456',
        ]);
    }
}
