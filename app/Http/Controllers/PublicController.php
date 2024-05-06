<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Storage;


class PublicController extends Controller
{
    public function home () {
        return view('welcome');
    }
    public function index()
    {
        $immagini = File::files(public_path('img'));

        return view('galleria.index', compact('immagini'));
    }
    public function contatti (){
        return view ('contatti');
    }
    public function indexAlba()
    {
        $immagini = File::files(public_path('img'));

        return view('galleria.alba', compact('immagini'));
    }
    public function indexTramonto(){
        $immagini = File::files(public_path('img'));
        return view ('galleria.tramonto', compact('immagini'));
    }

    // public function showAtrioAlbaImages(Request $request)
    // {
    //     // Use public_path helper function to get the path to the public directory
    //     $imagesPath = public_path('img/atrioalba');

    //     // Use Storage facade to get all image files in the directory
    //     $images = Storage::files($imagesPath);

    //     return view('galleria.alba', compact('images'));
    // }
}
