<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Announcement;
use App\Models\Cooperation;
use App\Models\News;
use App\Models\Rektor;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $cooperationImg = Cooperation::all();
        $rektors = Rektor::all();
        $abouts = Aboutme::first();
        $announcements = Announcement::latest()->take(3)->get();
        $news = News::latest()->get();

        return response()->view('landing', [
            'cooperationImg' => $cooperationImg,
            'rektors' => $rektors,
            'abouts' => $abouts,
            'announcements' => $announcements,
            'news' => $news
        ]);
    }
}
