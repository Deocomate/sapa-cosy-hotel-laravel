<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function lien_he()
    {
        $hotelInfo = \DB::table("hotel_info")->first();
        return view("client.modules.lien_he.index");
    }
}

