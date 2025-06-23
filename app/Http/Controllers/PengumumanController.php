<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PengumumanController extends Controller
{
    public function index(): Response
    {
        $announcements = Announcement::all();

        return response()->view('pengumuman.index', [
            'announcements' => $announcements
        ]);
    }

    public function show(string $slug): Response
    {
        $announcement = Announcement::where('slug', $slug)->firstOrFail();

        return response()->view('pengumuman.show', [
            'announcement' => $announcement
        ]);
    }
}
