<x-guest-layout>
    <x-slot name="hero">
        <div class="relative w-full h-[300px] overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('/assets/images/background.jpg');"></div>
            <div class="absolute inset-0 bg-black opacity-60"></div>

            <div class="relative z-10 flex items-center h-full px-6 md:px-20">
                <div class="max-w-3xl text-left">
                    <h2 class="text-white font-semibold text-3xl">We Build</h2>
                    <h1 class="text-white font-extrabold text-5xl md:text-7xl my-2">Scalable & Smart</h1>
                    <p class="text-white text-lg md:text-xl mb-6">Custom apps, enterprise solutions...</p>
                    <!-- CTA Buttons -->
                    <div class="flex justify-center mb-6">
                        <a href="#"
                            class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-3 px-6 rounded-md text-lg transition-colors">
                            Start Your Project
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Section -->
        <!-- Second Section -->
        <section class="bg-gray-900 py-12">
            <div class="max-w-7xl mx-auto px-6">

                <!-- Centered Button -->
                <div class="flex justify-center mb-8">
                    <a href="#"
                        class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-3 px-6 rounded-md text-lg transition-colors">
                        Explore Services
                    </a>
                </div>

                <!-- Search Bar -->
                <div class="flex justify-center mb-12">
                    <input type="text" placeholder="Search for solutions..."
                        class="w-full max-w-3xl border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>

                <!-- Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">

                    <!-- Card 1 -->
                    <div>
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="/assets/images/card-img/card4.jpg" alt="Tech Image 1"
                                class="w-full h-48 object-cover">
                        </div>
                        <h3 class="font-semibold text-lg text-white mt-3">Web Development</h3>
                    </div>

                    <!-- Card 2 -->
                    <div>
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="assets/images/card-img/card1.jpg" alt="Tech Image 2"
                                class="w-full h-48 object-cover">
                        </div>
                        <h3 class="font-semibold text-lg text-white mt-3">Mobile Apps</h3>
                    </div>

                    <!-- Card 3 -->
                    <div>
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="/assets/images/card-img/card5.jpg" alt="Tech Image 3"
                                class="w-full h-48 object-cover">
                        </div>
                        <h3 class="font-semibold text-lg text-white mt-3">Cloud Solutions</h3>
                    </div>

                    <!-- Card 4 -->
                    <div>
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="assets/images/card-img/3img.jpg" alt="Tech Image 4"
                                class="w-full h-48 object-cover">
                        </div>
                        <h3 class="font-semibold text-lg text-white mt-3">UI/UX Design</h3>
                    </div>

                </div>
            </div>
        </section>

        <!-- Third Section -->
        <section class="bg-gray-900 py-16">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Left: Image -->
                <div class="flex justify-center">
                    <div class="w-40 h-80 rounded-lg shadow-md overflow-hidden">
                        <img src="assets/images/3section.jpg" alt="3section" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="max-w-md">
                    <h2 class="text-1xl  text-white mb-4">Why Choose SOFT-FORGE?</h2>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        At SOFT-FORGE, we specialize in building scalable, innovative, and secure digital products
                        tailored for modern businesses. From web development and mobile apps to cloud solutions
                        and UI/UX design, our team ensures that your vision is transformed into reality.
                    </p>
                    <a href="#"
                        class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-3 px-6 rounded-md text-lg transition-colors">
                        Learn More
                    </a>
                </div>

            </div>
        </section>

        <!-- Fourth Section -->
        <section class="bg-white py-16">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <p class="text-gray-700 text-lg leading-relaxed">
                    At SOFT-FORGE, we believe in creating technology that empowers businesses and drives innovation.
                    Our mission is to transform ideas into powerful solutions, using modern tools and agile practices.
                    Whether it’s building scalable applications, designing seamless user experiences, or delivering
                    secure cloud systems, our team is committed to excellence. We don’t just write code – we forge
                    partnerships, shaping the future together with our clients to unlock their full potential in the
                    digital world.
                </p>
            </div>
        </section>


    </x-slot>

    {{-- constrained page content below --}}
    <div>
        {{-- regular page content goes here --}}
    </div>
</x-guest-layout>
