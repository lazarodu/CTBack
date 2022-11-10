<?php

namespace App\Http\Livewire;

use App\Models\Inscricao;
use App\Models\Programacao;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InscricaoController extends Component
{
    private $userLogged = 0;
    public $programId = [];
    public $inscricaoMessage = '';
    public function __construct()
    {
        $this->userLogged = Auth::user()->id;
    }
    public function render()
    {
        $inscricoes = Inscricao::where('user_id', $this->userLogged)->get();
        $inscritos = [];
        foreach ($inscricoes as $inscricao) {
            array_push($inscritos, $inscricao->programacao_id);
        }
        $programacao = Programacao::whereNotNull('publico')
            ->orderBy('horario')
            ->orderBy('atividade')
            ->get();
        return view('livewire.inscricao-controller', compact('programacao', 'inscritos'));
    }
    public function inscrever()
    {
        if (count($this->programId) > 0) {
            $status = false;
            foreach ($this->programId as $program) {
                $inscrito = Inscricao::where('programacao_id', $program)
                    ->where('user_id', $this->userLogged)->get();
                if (count($inscrito) === 0) {
                    $inscricao = new Inscricao();
                    $inscricao->programacao_id = $program;
                    $inscricao->user_id = $this->userLogged;
                    $inscricao->save();
                    $status = true;
                }
            }
            if (!$status) {
                $this->inscricaoMessage = "Nenhuma inscrição realizada!!!";
            } else {
                $this->inscricaoMessage = "Inscrição realizada com sucesso!!!";
                $this->programId = [];
            }
        } else {
            $this->inscricaoMessage = "Marque ao menos uma atividade para participar!!!";
        }
    }
    public function cancelarInscricao($programacao_id)
    {
        $inscricao = Inscricao::where('user_id', $this->userLogged)
            ->where('programacao_id', $programacao_id)
            ->get();
        $inscricao[0]->delete();
    }
}
