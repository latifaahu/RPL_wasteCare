@extends('layouts.main-layout')

@section('content')
<div class="px-20 py-5">
    <h4
        class="mb-4 text-xl font-semibold text-white"
    >
        Home
    </h4>
    <div
        class="px-4 py-3 mb-8 bg-white rounded-lg flex justify-between"
    >
    <div class="bg-slate-500 w-1/4">
        <p class="text-sm text-gray-600">
        Large, full width sections goes here
        </p>
    </div>
    <div class="bg-slate-100 w-1/2">
        <p class="text-sm text-gray-600">
        Large, full width sections goes here
        </p>
    </div>
    <div class="bg-slate-400 w-1/4">
        <p class="text-sm text-gray-600">
        Large, full width sections goes here
        </p>
    </div>
    </div>

</div>
@endsection
