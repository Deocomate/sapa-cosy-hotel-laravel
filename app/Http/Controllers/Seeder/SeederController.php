<?php

namespace App\Http\Controllers\Seeder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SeederController extends Controller
{
    public function index()
    {
        $this->user_init();
        return "Seeding successfully";
    }

    public function user_init()
    {
        $userData = [
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => bcrypt('admin')
        ];
        DB::table('users')->delete();
        $countUser = DB::table('users')->get()->count();
        if ($countUser < 1) {
            User::insert($userData);
        } else {
            User::update($userData);
        }
    }
}
