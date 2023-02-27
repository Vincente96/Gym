<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PageController extends Controller
{
    public function  Homepage () {
        return view('welcome');
    }

    public function Struttura() {
        return view ('Struttura');
    }

    public function Dove_siamo() {
        return view ('Dove_siamo');
    }

    public function Corsi() {
        return view ('Corsi');
    }

    public function Contatti() {
        return view ('Contatti');
    }
    public function Corsi_detail() {
        return view ('Corsi_detail');
    }

}
