<!doctype html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>
<body class="font-nunito">
    <div id="app"
        class="bg-green-950"
        :class="{ 'overflow-hidden': isSideMenuOpen}"
      >
        @include('layouts.partials.nav')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
