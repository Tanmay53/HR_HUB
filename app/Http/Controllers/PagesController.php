<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home Page

    public function home() {
        $tab = "home";
        return view("pages.home")->with("tab", $tab);
    }

    public function opportunities() {
        $tab = "opportunities";
        return view('pages.opportunities')->with("tab", $tab);
    }

    public function contact() {
        $tab = "contact";
        return view('pages.contact')->with("tab", $tab);
    }

    public function join_us() {
        $tab = "join";
        return view('pages.join')->with("tab", $tab);
    }
}
