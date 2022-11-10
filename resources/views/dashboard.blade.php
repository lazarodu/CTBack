<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 px-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-center">ATENÇÃO</h1>
            <p>Normas de participação para os discentes dos cursos técnicos: </p>
            <p>Para contabilizar a participação, o discente deve cumprir os requisitos:</p>
            <p>1. Assistir à palestra de abertura (dia 16/11 às 14:00) ou encerramento (dia 18/11 às 14:00) que acontecerá no auditório do Campus.
            </p>
            <p>
                2. Assistir à, no mínimo, quatro apresentações de trabalhos (dia 17/11) distribuídos da seguinte forma: dois no período da manhã e dois no período da tarde.
                Portanto, não será permitida a presença em apenas um dos dois turnos.
            </p>
            <p>
                Os discentes que irão apresentar poderão assistir a, pelo menos, dois trabalhos dos demais colegas
            </p>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <img src="img/banner.jpeg" alt="banner" />
            </div>
        </div>
    </div>
</x-app-layout>
