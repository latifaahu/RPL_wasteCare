{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <main>
        <!-- component -->
        <div class="h-screen flex">
            <div class="flex w-2/5 justify-center items-center bg-white">
                <form method="POST" class="bg-white w-2/3" action="{{ route('register') }}">
                @csrf
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Sign Up</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Create your WasteCare account!</p>
                <div class="relative w-full mb-3">
                    <label for="name" class="mb-3">
                        <span class="block text-sm font-medium text-slate-700">{{ __('Name') }}</span>
                        <!-- Using form state modifers, the classes can be identical for every input -->
                        <input
                            id="name"
                            type="text"
                            name="name"
                            class="@error('name') is-invalid @enderror mt-1 px-3 py-2 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-green-450 focus:ring-green-450 block w-full rounded-md sm:text-sm focus:ring-1"
                            placeholder="Name"
                            value="{{ old('name') }}"
                            required autocomplete="name"
                            />
                        @error('name')
                            <span class="invalid-feedback text-xs text-red-600" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>
                <div class="relative w-full mb-3">
                    <label for="email" class="mb-3">
                        <span class="block text-sm font-medium text-slate-700">{{ __('Email Address') }}</span>
                        <!-- Using form state modifers, the classes can be identical for every input -->
                        <input
                            id="email"
                            type="text"
                            name="email"
                            class="@error('email') is-invalid @enderror mt-1 px-3 py-2 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-green-450 focus:ring-green-450 block w-full rounded-md sm:text-sm focus:ring-1"
                            placeholder="Email Address"
                            value="{{ old('email') }}"
                            required autocomplete="email"
                            />
                        @error('email')
                            <span class="invalid-feedback text-xs text-red-600" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>
                <div class="relative w-full mb-3">
                    <label for="password" class="mb-3">
                        <span class="block text-sm font-medium text-slate-700">{{ __('Password') }}</span>
                        <!-- Using form state modifers, the classes can be identical for every input -->
                        <input
                            id="password"
                            type="password"
                            name="password"
                            class="@error('password') is-invalid @enderror mt-1 px-3 py-2 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-green-450 focus:ring-green-450 block w-full rounded-md sm:text-sm focus:ring-1"
                            placeholder="Password"
                            required autocomplete="new-password"
                            />
                        @error('password')
                            <span class="invalid-feedback text-xs text-red-600" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>
                <div class="relative w-full mb-0">
                    <label for="confirm-password" class="mb-3">
                        <span class="block text-sm font-medium text-slate-700">{{ __('Confirm Password') }}</span>
                        <!-- Using form state modifers, the classes can be identical for every input -->
                        <input
                            id="confirm-password"
                            type="password"
                            name="password_confirmation"
                            class="mt-1 px-3 py-2 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-green-450 focus:ring-green-450 block w-full rounded-md sm:text-sm focus:ring-1"
                            placeholder="Confirm password"
                            required autocomplete="new-password"
                            />
                    </label>
                </div>

                <div class="mb-1 mt-10">
                    <div class="col-md-7">
                        <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-650 border border-transparent rounded-lg active:bg-green-450 hover:bg-green-950 focus:outline-none">
                            {{ __('Sign Up') }}
                        </button>
                        <a  href="https://google.com" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-gray-400 transition-colors duration-150 bg-none border-2 hover:bg-gray-100 border-gray-400 rounded-lg focus:outline-none">
                            {{ __('Sign up with Google') }}
                        </a  href="https://google.com">

                        <span class="text-xs text-gray-400">Already have account?
                            <a class="font-medium text-green-450 hover:underline"
                            href="{{ route('login') }}"
                            >{{ __('Login here') }}
                            </a>
                        </span>
                    </div>
                </div>
                </form>
            </div>
            <div class="w-3/5 bg-cover bg-center items-center" style="background-image: url({{ asset('img/regis.png') }})">
            </div>
        </div>
    </main>
</body>
</html>

