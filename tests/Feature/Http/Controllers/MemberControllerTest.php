<?php

namespace Tests\Unit\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Inertia\Testing\AssertableInertia as Assert;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class MemberControllerTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // 50件のジム情報を作成
        User::factory()->count(50)->create();
    }

    #[Test]
    public function 未ログイン時、Login画面にリダイレクトされることをテスト()
    {
        // 一覧
        $response = $this->get('/members');
        $response->assertRedirect('/login');

        // 新規登録
        $response = $this->get('/members/create');
        $response->assertRedirect('/login');

        // 編集
        $response = $this->get('/members/1/edit');
        $response->assertRedirect('/login');

        // 削除
        $response = $this->delete('/members/1');
        $response->assertRedirect('/login');

        // 詳細
        $response = $this->get('/members/1');
        $response->assertRedirect('/login');
    }

    #[Test]
    public function ログイン後会員情報の各エンドポイントにアクセスできることをテスト()
    {
        $this->login();

        // 一覧
        $response = $this->get('/members');
        $response->assertOk();

        // 新規登録
        $response = $this->get('/members/create');
        $response->assertOk();

        // 編集
        $response = $this->get('/members/1/edit');
        $response->assertOk();

        // 削除
        $response = $this->delete('/members/1');
        $response->assertOk();

        // 詳細
        $response = $this->get('/members/1');
        $response->assertOk();
    }

    #[Test]
    public function 一覧画面_バックエンドに渡すパラメータをテスト()
    {
        // 会員情報を作成
        Member::factory()->count(100)->create();

        $this->login();
        $response = $this->get('/members');

        // Inertiaレスポンスをテスト
        $response->assertInertia(
            fn (Assert $page) => $page
                ->component('Members/Index')
                ->has('members')
                ->has('user')
        );
    }
}
