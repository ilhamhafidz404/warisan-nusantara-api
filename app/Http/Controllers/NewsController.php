<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {

        $news = News::all();

        return response()->json
        ([
            "data" => $news,
            "message" => "Get data News success",
            "status_code" => "WN-01"
        ]);
    }

    public function show($id) {
        $news = News::find($id);
        return response()->json([
            "data" => $news,
            "message" => "Get data News success",
            "status_code" => "WN-02"
        ]);
    }
}
