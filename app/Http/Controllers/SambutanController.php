<?php

namespace App\Http\Controllers;

use App\Models\Greeting;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SambutanController extends Controller
{
    public function index(): Response
    {
        $greetings = Greeting::all();

        return response()->view('sambutan', [
            'greetings' => $greetings
        ]);
    }
}
