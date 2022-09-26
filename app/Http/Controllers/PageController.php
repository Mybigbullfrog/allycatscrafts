<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

//use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        //$books = Book::all();

        $books = Book::paginate(6);
        return view('products.index', compact('books'));
    }

    /**
     * @return Factory|View|Application
     */
    public function about(): View|Factory|Application
    {
        //return "This page is all about us.";
        return view('pages.about');
    }

    /**
     * @return Factory|View|Application
     */
    public function contact(): View|Factory|Application
    {
        //return "This page is all about contacting us.";
        return view('pages.contact');
    }

    /**
     * @return Factory|View|Application
     */
    public function components(): Factory|View|Application
    {
        return view('pages.components');
    }

    /**
     * @return Factory|View|Application
     */
    public function faq(): Factory|View|Application
    {
        return view('pages.faq');
    }

    /**
     * @return Factory|View|Application
     */
    public function login_register(): Factory|View|Application
    {
        return view('pages.login-register');
    }
}
