
    @extends('layout.layout')
    @section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
                        <a href="{{url('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                            Logout
                        </a>

                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif


            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <img width="100%" src="/images/logo.png"/>
                        </g>
                    </svg>
                </div>


                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    @foreach($foods as $food)
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white" style="margin-left: 30px; text-decoration: none;">{{$food->title}}</a></div>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="{{route('foods.buy',$food->id)}}" class="text-sm text-gray-700 underline" style="
                        float: left;
                        margin-left: 6.1%;
                        color: #fff !important;
                        text-transform: uppercase;
                        text-decoration: none;
                        background: #C70039;
                        padding: 2px 10px 1px;
                        border-radius: 5px;
                        display: inline-block;
                        border: none;
                        transition: all 0.4s ease 0s;">Buy Food</a>
                                <i class="fa fa-pencil-square"></i>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="float: left">
                                    <img src="{{ $food->image }}" alt="Image" width="45%"/>
                                    <p><h3>Restaurant: {{$food->user['name']}}</h3></p>
                                    <p>Expiration Day: {{$food->expiration_day}}</p>
                                    <p>Price: {{$food->price}}</p>
                                    <p>Description: {{$food->description}}</p>
                                    <p><h3>Ingredients</h3></p>
                                    @foreach($food->ingredients as $ingredient)
                                                <h4 style="display: inline">{{$ingredient->name}},</h4>
                                        @endforeach
                                    </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Build v{{ Illuminate\Foundation\Application::VERSION }}
                    </div>
                </div>
            </div>
        </div>
        @endsection
