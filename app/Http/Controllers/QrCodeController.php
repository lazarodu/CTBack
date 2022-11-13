<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('qr-code-controller')->layout('layouts.app');
    }
}
