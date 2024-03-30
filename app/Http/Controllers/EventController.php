<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {

        $condition = $request->input('condition');
        $whereSearch = "";
        if ($condition == 1) {
            $whereSearch = "title";
        } else if ($condition == 2) {
            $whereSearch = "description";
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $events = Event::where($whereSearch, 'like', "%$search%")->orderBy("id", "DESC")->paginate(10);
        } else {
            $events = Event::orderBy("id", "DESC")->paginate(10);
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
            "description" => $request->description,
            "banner" => $request->banner,
            "started" => $request->startedDate . " " . $request->startedTime,
            "ended" => $request->endedDate . " " . $request->endedTime,
            "fee" => $request->fee,
            "location" => $request->location,
            "for" => $request->for,
        ]);

        return response()->json([
            "data" => $request->title
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
            "data" => $request->title
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
