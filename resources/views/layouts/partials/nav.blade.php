<nav class="fixed w-full z-10 {{ ("isModalOpen") ? "z-[5]" : "z-10"}} py-4 shadow-md bg-white">
    <div
    class="container flex items-center justify-between h-full px-20 mx-auto"
    >
    <a class="text-2xl font-bold inline-flex items-center justify-between" href="{{ url('/') }}">
        {{-- {{ config('app.name', 'To Do List') }} --}}
        <span class="mr-3 mb-2">
            <img src="/img/logo.png" alt="logo" class="w-12 h-auto">
        </span>
        {{ __('Waste Care') }}
    </a>

    <!-- Gap nav -->
    <div class="flex justify-center flex-1 lg:mr-32">
        <div class="relative w-full max-w-xl mr-6">
        <div class="w-full absolute inset-y-0 flex items-center l-2"></div>
        </div>
    </div>
    <ul class="flex items-center flex-shrink-0 space-x-6">
    <!-- Authentication Links -->
    @guest
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-20 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 pr-4">Home</a>
                @else
                    <a class="nav-link text-sm text-gray-700 pr-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endauth
            </div>
        @endif

    @else
    <li>
         <a href="{{ url('/home') }}" class="text-sm text-gray-700 pr-3 {{ ($active === "home") ? "font-bold text-green-950" : "" }}">Home</a>
    </li>
    <!-- Notifications menu -->
    <li class="relative">
    <button
        class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
        @click="toggleNotificationsMenu"
        @keydown.escape="closeNotificationsMenu"
        aria-label="Notifications"
        aria-haspopup="true"
    >
        <div
        class="inline-flex items-center justify-between w-full px-2 text-sm rounded-md  hover:text-gray-800"
        >
        <span>Layanan</span>
        <span
            class="inline-flex items-center justify-center px-2 text-xs leading-none"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </span>
        </div>
    </button>
    <template x-if="isNotificationsMenuOpen">
        <ul
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click.away="closeNotificationsMenu"
        @keydown.escape="closeNotificationsMenu"
        class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-200 rounded-md shadow-md"
        aria-label="submenu"
        >
        <li class="flex">
            <a
            class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
            href="/home"
            >
            <span>Pick Up</span>
            </a>
        </li>
        <li class="flex">
            <a
            class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
            href="/home"
            >
            <span>Drop Off</span>
            </a>
        </li>
        </ul>
    </template>
    </li>
    <!-- Profile menu -->
    <li class="relative">
        <button
            class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
            @click="toggleProfileMenu"
            @keydown.escape="closeProfileMenu"
            aria-label="Account"
            aria-haspopup="true"
        >
            <img
            class="object-cover w-8 h-8 rounded-full"
            src="https://i.pinimg.com/originals/dc/24/ca/dc24ca5d8dc58172b03f34792eff31e7.jpg"
            alt=""
            aria-hidden="true"
            />
        </button>
        <template x-if="isProfileMenuOpen">
            <ul
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click.away="closeProfileMenu"
            @keydown.escape="closeProfileMenu"
            class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-200 rounded-md shadow-md"
            aria-label="submenu"
            >
            <li class="flex">
                <a
                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                href="{{asset('user/profile/' . Auth::user()->id)}}"
                >
                <svg
                    class="w-4 h-4 mr-3"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                    ></path>
                </svg>
                <span>{{ Auth::user()->name }}</span>
                </a>
            </li>
            <li class="flex">
                <div
                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"

                >
                <svg
                    class="w-4 h-4 mr-3"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                    ></path>
                </svg>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            </li>
            </ul>
        </template>
        </li>
        @endguest
    </ul>
    </div>
</nav>
