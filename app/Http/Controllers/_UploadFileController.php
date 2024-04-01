<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class _UploadFileController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->hasFile("image")) {

            // get data sebelumya
            $event = Event::find($request->id);

            // delete image sebelumnya
            if (File::exists(public_path('storage/images/' . $event->banner))) {
                File::delete(public_path('storage/images/' . $event->banner));
            }


            $extentionFile = $request->file("image")->getClientOriginalExtension();
            $fileNameToUpload = date("His") . uniqid() . "." . $extentionFile;

            $request->file("image")->storeAs("images/", $fileNameToUpload, "public");
            return response()->json([
                "fileName" => $fileNameToUpload,
                "message" => "Upload file success",
                "status_code" => "WN-01"
            ]);
        } else {
            // return response()->json([
            //     "message" => "File is ",
            //     "status_code" => "WN-01"
            // ]);
        }
    }
}
