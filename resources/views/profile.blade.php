@extends('layouts.main-layout')

@section('content')
<div class="px-20 my-20 h-screen">
    <div class="w-full py-4">
        <div
        class="py-4"
        >
        <div>
            hanya untuk gap
        </div>
        </div>
    </div>

    <h4
        class="mb-4 text-2xl font-semibold text-white"
    >
        Profile
    </h4>
    <div
        class="px-5 py-10 mb-8 bg-white rounded-lg flex justify-between"
    >
    <div class="w-1/4">
        <div class="w-36 h-36 mx-auto">
            <img
            class="object-cover rounded-full"
            src="https://i.pinimg.com/originals/dc/24/ca/dc24ca5d8dc58172b03f34792eff31e7.jpg"
            alt=""
            aria-hidden="true"
            />
        </div>
        <h1 class="font-bold text-xl text-center mt-5 mb-2">{{ Auth::user()->name }}</h1>
        <ul class="text-sm text-center">
            <li class="mb-1">(+62)271-646994</li>
            <li>Jalan Ir. Sutami 36 Kentingan, Jebres, Surakarta, Jawa Tengah, Indonesia 57126</li>
        </ul>
    </div>
    <div class="relative w-2/5 px-5 flex">
        <ul class="text-sm">
            <li class="font-semibold">Nama Lengkap</li>
            <li>Cipung Abubu Hacikule Abrakadabra </li>
            <li class="font-semibold pt-3">Tanggal Lahir</li>
            <li>1 Januari 2021</li>
            <li class="font-semibold pt-3">Email</li>
            <li>{{ Auth::user()->email }}</li>
            <li class="font-semibold pt-3">Password</li>
            <li>********</li>
        </ul>
        <div class="absolute self-end right-0">
            <a href="/" class="px-2 py-3 bg-green-650 hover:bg-green-950 rounded-md text-sm font-semibold text-white">Edit Profile</a>
        </div>
    </div>
    <div class="w-[35%] px-3">
        <h3 class="font-semibold text-xl">Points</h3>
        <div
            class="px-4 py-2 mt-3 mb-5 border border-green-450 rounded-lg shadow-sm"
        >
            <span class="text-xs text-gray-600 ">Koin Waste Care</span>
            <p class="mt-5 font-bold text-xl">Rp50.000</p>
        </div>
        <div class="flex items-center justify-center">
            <div class="bg-green-450 rounded-full w-16 h-16 mr-2"></div>
            <div class="bg-green-450 rounded-full w-16 h-16 mr-2"></div>
            <div class="bg-green-450 rounded-full w-16 h-16"></div>
        </div>
        <div class="flex items-center justify-center mt-2">
            <div class="bg-green-450 rounded-full w-16 h-16 mr-2"></div>
            <div class="bg-green-450 rounded-full w-16 h-16 mr-2"></div>
        </div>
    </div>
    </div>
</div>
@endsection
