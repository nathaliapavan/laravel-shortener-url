<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UrlService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UrlService $urlService)
    {
        $this->middleware('auth');
        $this->urlService = $urlService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $urls = $this->urlService->getAll();
        return view('url.index', compact('urls'));
    }
}
