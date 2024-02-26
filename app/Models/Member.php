<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'nickname'];

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
}
