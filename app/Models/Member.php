<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'last_name',
        'first_name',
        'phone',
        'email',
        'address',
        'image1',
        'image2',
        'image3',
        'nickname',
    ];

    /**
     * ユーザーIDに紐づくメンバー情報を全件取得
     *
     * @param  int  $userId  ユーザーID
     * @return Collection<int, Member>
     */
    public function getAllMemberByUserId(int $userId): Collection
    {
        return $this->where('user_id', $userId)->get();
    }

    /**
     *
     */
    public function storeMember(Request $data): Member
    {
        // ログインユーザー(ジム)のIDを取得
        $userId = Auth::id();
        // ログインユーザー(ジム)のIDをメンバー情報に紐づける
        $data['user_id'] = $userId;

        // 画像ファイルを取得しハッシュ名を取得
        $file1 = $data->file('file1');
        $file2 = $data->file('file2');
        $file3 = $data->file('file3');

        $file1Name = $file1->hashName();
        $file2Name = $file2->hashName();
        $file3Name = $file3->hashName();

        // 画像ファイルを保存
        Storage::disk('s3')->putFile('members', $file1, 'public');
        Storage::disk('s3')->putFile('members', $file2, 'public');
        Storage::disk('s3')->putFile('members', $file3, 'public');

        // 保存用にArrayに変換
        $data = $data->all();

        // 画像ファイルのパスをデータベースに保存
        $data['file1'] = $file1Name;
        $data['file2'] = $file2Name;
        $data['file3'] = $file3Name;

        // DBにメンバー情報を登録
        return $this->create($data);
    }
}
