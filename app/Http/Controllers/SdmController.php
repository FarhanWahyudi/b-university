<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SdmController extends Controller
{
    public function index(): Response
    {
        $admins = Admin::all();
        $lectures = Lecture::all();

        return response()->view('sdm', [
            'admins' => $admins,
            'lectures' => $lectures
        ]);
    }
}
