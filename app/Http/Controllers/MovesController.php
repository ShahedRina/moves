<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class MovesController extends Controller
{
    
   

    public function index()
    {
        $apiKey = "d5eb207929dd4e0e4ed1557ebc87b7f1" ;  //env('TMDB_API_KEY');

        // api search : https://api.themoviedb.org/3/search/movie?api_key=caafc72a37dc504832cc9815c7197f87&query=Inception
        $response = Http::get("https://api.themoviedb.org/3/movie/popular?api_key={$apiKey}&language=en-US&page=1");

        if ($response->successful()) {
            $movies = $response->json()['results'];
            
            return view('home.home', ['movies' => $movies]);
        } else {
            return response()->json(['error' => 'Unable to fetch movies data'], 500);
        }
    }
     public function search(Request $request)
    {
        $team= $request->input('team');
        $apiKey = "d5eb207929dd4e0e4ed1557ebc87b7f1" ;  //env('TMDB_API_KEY');
        

        // api search : https://api.themoviedb.org/3/search/movie?api_key=caafc72a37dc504832cc9815c7197f87&query=Inception
        $response = Http::get("https://api.themoviedb.org/3/search/movie?api_key={$apiKey}&query={$team}");

        if ($response->successful()) {
            $movies = $response->json()['results'];
            
            return view('home.home', ['movies' => $movies]);
        } else {
            return response()->json(['error' => 'Unable to fetch movies data'], 500);
        }
    }
}

