<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Despesas</title>
    </head>
    <body>
        <div class="">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/expense') }}" class="">Despesas</a>
                    @else
                        <a href="{{ route('login') }}" class="">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
