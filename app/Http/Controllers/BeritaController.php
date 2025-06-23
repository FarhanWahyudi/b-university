<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BeritaController extends Controller
{
    public function show(string $slug): Response
    {
        $news = News::where('slug', $slug)->firstOrFail();

        return response()->view('berita', [
            'news' => $news
        ]);
    }
}
