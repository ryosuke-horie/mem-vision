<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ユーザーを作成
        Member::create([
            'user_id' => 1,
            'last_name' => '山田',
            'first_name' => '太郎',
            'phone' => '090-1234-5678',
            'email' => 'test@mail.com',
            'image1' => 'image1.jpg',
            'image2' => 'image2.jpg',
            'image3' => 'image3.jpg',
            'nickname' => 'ヤマダ'
        ]);

        Member::create([
            'user_id' => 1,
            'last_name' => '田中',
            'first_name' => '花子',
            'phone' => '090-1234-5678',
            'email' => 'test@gmail.com',
            'image1' => 'image4.jpg',
            'image2' => 'image5.jpg',
            'image3' => 'image6.jpg',
            'nickname' => 'タナカ'
        ]);
    }
}
