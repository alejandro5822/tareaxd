<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="container mx-auto bg-slate-300">
        <h1 class="text-3xl text-center font-bold underline">
            Palindromo
        </h1>
        <form action="{{ route('obtenerPalindromo') }}" method="post">
            @csrf
            <input type="text" name="texto" required>
            @error('texto')
                <div>
                    {{message}}
                </div>
            @enderror
            <button type="submit">
                VERIFICAR
            </button>
            @isset($res)
                <section>
                    La oracion:{{$texto}} {{$res}} Palindromo
                </section>
            @endisset
        </form>
    </section>
</body>
</html>