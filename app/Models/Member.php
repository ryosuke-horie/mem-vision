<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'last_name',
        'first_name',
        'phone', 'email',
        'image1',
        'image2',
        'image3',
        'nickname'
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
     * @param  array<string, mixed>  $data
     */
    public function storeMember(array $data): Member
    {
        // ログインユーザー(ジム)のIDを取得
        $userId = Auth::id();
        // ログインユーザー(ジム)のIDをメンバー情報に紐づける
        $data['user_id'] = $userId;

        return $this->create($data);
    }
}
