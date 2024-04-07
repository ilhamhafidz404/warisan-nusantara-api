<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index(Request $request)
    {

        $condition = $request->input('condition');
        $limit = $request->input('limit');
        $whereSearch = "";
        if ($condition == 1) {
            $whereSearch = "title";
        } else if ($condition == 2) {
            $whereSearch = "description";
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $events = Event::where($whereSearch, 'like', "%$search%")->orderBy("id", "DESC")->paginate($limit);
        } else {
            $events = Event::orderBy("id", "DESC")->paginate($limit);
        }


        // if ($events->isEmpty()) {
        //     return response()->json([
        //             "message" => "No events found.",
        //             "status_code" => "WN-02"
        //         ], 404);
        // }

        return response()->json([
            "data" => $events,
            "message" => "Get data Event success",
            "status_code" => "WN-01"
        ]);
    }

    public function show($id)
    {
        $event = Event::find($id);
        return response()->json([
            "data" => $event,
            "message" => "Get data Event success",
            "status_code" => "WN-01"
        ]);
    }

    public function store(Request $request)
    {

        Event::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "description" => $request->description,
            "banner" => $request->banner,
            "started" => $request->startedDate . " " . $request->startedTime,
            "ended" => $request->endedDate . " " . $request->endedTime,
            "fee" => $request->fee,
            "location" => $request->location,
            "for" => $request->for,
        ]);

        return response()->json([
            "message" => "Insert data Event success",
            "status_code" => "WN-01"
        ]);
    }

    public function update(Request $request, $id)
    {
        Event::find($id)->update([
            "title" => $request->title,
            "description" => $request->description,
            "banner" => $request->banner,
            "started" => $request->startedDate . " " . $request->startedTime,
            "ended" => $request->endedDate . " " . $request->endedTime,
            "fee" => $request->fee,
            "location" => $request->location,
            "for" => $request->for,
        ]);

        return response()->json([
            "message" => "Update data Event success",
            "status_code" => "WN-01"
        ]);
    }

    public function destroy($id)
    {
        Event::find($id)->delete();

        return response()->json([
            "message" => "Delete data Event success",
            "status_code" => "WN-01"
        ]);
    }
}
