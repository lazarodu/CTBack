<div class="m-2">
    <form method="post" wire:submit.prevent="store">
        <table>
            <thead>
                <tr class="border">
                    <th colspan="5">Programação</th>
                </tr>
                <tr class="border">
                    <th>Horário</th>
                    <th>Atividade</th>
                    <th>Local</th>
                    <th>Vagas</th>
                    <th>Inscrever</th>
                </tr>
            </thead>
            <tbody>
                @foreach($programacao as $program)
                <tr class="border">
                    <td class="border">{{$program->horario}}</td>
                    <td class="border">{{$program->atividade}}</td>
                    <td class="border">{{$program->local}}</td>
                    <td class="border">{{$program->publico}}</td>
                    <td class="flex justify-center items-stretch">
                        @if(in_array($program->id,$inscritos))
                        <button type="button" class="border rounded-lg p-2 bg-red-400" wire:click="cancelarInscricao({{$program->id}})">Cancelar Inscrição</buuton>
                            @elseif($program->publico > 0)
                            <input class="w-7 h-7" type="checkbox" wire:model="programId" value="{{$program->id}}" />
                            @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="bg-green-400">
            <p>{{$inscricaoMessage}}</p>
        </div>
        <button type="button" class="bg-sky-500 text-white font-bold rounded-lg p-2" wire:click="inscrever()">Inscrever</button>
    </form>
</div>
