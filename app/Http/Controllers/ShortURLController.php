<?php

namespace App\Http\Controllers;

use App\Models\ShortURL;
use Illuminate\Http\Request;

class ShortURLController extends Controller
{
    // create a short url method
    public function create(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $shortURL = ShortURL::create([
            'original_url' => $request->url,
            'short_id' => \Str::random(6) // 使用 Laravel 的 Str 類生成短ID
        ]);

        return view('shorten')->with('shortURL', $shortURL);
    }


    public function redirect($shortID)
    {
        $shortURL = ShortURL::where('short_id', $shortID)->firstOrFail();
        return redirect($shortURL->original_url);
    }
}
