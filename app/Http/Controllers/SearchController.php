<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    /**
     * Show query form.
     *
     * @return \Illuminate\Contacts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function search(Request $request)
    {
        $q = $request->get('q');
        $page = $request->has('page') ? (int)$request->get('page') : 1;
        $start = 10*($page-1)+1;
        if(!$q) {
            return view('search', [
                'msg' => '検索文字列を入力してください',
            ]);
        } elseif(mb_strlen($q) > 2048) {
            return view('search', [
                'msg' => '検索文字列が長すぎます',
            ]);
        } else {
            $res = Http::get(config('services.google_custom_search.endpoint'), [
                'key' => config('services.google_custom_search.api_key'),
                'cx' => config('services.google_custom_search.engine_id'),
                'q' => $q,
                'start' => $start,
            ]); 
            if( $res->getStatusCode() != 200 ) {
                return view('search', [
                    'msg' => '不明なエラーが発生しました'
                ]);
            }
            $resData = $res->json();
            $items = isset($resData["items"]) ? $resData["items"] : [];
            $prevExists = isset($resData["queries"]["previousPage"]);
            $nextExists = isset($resData["queries"]["nextPage"]);
            $resultCountStr = $resData["searchInformation"]["formattedTotalResults"];
            return view('search', compact(
                'q',
                'items',
                'resultCountStr',
                'start',
                'page',
                'prevExists',
                'nextExists',
            ));
        }
    }
}
