<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public function welcome(Request $request)
    {
        return view('welcome', [
            'content' => '',
            'server' => $_SERVER['SERVER_ADDR'],
        ]);
    }

    public function handleFormSubmit(Request $request)
    {
        $content = '';
        if ($request->input('post') === 'on') {
            $response = Http::post('https://eozegvvdtfxq66r.m.pipedream.net');
            $content = $response->body();
        } else if ($request->input('get') === 'on') {
            $response = Http::get('https://eozegvvdtfxq66r.m.pipedream.net');
            $content = $response->body();
        }
        return view('welcome', [
            'content' => $content,
            'server' => $_SERVER['SERVER_ADDR'],
        ]);
    }
}
