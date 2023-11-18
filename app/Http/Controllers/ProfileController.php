<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response()->json($data)->withCookie(
            Cookie::make($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly)
        );
    }
}
