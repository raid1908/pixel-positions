<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag){
        // Jobs for this Tag
        return view('results', ['jobs' => $tag->jobs]);
    }
}
