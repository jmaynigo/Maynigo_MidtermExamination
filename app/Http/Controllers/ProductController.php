<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = array (
            'title1' => 'Inside Out 2',
            'distributor1' => 'Walt Disney Studios Motion Pictures',
            'releaseDate1' => 'June 14, 2024',
            'title2' => 'The Exorcism',
            'distributor2' => 'Vertical',
            'releaseDate2' => 'June 21, 2024',
            'title3' => 'How to Make Millions Before Grandma Dies',
            'distributor3' => 'GDH 559',
            'releaseDate3' => 'April 1, 2024'
        );
        return view('movies', $movies);
    }
}
