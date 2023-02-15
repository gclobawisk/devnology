<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Links;
use App\Models\Blogs;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function getBlogDetalhes($li_blog_id){

        $result = Links::select('links.*')
        ->where('li_blog_id', '=', $li_blog_id)
        ->get();
        return view('blogdetalhes', ['linksArray' => $result]);

    }



}
