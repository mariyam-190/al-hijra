<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Hijra</title>
    <style>
        .butt{
           
            padding:7px 12px;
            margin-top: 0px;
            margin-right: 40px;
            font-size: 16px;
            font-weight: bold;
            float:right;
        }
        .butt a {
            color:white!important;
            text-decoration: none!important;
        }
    </style>
</head>
<body  class="antialiased">
    
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> <x-app-layout>
                        </x-app-layout></a>
                    @else
                    <div class="btn btn-success butt">
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    </div>
                        @if (Route::has('register'))
                        <div class="btn btn-success butt">
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        </div>
                            @endif
                    @endauth
                </div>
            @endif
    </div>
    <div align="center">
    <img style="width:200px; height:300px;" src="assets/images/hijralogo.jpg">
    <h1 style="color:#A7824D;">مرحبا بكم في الهجرة للدواجن</h1>
    <h1 style="color:#A7824D;">Welcome To AlHijra</h1>
</div>

<script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</script>
</body>
</html>