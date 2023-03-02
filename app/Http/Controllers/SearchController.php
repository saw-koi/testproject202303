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
        $res = Http::get(config('services.google_custom_search.endpoint'), [
            'key' => config('services.google_custom_search.api_key'),
            'cx' => config('services.google_custom_search.engine_id'),
            'q' => $q,
        ]);
        $resData = $res->json();
        $items = $resData["items"];
        $resultCountStr = $resData["searchInformation"]["formattedTotalResults"];
        return view('search', compact('q', 'items', 'resultCountStr'));
    }
}
