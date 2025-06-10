<!DOCTYPE html>
<html x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }" 
      x-init="darkMode ? localStorage.setItem('theme', 'dark') : localStorage.setItem('theme', 'light')"
      :class="{ 'dark': darkMode }" 
      lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800 transition-colors duration-300">
    <!-- Promo Banner -->
    <div class="bg-gradient-to-r from-blue-500 to-green-500 text-white text-center py-2 text-sm">
        🚚 Free shipping on orders over R2,000 | 🎁 30-Day Money-Back Guarantee
    </div>

    <!-- Top Navigation Bar -->
    <header class="bg-white dark:bg-zinc-900 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <div class="bg-accent dark:bg-yellow-500 w-10 h-10 rounded-full flex items-center justify-center">
                        <i class="fas fa-paw text-white text-xl"></i>
                    </div>
                    <span class="text-xl font-bold text-gray-900 dark:text-white ml-2">DogStore</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="{{ route('dashboard') }}"
                   class="text-gray-700 dark:text-gray-300 hover:text-primary font-medium transition-colors">Home</a>
                <a href="#"
                   class="text-gray-700 dark:text-gray-300 hover:text-primary font-medium transition-colors">Shop</a>
                <a href="#" class="text-zinc-700 dark:text-zinc-200 hover:underline">Contact</a>
            </nav>

            <!-- Auth & Dark Mode -->
            <div class="flex items-center space-x-4">
                <!-- Dark Mode Toggle -->
                <button
                    @click="darkMode = !darkMode; localStorage.setItem('theme', darkMode ? 'dark' : 'light')"
                    class="text-gray-700 dark:text-gray-300 hover:text-primary transition-colors focus:outline-none"
                    :aria-label="darkMode ? 'Switch to light mode' : 'Switch to dark mode'"
                >
                    <i x-show="!darkMode" class="fas fa-moon"></i>
                    <i x-show="darkMode" class="fas fa-sun"></i>
                </button>

                <!-- Auth Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @click.away="open = false"
                            class="flex items-center text-zinc-700 dark:text-zinc-200 hover:text-primary transition-colors focus:outline-none">
                        <div class="bg-zinc-200 dark:bg-zinc-700 w-8 h-8 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-sm"></i>
                        </div>
                        <span class="ml-2 hidden sm:inline-block font-medium">{{ auth()->user()->name }}</span>
                        <svg class="ml-1 w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M5.516 7.548l4.484 4.482 4.484-4.482 1.415 1.414-5.899 5.899-5.899-5.899z" />
                        </svg>
                    </button>

                    <div x-show="open" x-transition
                         class="absolute right-0 mt-2 w-48 bg-white dark:bg-zinc-800 border dark:border-zinc-700 rounded shadow-lg z-50 py-1">
                        <div class="px-4 py-2 border-b dark:border-zinc-700">
                            <p class="font-medium">{{ auth()->user()->name }}</p>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">{{ auth()->user()->email }}</p>
                        </div>
                        <a href="{{ route('settings.profile') }}"
                           class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-700 transition-colors">
                            <i class="fas fa-cog mr-2"></i> Settings
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="w-full text-left px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-700 transition-colors">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @livewire('hero-section')

    <!-- Page Content -->
    <main class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>

    @fluxScripts
    @livewireScripts
</body>
</html>