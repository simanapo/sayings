<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Services\Encryptable;

class Saying extends Model
{
    use Encryptable;

    // 論理削除有効化
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * 店舗：抽選フラグ
     */
    const LOTTERY_TRUE  = 1;
    const LOTTERY_FALSE = 0;
    const LOTTERY = [
        self::LOTTERY_TRUE  => 'あり',
        self::LOTTERY_FALSE => 'なし',
    ];

    protected $fillable = [
        'id',
        'saying',
        'content',
        'quote',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function shops_master_videos()
    {
        return $this->hasMany('App\ShopsMasterVideo');
    }

}
