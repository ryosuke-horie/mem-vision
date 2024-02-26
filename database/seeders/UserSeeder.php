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
        // ユーザーを作成
        User::create([
            'name' => 'Admin',
            'email' => 'test@mail.com',
            'password' => 'password',
        ]);
    }
}
