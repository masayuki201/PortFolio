<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Video;
use App\Target;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //みんなの動画表示
    public function index(Request $request)
    {
        // フォームから検索文字列と選択カテゴリーidを取得
        // $search_text = $request->search_text;
        $select_target_id = $request->select_target_id;

        // クエリビルダで検索を行う(カテゴリーid検索)
        $query = Video::query();
        // if (isset($search_text)) {
        //     $query->where('product_name', 'like', '%'.$search_text.'%');
        // }
        if (isset($select_target_id)) {
            $query->where('target_id', $select_target_id);
        }

        // 並べ替えてページネイトする
        $searches = $query->orderByRaw('id asc')->paginate(50);


        $targetGrades = Target::all();


        // $users = Video::all();
        // $videos = Video::all();

        // viewに渡すデータ
        $params = [
            'searches' => $searches,
            'targetGrades' => $targetGrades,
            // 'search_text' => $search_text,
            'select_target_id' => $select_target_id,
            // 'users' => $users,
            // 'videos' => $videos,
        ];



    // index.blade.phpを表示させる
        return view('index', $params);
    }
}
