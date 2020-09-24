<?php

namespace App\Http\Controllers;

class DefaultController extends Controller
{
	public function getAboutPage()
	{
		return view('pages.about');
    }

	public function getDocPage()
	{
		return view('pages.doc');
	}

	public function getPricePage()
	{
		return view('pages.price');
	}
}
