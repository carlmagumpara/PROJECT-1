<?php

namespace App\Modules\App\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PostRepository as Post;

class AppController extends Controller
{

    public function __construct(
        Post $post
    ) {
        $this->post = $post;
    }

    public function index()
    {
        $post = $this->post->getAllByAttributes([], 'created_at', 'desc')->first();

        return view('App::index', ['post' => $post]);
    }

    public function everydayLaw($slug)
    {
        $post = $this->post->getAllByAttributes(['slug', $slug], 'created_at', 'desc')->first();
        return view('App::everyday-law.index', ['post' => $post]);
    }

    public function aboutUs()
    {
        return view('App::about-us.index');
    }

    public function ourServices()
    {
        return view('App::our-services.index');
    }

    public function lawyersProfile()
    {
        return view('App::lawyers-profile.index');
    }

    public function contactUs()
    {
        return view('App::contact-us.index');
    }

    public function youAndTheLaw()
    {
        return view('App::you-and-the-law.index');
    }

    public function lawAndSociety()
    {
        return view('App::law-and-society.index');
    }

    public function lawUpdates()
    {
        return view('App::law-updates.index');
    }

    public function outradeousLawsAndLawsuits()
    {
        return view('App::outradeous-laws-and-lawsuits.index');
    }

    public function lawyersQuotes()
    {
        return view('App::lawyers-quotes.index');
    }

    public function caseStudies()
    {
        return view('App::case-studies.index');
    }

    public function eLegalNews()
    {
        return view('App::e-legal-news.index');
    }
    
}
