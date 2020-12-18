<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = new User([
            'id' => 1,
            'name' => '山田',
            'email' => 'yamada@mail.com',
            'password' => '11111111'
        ]);
        $user->save();


        $user = new User([
            'id' => 2,
            'name' => '田中',
            'email' => 'tanaka@mail.com',
            'password' => '11111111'
        ]);
        $user->save();


        $user = new User([
            'id' => 3,
            'name' => '高橋',
            'email' => 'takahashi@mail.com',
            'password' => '11111111'
        ]);
        $user->save();


        $user = new User([
            'id' => 4,
            'name' => '鈴木',
            'email' => 'suzuki@mail.com',
            'password' => '11111111'
        ]);
        $user->save();


        $user = new User([
            'id' => 5,
            'name' => '山本',
            'email' => 'yamamoto@mail.com',
            'password' => '11111111'
        ]);
        $user->save();
    }
}
