<x-guest-layout>
    {{-- HERO SECTION --}}
    <div class="relative bg-gray-900 h-[300px] flex flex-col justify-between w-full">

        <!-- Background image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/assets/images/serve.jpg');"></div>
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Search + H1 -->
        <div class="relative z-10 flex flex-col items-center justify-center pt-12 space-y-6">
            <!-- Search Bar -->
            <div class="w-full max-w-2xl">
                <form action="{{ url('/services') }}" method="GET" class="flex">
                    <input type="text" name="q" placeholder="Search services..."
                        class="w-full px-4 py-3 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                    <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-6 rounded-r-lg transition-colors duration-200">
                        Search
                    </button>
                </form>
            </div>

            <!-- H1 -->
            <h1 class="text-white text-4xl font-bold">Our Services</h1>
        </div>

        <!-- Button at bottom -->
        <div class="relative z-10 flex justify-center pb-12">
            <a href="#services"
                class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-3 px-6 rounded-lg shadow-md">
                Get Started
            </a>
        </div>
    </div>

    {{-- SECOND SECTION (Services Cards) --}}
    <section class="bg-[#090B10] py-16 w-full">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <!-- Section Title -->
            <h1 class="text-3xl font-extrabold text-white mb-10">Our Services</h1>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-items-center">
                <!-- Card 1 -->
                <div class="max-w-xs w-18">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="/assets/images/card-img/card4.jpg" alt="Service 1" class="w-full h-36 object-cover">
                    </div>
                    <h3 class="text-lg font-semibold text-white mt-3">Web Development</h3>
                    <p class="text-gray-300 mt-1 text-sm">We build modern, scalable, and responsive websites tailored to
                        your needs.</p>
                </div>

                <!-- Card 2 -->
                <div class="max-w-xs w-full">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="assets/images/card-img/card1.jpg" alt="Service 2" class="w-full h-36 object-cover">
                    </div>
                    <h3 class="text-lg font-semibold text-white mt-3">Mobile Apps</h3>
                    <p class="text-gray-300 mt-1 text-sm">Our team crafts intuitive and high-performance mobile
                        applications.</p>
                </div>

                <!-- Card 3 -->
                <div class="max-w-xs w-full">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="/assets/images/card-img/card5.jpg" alt="Service 3" class="w-full h-36 object-cover">
                    </div>
                    <h3 class="text-lg font-semibold text-white mt-3">Cloud Solutions</h3>
                    <p class="text-gray-300 mt-1 text-sm">We help businesses migrate, scale, and manage their cloud
                        infrastructure.</p>
                </div>

                <!-- Card 4 -->
                <div class="max-w-xs w-full">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="assets/images/card-img/3img.jpg" alt="Service 4" class="w-full h-36 object-cover">
                    </div>
                    <h3 class="text-lg font-semibold text-white mt-3">UI/UX Design</h3>
                    <p class="text-gray-300 mt-1 text-sm">Our design team creates seamless, engaging, and user-friendly
                        interfaces.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- THIRD SECTION (Why Choose Us) --}}
    <section class="bg-[#090B10] py-16 w-full">
        <div class="max-w-6xl mx-auto text-center">
            <!-- Section Title -->
            <h1 class="text-3xl font-extrabold text-white mb-10">Why Choose Us</h1>

            <!-- Icons Row -->
            <div class="flex flex-wrap justify-center gap-7">
                <!-- Icon 1 -->
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center text-white text-xl">
                        <span><img src="/assets/images/icons/thunder.png" alt="bolt"></span>
                    </div>
                </div>

                <!-- Icon 2 -->
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center text-white text-xl">
                        <span><img src="/assets/images/icons/unlock.png" alt=""></span>
                    </div>
                </div>

                <!-- Icon 3 -->
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center text-white text-xl">
                        <span><img src="/assets/images/icons/chart.png" alt=""></span>
                    </div>
                </div>

                <!-- Icon 4 -->
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center text-white text-xl">
                        <span><img src="assets/images/icons/handshake.png" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- LAST SECTION --}}
    <section class="bg-[#090B10] py-20 w-full">
        <div class="max-w-6xl mx-auto text-center">
            <!-- Optional Heading or Text -->
            <h2 class="text-3xl font-extrabold text-white mb-8">Ready to Get Started?</h2>
            <p class="text-gray-300 max-w-2xl mx-auto mb-12">
                Let’s build something amazing together. Our team is ready to bring your ideas to life with smart,
                scalable solutions.
            </p>

            <!-- Centered Button -->
            <a href="#"
                class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-3 px-8 rounded-md text-lg transition-colors duration-200 shadow-md">
                Start Your Project
            </a>
        </div>
    </section>

    {{-- MAIN PAGE CONTENT --}}
    {{-- <section id="services" class="py-16 text-center bg-gray-100">
        <p class="max-w-3xl mx-auto text-lg text-gray-700">
            Here we showcase all the services we provide...
        </p>
    </section> --}}
</x-guest-layout>
