<?php

namespace App\Http\Controllers;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $fakultas = Fakultas::first();
        dd($fakultas);
        return view('welcome', compact('fakultas'));
    } 
}
