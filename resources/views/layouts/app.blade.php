<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="https://www.wrike.com/content/themes/wrike/dist/img/raster/favicon/favicon.ico?v3">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="relative">
    @isset($modal)
    <div class="fixed h-screen w-full bg-black z-10 bg-opacity-10 flex items-center justify-center">
        <div class="bg-white py-12 px-6 rounded-lg w-96 relative">

            <a href="{{ route('home') }}">
                <div class="absolute right-6 top-6">
                    X 
                </div>
            </a>

           <h1 class="text-primary text-center bold text-lg">
               {{ isset($is_edit) ? "EDIT TASK" : "CREATE TASK" }}
           </h1>

           <form class="form bg-white p-6 border-1" action="{{ isset($is_edit) ? route("tasks.update", ["task" => $current->id]) : route("tasks.store") }}" method="POST">
            @isset($is_edit)
                @method('PUT')
            @endisset
            @csrf
            <div class="mb-4">
                <label for="title">Title</label>
                <div>
                    <input id="title" type="text" value="{{$current->title ?? '' }}" class="w-full rounded border-primary @error('title') is-invalid @enderror" name="title" required>

                    @error('title')
                    <span class="text-red-500 text-sm">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="description">Description</label>
                <div>
                    <input id="description" type="text" value="{{$current->description ?? '' }}" class="w-full rounded border-primary @error('description') is-invalid @enderror" name="description" required>

                    @error('description')
                    <span class="text-red-500 text-sm">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="due_date">Due Date</label>
                <div>
                    <input id="due_date" type="date" value="{{$current->due_date ?? '' }}" class="w-full rounded border-primary @error('due_date') is-invalid @enderror" name="due_date" required>

                    @error('due_date')
                    <span class="text-red-500 text-sm">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            @isset($is_edit)
                <div class="mb-4">
                    <label for="status">Status</label>
                    <div>
                        <select id="status" value="{{$current->status}}" class="w-full rounded border-primary @error('status') is-invalid @enderror" name="status" required>
                            <option  {{$current->status == 'todo' ? 'selected' : ''}} value="todo">Next Up</option>
                            <option {{$current->status == 'progress' ? 'selected' : ''}} value="progress">In Progress</option>
                            <option {{$current->status == 'complete' ? 'selected' : ''}} value="complete">Complete</option>
                        </select>
                        @error('status')
                        <span class="text-red-500 text-sm">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            @endisset
            
            <div class="flex justify-center mt-9">
                <button type="submit" class="bg-primary px-12 py-3 rounded text-white">
                    {{ isset($is_edit) ? "SAVE" : "CREATE" }}
                </button>
            </div>
        </form>
        </div>
    </div>
   
    @endisset
   
    <div class="flex h-screen relative" >
        <div class="w-1/6"></div>
        <div  class="flex flex-col py-6 px-6 w-1/6 bg-cGrey h-full fixed top-0 left-0">
            <a  class="w-full py-2 mb-8 rounded-lg flex justify-center items-center gap-2 shadow-md hover:scale-105 bg-white" href="{{ url('/') }}">
                <img class="h-4" src="{{ url('images/wrike-logo.png') }}" alt="" srcset="">
                <span class="font-bold">Todify</span>
            </a>
            <div class="">
                <ul class="flex flex-col gap-4 px-4">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li><a class="flex items-center gap-2 opacity-50 hover:opacity-100 transition-all" href="{{ route('login') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                                {{ __('Login') }}
                            </a></li>
                        @endif

                        @if (Route::has('register'))
                            <li><a class="flex items-center gap-2 opacity-50 hover:opacity-100 transition-all" class="nav-link" href="{{ route('register') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                  </svg>
                                <span>{{ __('Register') }}</span>
                            </a></li>
                        @endif
                    @else
                        <li class="nav-item dropdown flex flex-col gap-4">
                            <a class="flex items-center gap-2 opacity-50 hover:opacity-100 transition-all"href="{{ route('home') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                  </svg>
                                <span>Dashboard</span>
                            </a>

                            <div>
                                <a class="flex items-center gap-2 opacity-50 hover:opacity-100 transition-all" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                      </svg>
                                    <span>{{ __('Logout') }}</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div> 

        <main class="w-5/6">
            @yield('content')
        </main>
    </div>
</body>
</html>
