<x-guest title="Home">
    <!-- Navigation -->
    <nav class="flex items-center justify-between md:px-14 md:py-6 text-white">
        <!-- Logo -->
        <a class="hidden md:block flex items-center" href="/">
            <img src="{{asset('img/wize_tales_logo.png')}}" alt="Logo" class="h-14 mr-0 md:mr-4">
        </a>
    
        <!-- Navigation Links -->
        <div class="hidden md:block flex-grow text-center font-Nunito">
                <a href="#" class="text-black hover:text-4EAE4C px-4 py-2">Explore</a>
                <a href="#" class="text-black hover:text-4EAE4C px-4 py-2">Store</a>
                <a href="#" class="text-black hover:text-4EAE4C px-4 py-2">About us</a>
        </div>
    
        <!-- Sign Up Button -->
        <div>
            <a href="#" class="bg-3A3F4F text-white px-8 py-2 font-Nunito font-bold hover:bg-4EAE4C hidden md:block">Sign Up</a>
        </div>
    </nav>  
    <!-- Mobile Navigation -->
    <nav class="md:hidden flex items-center justify-between px-4 py-3 text-white">
        <!-- Logo -->
        <a class="flex items-center" href="/">
            <img src="{{asset('img/wize_tales_logo.png')}}" alt="Logo" class="h-10">
        </a>
    
        <!-- Hamburger Icon -->
        <button id="mobile-menu-button" class="focus:outline-none text-black ">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </nav>
    
    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="md:hidden hidden text-black">
        <a href="#" class="text-black hover:text-4EAE4C block px-4 py-2">Explore</a>
        <a href="#" class="text-black hover:text-4EAE4C block px-4 py-2">Store</a>
        <a href="#" class="text-black hover:text-4EAE4C block px-4 py-2">About us</a>
        <div class="flex justify-center">
            <a href="#" class="block bg-3A3F4F text-white px-4 py-2 font-Nunito font-bold hover:bg-4EAE4C">Sign Up</a>
        </div>
    </div>
    
      <!-- header Content -->
    <section class="container mx-auto md:py-8 px-[2px]">
        <div class="flex flex-wrap items-center">
            <!-- Text Content on the Left -->
            <div class="w-[80%] md:w-[70%] mb-8 md:mb-0">
                <h1 class="text-2xl md:text-6xl mb-2 ml-10 md:ml-20 font-Bungee text-3E3E3E">SUSTAINABLE <span class="text-4EAE4C">FARMING</span> EDUCATION THROUGH <span class="text-4EAE4C">COMICS</span></h1>

            </div>

            <!-- Image on the Right -->
            <div class="w-[30%] hidden md:block">
                <img src="{{asset('img/boys_in_trad_group.png')}}" alt="boys_in_trad_group" class="h-72 md:ml-10">
            </div>
        </div>

        <!-- Second Text Content and Image -->
        <div class="flex flex-wrap items-center md:-mt-20">
            <!-- Text Content on the Left -->
            <div class="w-full md:w-[60%] mb-4">
                <p class="text-sm text-453416 text-left w-[80%] md:w-[40%] ml-10 md:ml-20 font-Nunito italic font-bold">Browse through our gallery of creative stories
                    structured to teach about sustainable farming
                    education through exciting comic stories.</p>

                <!-- Button for start reading -->
                <a href="#"class="inline-block mt-2 border-[2px] ml-10 md:ml-20 bg-2E2E2E text-white text-sm px-5 py-2 font-Nunito font-bold hover:bg-4EAE4C">
                    Start Reading
                    <i class='fas fa-arrow-right ml-1 text-[12px]'></i>
                </a>
            </div>

            <!-- Image on the Right -->
            <div class="w-full md:w-[40%] hidden md:block">
                <img src="{{asset('img/boy_girl_planting.png')}}" alt="boy_girl_planting" class="h-72 md:ml-10">
            </div>
        </div>
    </section>

    <!-- Legend of afefe Section -->
    <section class="bg-gray-200 relative">    
        <!-- Image -->
        <img src="{{ asset('img/man_thinking_lg.png') }}" alt="Boy and girl planting" class="w-full h-[500px] bg-center">
    
        <!-- Text Container -->
        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
            <div class="container mx-auto px-4">
                <!-- Centered Text -->
                <div class="text-left mb-4 md:mb-8 mt-10 md:mt-20">
                    <h2 class="text-3xl font-Bangers uppercase text-white">Legend of Afefe</h2>
                    <p class="text-sm text-left w-[80%] md:w-[45%] font-Nunito text-white mt-6">In the heart of Africa, climate change ravaged a once-thriving farmyard,
                        leaving it barren and desolate. Determined to restore its vitality, young Afefe,
                        armed with resilience and innovation, embarked on a journey to breathe life back into the land.
                        With unwavering dedication, he implemented sustainable practices, turning the parched earth into a
                        flourishing oasis, inspiring hope and renewal in his community.</p>
                        <!-- Button for start reading -->
                    <a href="/comic-read"class="inline-block mt-2 border-[2px] bg-white text-black text-sm px-4 py-3 font-Nunito font-semibold hover:bg-4EAE4C">
                        Read Now
                        <i class='fas fa-arrow-right ml-1 text-[14px]'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section with Linear Gradient Background and Text -->
    <section class="bg-gradient-to-r from-2E2E2E via-2E2E2E to-E155F8 text-white py-4 hidden md:block">
        <div class="container">
            <div class="flex flex-row justify-center font-poppins w-full">
                <div class="m-2 mr-10">
                    <p class="text-sm">Global warming</p>
                </div>
                <div class="m-2 mr-10">
                    <p class="text-sm">Climate change</p>
                </div>
                <div class="m-2 mr-10">
                    <p class="text-sm">Social media</p>
                </div>
                <div class="m-2 mr-10">
                    <p class="text-sm">Diversity</p>
                </div>
                <div class="m-2 mr-10">
                    <p class="text-sm">Multiculturalism</p>
                </div>
                <div class="m-2 mr-10">
                    <p class="text-sm">Citizenship</p>
                </div>
                <div class="m-2 mr-10">
                    <p class="text-sm">Religion</p>
                </div>
                <div class="m-2 mr-10">
                    <p class="text-sm">Inequality</p>
                </div>
                <div class="m-2 mr-10">
                    <p class="text-sm">Human rights</p>
                </div>
            </div>
        </div>
    </section>



    

    <section class="py-10 md:py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center mx-4">
                <div class="md:w-1/3 px-4 mb-8">
                    <img src="{{ asset('img/boys_discussing.png')}}" alt="Image 1" class="w-96 mb-4">
                    <h3 class="mx-auto font-Bangers text-2xl text-center mb-2 uppercase">engaging content that
                        spurs actions</h3>
                </div>
                <div class="sm:w-1/2 md:w-1/3 px-4 mb-8">
                    <img src="{{ asset('img/student_protest.png')}}" alt="Image 2" class="w-96 mb-4">
                    <h3 class="mx-auto font-Bangers text-2xl text-center mb-2 uppercase">Creating awareness on
                        SUSTAINABLE FARMING PRACTICES</h3>
                </div>
                <div class="sm:w-1/2 md:w-1/3 px-4 mb-8">
                    <img src="{{ asset('img/children_tribe_dressing.png')}}" alt="Image 3" class="w-96 mb-4">
                    <h3 class="mx-auto font-Bangers text-2xl text-center mb-2 uppercase">RAISING A GENERATION OF CLIMATE 
                        SMART STUDENTS THAT COMBAT 
                        HUNGER</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-700 py-10 md:py-20">
        <div class="container mx-auto px-16">
            <h2 class="text-3xl font-Bangers px-4 text-white mb-8">NEW ARRIVALS</h2>
            <div class="flex flex-wrap">
                <!-- Comic Story 1 -->
                <div class="w-full sm:w-1/2 md:w-48 px-4 mb-8">
                    <div class="relative">
                        <img src="{{ asset('img/man_thinking.png')}}" alt="Comic 1" class="md:w-48 h-auto mb-4">
                    </div>
                    <div class="relative flex items-center justify-between mb-3">
                        <h3 class="text-sm font-Nunito font-semibold text-white">Legend of Afefe</h3>
                        <img src="{{ asset('img/love_white.png')}}" alt="Love Icon" class="w-4 h-4">
                    </div>
                    <a href="/comic-read" class="inline-block bg-FF4343 hover:bg-863B3B text-white px-4 py-2 w-full font-Nunito text-center text-sm">Read Now
                        <i class='fas fa-arrow-right ml-1 text-[14px]'></i>
                    </a>
                </div>
    
                <!-- Comic Story 2 -->
                <div class="w-full sm:w-1/2 md:w-48 px-4 mb-8">
                    <div class="relative">
                        <img src="{{ asset('img/girl_holding_branch.png')}}" alt="Comic 2" class="md:w-48 h-auto mb-4">
                    </div>
                    <div class="relative flex items-center justify-between mb-3">
                        <h3 class="text-sm font-Nunito font-semibold text-white">Diwalili Tales</h3>
                        <img src="{{ asset('img/love_red.png')}}" alt="Love Icon" class="w-4 h-4">
                    </div>
                    <a href="#" class="inline-block bg-FF4343 hover:bg-863B3B text-white px-4 py-2 w-full font-Nunito text-center text-sm">Read Now
                        <i class='fas fa-arrow-right ml-1 text-[14px]'></i>
                    </a>
                </div>
    
                <!-- Comic Story 3 -->
                <div class="w-full sm:w-1/2 md:w-48 px-4 mb-8">
                    <div class="relative">
                        <img src="{{ asset('img/male_superhero.png')}}" alt="Comic 3" class="md:w-48 h-auto mb-4">
                    </div>
                    <div class="relative flex items-center justify-between mb-3">
                        <h3 class="text-sm font-Nunito font-semibold text-white">Captain Green</h3>
                        <img src="{{ asset('img/love_white.png')}}" alt="Love Icon" class="w-4 h-4">
                    </div>
                    <a href="#" class="inline-block bg-FF4343 hover:bg-863B3B text-white px-4 py-2 w-full font-Nunito text-center text-sm">Read Now
                        <i class='fas fa-arrow-right ml-1 text-[14px]'></i>
                    </a>
                </div>

                 <!-- Comic Story 4 -->
                 <div class="w-full sm:w-1/2 md:w-48 px-4 mb-8">
                    <div class="relative">
                        <img src="{{ asset('img/man_in_a_farm.png')}}" alt="Comic 3" class="md:w-48 h-auto mb-4">
                    </div>
                    <div class="relative flex items-center justify-between mb-3">
                        <h3 class="text-sm font-Nunito font-semibold text-white">Farmstead Fables</h3>
                        <img src="{{ asset('img/love_white.png')}}" alt="Love Icon" class="w-4 h-4">
                    </div>
                    <a href="#" class="inline-block bg-FF4343 hover:bg-863B3B text-white px-4 py-2 w-full font-Nunito text-center text-sm">Read Now
                        <i class='fas fa-arrow-right ml-1 text-[14px]'></i>
                    </a>
                </div>

                 <!-- Comic Story 5 -->
                <div class="w-full sm:w-1/2 md:w-48 px-4 mb-8">
                    <div class="relative">
                        <img src="{{ asset('img/barren_land.png')}}" alt="Comic 3" class="md:w-48 h-auto mb-4">
                    </div>
                    <div class="relative flex items-center justify-between mb-3">
                        <h3 class="text-sm font-Nunito font-semibold text-white">Dry Land</h3>
                        <img src="{{ asset('img/love_white.png')}}" alt="Love Icon" class="w-4 h-4">
                    </div>
                    <a href="#" class="inline-block bg-FF4343 hover:bg-863B3B text-white px-4 py-2 w-full font-Nunito text-center text-sm">Read Now
                        <i class='fas fa-arrow-right ml-1 text-[14px]'></i>
                    </a>
                </div>

                <!-- Comic Story 6 -->
                <div class="w-full sm:w-1/2 md:w-48 px-4 mb-8">
                    <div class="relative">
                        <img src="{{ asset('img/children_walking.png')}}" alt="Comic 3" class="md:w-48 h-auto mb-4">
                    </div>
                    <div class="relative flex items-center justify-between mb-3">
                        <h3 class="text-sm font-Nunito font-semibold text-white">Organic Heros</h3>
                        <img src="{{ asset('img/love_red.png')}}" alt="Love Icon" class="w-4 h-4">
                    </div>
                    <a href="#" class="inline-block bg-FF4343 hover:bg-863B3B text-white px-4 py-2 w-full font-Nunito text-center text-sm">Read Now
                        <i class='fas fa-arrow-right ml-1 text-[14px]'></i>
                    </a>
                </div>
    
                <!-- Add more comic stories as needed -->
            </div>
            
        </div>
    </section>

     <!-- Contact section -->
    <section class="pt-10">
        <div class="container mx-auto px-4">
            <div class="grid gap-10 grid-cols md:grid-cols-3">
                <!-- Logo and Image -->
                <div class="mb-8 md:mb-0">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/wize_tales_logo.png')}}" alt="Logo" class="h-16 mb-4">
                        <img src="{{ asset('img/happy_girl.png')}}" alt="Contact Image" class="hidden md:block w-64 h-auto">
                    </div>
                </div>
    
                <!-- Newsletter Subscription -->
                <div class="mb-8 md:mb-0 font-Nunito">
                    <h2 class="text-lg font-bold mb-4">Subscribe to Our Newsletter</h2>
                    <div class="flex items-center border border-white overflow-hidden">
                        <input type="email" placeholder="Enter your email" class="w-full bg-white text-gray-900 py-2 px-4 placeholder:font-Nunito focus:outline-none">
                        <button class="bg-3A3F4F text-white px-4 py-2 flex items-center hover:bg-4EAE4C">
                            <i class="far fa-envelope mr-2"></i>
                            Send
                        </button>
                    </div>
                    <p class="text-xs mt-2">Get up to date information about new releases, new topics, 
                        news around the wize tales community and so much more!</p>
                </div>
    
                <!-- Contact Information -->
                <div class="md:ml-20 mb-8 md:mb-0 font-Nunito flex flex-col items-center md:items-start">
                    <h2 class="text-lg font-bold mb-4">Contact Us</h2>
                    <ul class="text-sm">
                        <li class="mb-4"><a href="#" class="hover:text-4EAE4C">Instagram</a></li>
                        <li class="mb-4"><a href="#" class="hover:text-4EAE4C">Facebook</a></li>
                        <li class="mb-4"><a href="#" class="hover:text-4EAE4C">YouTube</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-3A3F4F py-4 text-white text-center">
            <p class="text-sm">&copy; 2024 Wize Tales™. All Rights Reserved.</p>
        </div>
        
    </section>
    
    
    
    
    
    


</x-guest>