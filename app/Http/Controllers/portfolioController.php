<?php

namespace App\Http\Controllers;

use App\Models\personal;
use App\Models\education;
use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function index(){
        $educations = education::all();
        $personal = personal::where('id',1)->first();
        return view ('portfolio', [
            'educations' => $educations,
            'personal' => $personal
        ]);
    }
}
