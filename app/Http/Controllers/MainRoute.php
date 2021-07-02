<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainRoute extends Controller
{
    public function index() {
        return view('layouts.home');
    }
    public function sevPage() {
        return view('infos.contact.sav');
    }
    public function partenariatPage() {
        return view('infos.contact.partenariat');
    }
    public function infoPage() {
        return view('infos.contact.info');
    }
    public function frontPage() {
        return view('team.web.dev.frontend');
    }
    public function backPage() {
        return view('team.web.dev.backend');
    }
}



//correction
// class MainRoute extends Controller
// {
//     public function index () {
//         return view('welcome');
//     }
//     public function sav() {
//         return view('infos.contact.sav');
//     }
//     public function info() {
//         return view('infos.contact.info');
//     }
//     public function partenariat() {
//         return view('infos.contact.partenariat');
//     }
//     public function frontPage() {
//         return view('team.web.dev.frontend');
//     }
//     public function backPage() {
//         return view('team.web.dev.backend');
//     }
// }