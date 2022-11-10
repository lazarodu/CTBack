<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Inscricao;
use App\Models\Presenca;
use App\Models\Programacao;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PresencaController extends Controller
{
    use ApiResponse;

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer|exists:App\Models\User,id',
            'programacao_id' => 'required|integer|exists:App\Models\Programacao,id',
        ]);
        if ($validated) {
            try {
                $presenca = new Presenca();
                $presenca->user_id = $request->get('user_id');
                $presenca->programacao_id = $request->get('programacao_id');
                $presenca->save();
                return $this->success($presenca);
            } catch (\Throwable $th) {
                return $this->error("Erro ao registrar a presença!!!", 401, $th->getMessage());
            }
        }
    }
}
