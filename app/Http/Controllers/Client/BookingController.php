<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\BookingMail;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(Request $request)
    {
        $validated = $request->validate([
            "checkInDate" => "required",
            "checkOutDate" => "required",
            "fullName" => "required",
            "phoneNumber" => "required",
            "email" => "required",
            "adults" => "required",
            "children" => "required"
        ]);

        \Mail::to(env("MAIL_USERNAME"))->send(new BookingMail($validated));
        \Mail::to($validated["email"])->send(new BookingMail($validated));

        session()->flash("success", "Gửi thông tin thành công! Vui lòng kiểm tra email của bạn!");
        return redirect()->back();
    }
}
