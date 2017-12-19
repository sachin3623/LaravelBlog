<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function getIndex() {
    	$posts =Post::orderBy('created_at', 'desc')->limit(4)->get();
    	return view('welcome')->withPosts($posts);
    }
    public function getAbout() {
    	return view('pages.about');
    }
    public function getContact() {
    	return view('pages.contact');
    }
}
