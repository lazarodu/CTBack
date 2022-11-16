<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Presenças
        </h2>
    </x-slot>
    <div class="py-12 px-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="flex  justify-center align-center text-lg">
                <table>
                    <thead>
                        <tr class="border">
                            <th colspan="4">Programação</th>
                        </tr>
                        <tr class="border">
                            <th>Horário</th>
                            <th>Atividade</th>
                            <th>Local</th>
                            <th>Presença</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($presencas as $presenca)
                        <tr class="border">
                            <td class="border">{{$presenca->programacao->horario}}</td>
                            <td class="border">{{$presenca->programacao->atividade}}</td>
                            <td class="border">{{$presenca->programacao->local}}</td>
                            <td class="border">{{$presenca->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </h1>
        </div>
    </div>
</x-app-layout>
