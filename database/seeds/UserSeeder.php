<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,100)->create();
        $user = \App\User::find(1);
        $user->name = 'lwy';
        $user->email = '583239353@qq.com';
        $user->password = bcrypt('123321');
        $user->save();
    }
}
