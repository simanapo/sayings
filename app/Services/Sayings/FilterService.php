<?php
namespace App\Services\Sayings;

use App\Services\Sayings\FilterService;
use App\Saying;
use DB;
use SoftDeletes;

class FilterService
{
    public function insertSaying($request)
    {
        DB::beginTransaction();
        try
        {
            // 店舗テーブルロック
            $saying = new Saying;
            $saying->lockForUpdate()->withTrashed()->get();
            
            // 店舗登録処理
            $saying->saying  = $request->input('saying');
            $saying->content = $request->input('content');
            $saying->quote   = $request->input('quote');
            $saying->save();


            DB::commit();

            return $saying;
        }
        catch (Exception $e)
        {
            DB::rollBack();
            \Log::error($e->getMessage());

            return null;
        }
    }

}