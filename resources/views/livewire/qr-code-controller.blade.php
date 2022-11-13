<div class="py-12 px-6">
    <div class="flex justify-center align-center px-96">
        {!! QrCode::format('png')->size(300)->generate(Auth::user()->id) !!}
    </div>
    <h1 class="flex  justify-center align-center text-lg">Apresente este QrCode para registrar sua presença!</h1>
</div>
