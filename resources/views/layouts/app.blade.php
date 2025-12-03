<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Zahin - Developer Portfolio')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html { scroll-behavior: smooth; }
        .bg-dark-accent { background-color: #0A192F; } 
        .text-cyan { color: #66ffda; } 
        .border-cyan { border-color: #66ffda; }
    </style>
</head>
<body class="bg-dark-accent text-gray-200">
    <nav class="sticky top-0 z-50 shadow-xl backdrop-blur-sm bg-dark-accent/90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ url('/') }}" class="text-2xl font-extrabold text-cyan tracking-wider">
                    ZAHIN <span class="text-gray-300">DEV</span>
                </a>
                <div class="flex space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-400 hover:text-cyan font-medium px-3 py-2 transition duration-300">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-400 hover:text-cyan font-medium px-3 py-2 transition duration-300">About</a>
                    <a href="{{ route('projects') }}" class="text-gray-400 hover:text-cyan font-medium px-3 py-2 transition duration-300">Project</a>
                    <a href="{{ route('contact') }}" class="border-2 border-cyan text-cyan hover:bg-cyan/10 font-medium px-4 py-1.5 rounded transition duration-300">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    
    <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-gray-900 mt-16 py-6 border-t border-cyan/20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm text-gray-400">&copy; {{ date('Y') }} Zahin Muntaha Khan. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>