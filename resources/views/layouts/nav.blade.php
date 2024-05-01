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

<!-- Main Image Container 
        <div class=" flex justify-center items-center mb-3">
            <!-- Main Image 
            <div class="relative">
                <img src="{{asset('img/read/The Legend of Afefe - A Sustainable Farming Story_pages-to-jpg-0001.jpg')}}" alt="Comic Image" class="w-[28rem]">
                
                <!-- Navigation Buttons 
                <div class="relative w-[28rem] flex justify-between">
                    <!-- Previous Button 
                    <button class="text-white">
                        <i class='fas fa-arrow-left text-[15px]'></i>Previous
                    </button>
                    <p class="text-white">Page 1</p>
                    <!-- Next Button 
                    <button class="text-white">Next
                        <i class='fas fa-arrow-right text-[15px]'></i>
                    </button>
                </div>
            </div>
            
            <!-- Spacer 
            <div class="w-3"></div>
            
            <!-- Blurred Image (Next Slide Placeholder) 
            <div class="relative">
                <img src="{{asset('img/read/The Legend of Afefe - A Sustainable Farming Story_pages-to-jpg-0001.jpg')}}" alt="Blurred Comic Image" class="w-[20rem] filter blur-[2px]">
            </div>
        </div>-->
