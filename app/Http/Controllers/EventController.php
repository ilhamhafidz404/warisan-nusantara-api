<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy("id", "DESC")->get();
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
            "banner" => "-",
            "started" => "2024-01-08 19:17:05",
            "ended" => "2024-01-30 12:17:04",
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
            "banner" => "-",
            "started" => "2024-01-08 19:17:05",
            "ended" => "2024-01-30 12:17:04",
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
