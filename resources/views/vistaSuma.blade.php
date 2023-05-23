<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    
    <body>
        <section class="container mx-auto bg-slate-300">
            <h1 class="text-3xl text-center font-bold underline">
                Factorial
            </h1>
            <form action="{{route('obtenerSuma')}}" method="post">
                @csrf                
                <!--primer numero-->
                <input type="number" name="n1" min="1" max="20" required>
                @error('n1')
                    <div>
                        {{$message}}
                    </div>
                @enderror
                 <!--segundo numero-->
                <input type="number" name="n2" min="1" max="20" required>
                @error('n2')
                    <div>
                        {{ $message }}
                    </div>
                @enderror

                <button type="submit">
                    CALCULAR
                </button>
            </form>
            @isset($sum)
                <section>
                    La Suma de {{ $n1 }} y {{ $n2 }} es: {{ $sum }}
                </section>
            @endisset
        </section>
    </body>
</html>
