<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class LandingPageController extends Controller
{
    public function index()
    {
        // Ambil 5 testimoni terbaru beserta data alumni
        $testimonis = Testimoni::with('user')->latest()->limit(3)->get();
        
        return view('landing.index', compact('testimonis'));
    }
}
?>