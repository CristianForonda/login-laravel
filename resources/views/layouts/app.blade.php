<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title') - Laravel App</title>

        <!-- Tailwind css link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">


    </head>

    <body class="bg-gray-100 text-gray-800">

        <nav class="flex py-5 bg-indigo-500 text-white">

            <div class="w-1/2 px-12 mr auto">
                <p >Cristian Foronda</p>
            </div>

            <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">

                @if (auth()->check())

                    <li>
                        <li><p class="text"> Bienvenido <b>{{ auth()->user()->name}}</b></p></li>
                        <li><a href="{{ route('login.destroy')}}" class="hover:bg-indigo-700 py-3 px-4 rounded-md">Cerrar sesion</a></li>
                    </li>
                    
                    @else
                        <li>
                            <a href="{{ route('login.index')}}" class="hover:bg-indigo-700 py-3 px-4 rounded-md">Iniciar Sesion</a>
                            |
                            <a href="{{ route('register.index')}}" class="hover:bg-indigo-700 py-3 px-4 rounded-md">Registrar</a>
                        </li>

                @endif

            </ul>

        </nav>

        @yield('content')

    </body>

</html>