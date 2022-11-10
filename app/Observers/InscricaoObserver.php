<?php

namespace App\Observers;

use App\Models\Inscricao;
use App\Models\Programacao;

class InscricaoObserver
{
    /**
     * Handle the Inscricao "created" event.
     *
     * @param  \App\Models\Inscricao  $inscricao
     * @return void
     */
    public function created(Inscricao $inscricao)
    {
        $programacao = Programacao::findOrFail($inscricao->programacao_id);
        $programacao->publico = $programacao->publico - 1;
        $programacao->save();
    }

    /**
     * Handle the Inscricao "updated" event.
     *
     * @param  \App\Models\Inscricao  $inscricao
     * @return void
     */
    public function updated(Inscricao $inscricao)
    {
        //
    }

    /**
     * Handle the Inscricao "deleted" event.
     *
     * @param  \App\Models\Inscricao  $inscricao
     * @return void
     */
    public function deleted(Inscricao $inscricao)
    {
        $programacao = Programacao::findOrFail($inscricao->programacao_id);
        $programacao->publico = $programacao->publico + 1;
        $programacao->save();
    }

    /**
     * Handle the Inscricao "restored" event.
     *
     * @param  \App\Models\Inscricao  $inscricao
     * @return void
     */
    public function restored(Inscricao $inscricao)
    {
        //
    }

    /**
     * Handle the Inscricao "force deleted" event.
     *
     * @param  \App\Models\Inscricao  $inscricao
     * @return void
     */
    public function forceDeleted(Inscricao $inscricao)
    {
        //
    }
}
