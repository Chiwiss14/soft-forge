<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SOFT-FORGE')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <nav class="bg-white shadow-md rounded-b-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}" class="font-bold text-xl text-gray-900 rounded-md">My Logo</a>
                </div>

                <!-- Navigation Links -->
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/') }}"
                        class="text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md font-medium">Home</a>
                    <a href="{{ url('/about') }}"
                        class="text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md font-medium">About</a>
                    <a href="{{ url('/services') }}"
                        class="text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md font-medium">Services</a>
                    <a href="{{ url('/contact') }}"
                        class="text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md font-medium">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>


   <footer class="bg-black text-gray-400 py-12 mt-10 rounded-t-lg shadow-inner">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Top Section: Titles side by side -->
           <div class="flex flex-col md:flex-row justify-center md:gap-x-12 text-center md:text-left mb-8">
                <h4 class="text-xl font-semibold text-grey mb-2 md:mb-0">Services</h3>
                <h4 class="text-xl font-semibold text-grey mb-2 md:mb-0">Careers</h3>
                <h4 class="text-xl font-semibold text-grey">Contact</h3>
            </div>

            <!-- Bottom Section: All icons in a single flex container -->
            <div class="flex flex-wrap justify-center gap-6 md:gap-8">
                <!-- YouTube -->
                <a href="#" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a2.994 2.994 0 0 0-2.112-2.12C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.386.566a2.994 2.994 0 0 0-2.112 2.12A31.17 31.17 0 0 0 .5 12a31.17 31.17 0 0 0 .002 5.814 2.994 2.994 0 0 0 2.112 2.12C4.495 20.5 12 20.5 12 20.5s7.505 0 9.386-.566a2.994 2.994 0 0 0 2.112-2.12A31.17 31.17 0 0 0 23.5 12a31.17 31.17 0 0 0-.002-5.814ZM9.75 15.568V8.432L15.818 12 9.75 15.568Z" />
                    </svg>
                </a>
                <!-- GitHub -->
                <a href="#" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 .5C5.65.5.5 5.65.5 12a11.5 11.5 0 0 0 7.85 10.95c.57.1.78-.25.78-.55v-2.1c-3.19.7-3.87-1.54-3.87-1.54-.52-1.33-1.28-1.68-1.28-1.68-1.05-.72.08-.7.08-.7 1.16.08 1.77 1.2 1.77 1.2 1.03 1.76 2.7 1.25 3.36.96.1-.75.4-1.25.73-1.54-2.55-.29-5.23-1.27-5.23-5.65 0-1.25.44-2.28 1.18-3.08-.12-.29-.51-1.47.11-3.06 0 0 .96-.31 3.15 1.17a10.9 10.9 0 0 1 5.74 0c2.19-1.48 3.15-1.17 3.15-1.17.62 1.59.23 2.77.11 3.06.74.8 1.18 1.83 1.18 3.08 0 4.39-2.69 5.35-5.25 5.63.41.35.77 1.04.77 2.11v3.13c0 .3.21.65.79.54A11.5 11.5 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5Z" />
                    </svg>
                </a>
                <!-- Gmail -->
                <a href="mailto:someone@example.com" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12.713 1.2 5.25A2 2 0 0 1 3.2 3h17.6a2 2 0 0 1 2 2.25L12 12.713Zm0 0L1 5.25V19a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V5.25L12 12.713Z" />
                    </svg>
                </a>
                <!-- Facebook -->
                <a href="#" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.675 0H1.326C.594 0 0 .594 0 1.326v21.348C0 23.406.594 24 1.326 24h11.495V14.708H9.692v-3.62h3.129V8.413c0-3.1 1.893-4.788 4.658-4.788 1.325 0 2.464.099 2.797.143v3.243l-1.92.001c-1.506 0-1.797.717-1.797 1.768v2.316h3.587l-.467 3.62h-3.12V24h6.116C23.406 24 24 23.406 24 22.674V1.326C24 .594 23.406 0 22.675 0Z" />
                    </svg>
                </a>
                <!-- Instagram -->
                <a href="#" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9a5.5 5.5 0 0 1-5.5 5.5h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm5.25-3a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0Z" />
                    </svg>
                </a>
                <!-- X (Twitter) -->
                <a href="#" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.46 5.954c-.793.352-1.646.588-2.54.694a4.49 4.49 0 0 0 1.975-2.481 9.03 9.03 0 0 1-2.856 1.091 4.515 4.515 0 0 0-7.688 4.115A12.83 12.83 0 0 1 3.146 4.86a4.493 4.493 0 0 0 1.397 6.024 4.46 4.46 0 0 1-2.044-.566v.057a4.516 4.516 0 0 0 3.62 4.425 4.498 4.498 0 0 1-2.04.077 4.515 4.515 0 0 0 4.215 3.133 9.06 9.06 0 0 1-5.605 1.935c-.363 0-.72-.021-1.074-.062A12.77 12.77 0 0 0 8.29 21c7.547 0 11.675-6.252 11.675-11.675 0-.178-.004-.356-.012-.532A8.36 8.36 0 0 0 22.46 5.954Z" />
                    </svg>
                </a>
                <!-- LinkedIn-->
                <a href="#" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.327-.026-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.35V9h3.414v1.561h.049c.476-.9 1.637-1.852 3.37-1.852 3.602 0 4.268 2.37 4.268 5.455v6.288zM5.337 7.433a2.062 2.062 0 1 1 0-4.125 2.062 2.062 0 0 1 0 4.125zm1.777 13.019H3.56V9h3.554v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.226.792 24 1.771 24h20.451C23.2 24 23.992 23.226 24 22.225V1.729C24 .774 23.2 0 22.225 0z" />
                    </svg>
                </a>
            </div>

            <!-- Copyright -->
            <p class="text-center text-sm text-gray-500 mt-12">&copy; 2025 My App. All rights reserved.</p>
        </div>
    </footer>


</body>

</html>
