<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function handleFormSubmit(Request $request)
    {
        if ($request->input('post') === 'on') {
            $response = Http::post('https://eozegvvdtfxq66r.m.pipedream.net');
            return $response->body();
        } else if ($request->input('get') === 'on') {
            $response = Http::get('https://eozegvvdtfxq66r.m.pipedream.net');
            return $response->body();
        }
        return view('welcome');
    }
}
