<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage()
    {
    	return view('welcome');
    }

    public function about()
    {
    	$halaman = 'about';
    	return view('about', compact('halaman'));
    }

    public function contact()
    {
    	$halaman = 'contact';
    	return view('contact', compact('halaman'));
    }
}