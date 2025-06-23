<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FasilitasController extends Controller
{
    public function index(): Response
    {
        $facilities = Facility::all();

        return response()->view('fasilitas', [
            'facilities' => $facilities
        ]);
    }
}
