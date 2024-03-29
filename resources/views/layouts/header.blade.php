<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- unique, secret, unpredictable value, generated by the server-side application, transmitted to the client,
         included in a subsequent HTTP request made by the client =CSRF TOKEN--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- CSS links --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../frontend/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- Javascript --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Restaurant</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class=" d-flex p-2 w-100 white-text">
            <a class="nav-link" href="/">
                <h1 class="text-white">E<span class="ease ">A</span>SE CANTEEN</h1>
            </a>
        </div>
        <div class="collapse navbar-collapse p-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                {{-- If user is Admin --}}
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->role === 'a')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                            </li>


                            <div class="dropdown">
                                <button class="nav-link btn btn-none dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin Control
                                </button>

                                <ul class="dropdown-menu bg-dark outline-none btn btn-none"
                                    aria-labelledby="dropdownMenuButton1">

                                    <li class="nav-item dropdown-item">
                                        <a class="nav-link" href="{{ route('adminOrder') }}">Order</a>
                                    </li>
                                    <li class="nav-item dropdown-item">
                                        <a class="nav-link " href="{{ route('allMenu') }}">Admin Menu</a>
                                    </li>
                                    <li class="nav-item dropdown-item">
                                        <a class="nav-link" href="{{ route('allItem') }}">Admin Item</a>
                                    </li>
                                    <li class="nav-item dropdown-item">
                                        <a class="nav-link" href="{{ route('AdminRating') }}">Admin Rating</a>
                                    </li>
                                </ul>
                            </div>
                            {{-- To show Profile --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.show') }}">Profile</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form-a').submit();">Logout</a>
                            </li>

                            <form id="logout-form-a" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        @else

                        {{-- if user is customer --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('allOrder') }}">Order</a>
                            </li>

                            {{-- <li class="nav-item">
                                                <a class="nav-link" href="#">Item</a>
                                            </li> --}}

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form-a').submit();">Logout</a>
                            </li>

                            <form id="logout-form-a" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('register') }}">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </nav>

</body>
