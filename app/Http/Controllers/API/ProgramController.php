<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Programacao;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProgramController extends Controller
{
    use ApiResponse;

    public function index(Request $request)
    {
        try {
            $program = Programacao::all();
            return $this->success($program);
        } catch (\Throwable $th) {
            return $this->error("Falha ao realizar o login!!!", 401, $th->getMessage());
        }
    }
}
