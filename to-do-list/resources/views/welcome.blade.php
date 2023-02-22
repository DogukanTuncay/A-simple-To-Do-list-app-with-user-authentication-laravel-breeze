<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
          .sidebar-brand{
            display: inline;
          }
          .sidebar-nav-item{
            display: inline;
          }
          body{
            background-image: url('https://html.sammy-codes.com/images/background.jpg')
          }
        </style>
    </head>
    <body class="antialiased bg-image">
        {{--  --}}
        <div class="container">
          <body id="page-top">
            <!-- Navigation-->
            <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
            <nav id="sidebar-wrapper ">
                <ul class="sidebar-nav row">
                    <li style="text-align: center" class="sidebar-brand p-3 m-3 text-muted h1">MY NEW TO-DO</li>
                    @if (Route::has('login'))
                        @auth
                           <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Ana Sayfa</a>
                        @else
                        <a href="{{ route('login') }}" class="font-semibold btn btn-success  text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Giriş Yap</a>
    
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="mt-3 btn btn-dark font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Kaydol</a>
                            @endif
                        @endauth
                @endif
              </ul>
            </nav>
            <div style="height: 25px;"></div>
            <!-- Header-->
            <header class="masthead d-flex align-items-center">
                <div class="container  px-4 px-lg-5 text-center">
                    <h1 class="mb-1">Kullanıcı Girişli Yeni Bir To-Do-List Denemesi</h1>
            <div style="height: 25px;"></div>
                    <h3 class="mb-5"><em>Hesabınızı Oluşturup Hemen Deneyebilirsiniz</em></h3></div>
            </header>
            
            </div>
        </div> 
        </div>
    </body>
</html>
