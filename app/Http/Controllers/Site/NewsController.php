<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('site.news.all.index', );
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $title
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        //
        try {
            $response['news'] = News::where([['state', 'Autorizada'], ['title', urldecode($title)]])->first();
            $response['lasted'] = News::where([['state', 'Autorizada'], ['title', '!=', urldecode($title)]])->orderBy('id', 'desc')->limit(5)->get();
            return view('site.news.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.news');
        }
    }
}
