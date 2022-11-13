<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            QrCode
        </h2>
    </x-slot>
    <div class="py-12 px-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center align-center ">
                {!! QrCode::size(300)->generate(Auth::user()->id) !!}
            </div>
            <h1 class="flex  justify-center align-center text-lg">{{Auth::user()->name}}</h1>
            <h1 class="flex  justify-center align-center text-lg">Apresente este QrCode para registrar sua presença!</h1>
        </div>
    </div>
</x-app-layout>
