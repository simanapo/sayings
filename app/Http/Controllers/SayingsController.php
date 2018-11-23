<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Sayings\FilterService;
use Illuminate\Http\Request;
use App\Saying;

class SayingsController extends Controller
{
    private $filter_service;
    /**
     * コンストラクタ
     *
     * @param App\Services\Sayings\FilterService $filter_service フィルタサービス
     *
     */
    public function __construct(FilterService $filter_service)
    {
        $this->filter_service  = $filter_service;
    }

    /**
     * 一覧
     *
     * @param Illuminate\Http\Request $request 検索条件
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sayings = Saying::get();

        return view('sayings.index')
            ->with('sayings', $sayings);
    }

    /**
     * 詳細
     *
     * @param Illuminate\Http\Request $request 検索条件
     * @param App\Shop $shop_id 店舗ID
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $shop_id)
    {
    }

    /**
     * 登録
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sayings.create');
    }

    /**
     * 店舗登録処理
     *
     * @param Illuminate\Http\Request $request 登録項目
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saying = $this->filter_service->insertSaying($request);
        
        return redirect()->route('sayings.index');
    }

    /**
     * 店舗編集
     *
     * @param App\Shop $shop_id 店舗ID
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
    }

    /**
     * 店舗編集処理
     * 
     * @param Illuminate\Http\Request $request 編集項目
     * @param App\Shop $shop_id $shop_id 店舗ID
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
    }

    /**
     * 店舗削除
     *
     * @param App\Shop $shop_id 店舗ID
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($shop_id)
    {
    }

}
