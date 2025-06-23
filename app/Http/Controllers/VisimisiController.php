<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VisimisiController extends Controller
{
    public function index(): Response
    {
        $visimisi = Visimisi::all();

        if ($visimisi) {
            $visi = $visimisi->visi;
            $misi = $visimisi->misi;
            $visimisiImg = $visimisi->image;
        } else {
            $visi = 'No Data Available';
            $misi = 'No Data Available';
            $visimisiImg = [];
        }

        return response()->view('visimisi', [
            'visi' => $visi,
            'misi' => $misi,
            'visimisiImg' => $visimisiImg
        ]);
    }
}
