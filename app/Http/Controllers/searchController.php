<?php

namespace App\Http\Controllers;
use JanDrda\LaravelGoogleCustomSearchEngine\LaravelGoogleCustomSearchEngine;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(Request $request){
      // dd($request->all());
      // exit;

        $parameters = array(
            'start' => 0 ,
            'num' => 5 
        );

        $fulltext = new LaravelGoogleCustomSearchEngine(); // initialize
        $results = $fulltext->getResults($request->search2, $parameters); // get first 5 results for query $request->search2
        dd($results); 
        return view('showData',compact('results'));
      }
}
