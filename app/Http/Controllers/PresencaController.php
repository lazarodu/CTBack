<?php

namespace App\Http\Controllers;

use App\Models\Presenca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresencaController extends Controller
{
    public function index()
    {
        $presencas = Presenca::where('user_id', Auth::user()->id)->get();
        return view('presenca', compact('presencas'))->layout('layouts.app');
    }
}
