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

    public function store(Request $request) {
        $news = News::create([
            "image" => $request->image,
            "title" => $request->title,
            "content" => $request->content,
            "writer" => $request->writer
        ]);

        return response()->json([
            "data" => $news,
            "message" => "Create data News success",
            "status_code" => "WN-03"
        ]);
    }

    public function update(Request $request, $id) {
        $news = News::find($id)->update([
            "image" => $request->image,
            "title" => $request->title,
            "content" => $request->content,
            "writer" => $request->writer
        ]);

        return response()->json([
            "data" => $news,
            "message" => "Update data News success",
            "status_code" => "WN-04"
        ]);
    }

    public function destroy($id){
        News::find($id)->delete();

        return response()->json([
            "message" => "Delete data News success",
            "status_code" => "WN-05"
        ]);
    }
}
