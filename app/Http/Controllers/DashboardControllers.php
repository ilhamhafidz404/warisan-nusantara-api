<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardControllers extends Controller
{
    public function __invoke(){

        $countNews= News::count();
        $countEvent= Event::count();
        $countUser= User::count();
        
        $totalData = [
            "total"=> [
                "totalEvent" => $countEvent,
                "totalNews" => $countNews,
                "totalUser" => $countUser
            ]
        ];
        return response()->json([
            "data" => $totalData,
            "message" => "Get total data success",
            "status_code" => "WN-01"
        ]);
    }
}

