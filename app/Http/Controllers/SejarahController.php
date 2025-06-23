<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SejarahController extends Controller
{
    public function index(): Response
    {
        return response()->view('sejarah', [
            'histories' => History::all()
        ]);
    }
}
