<x-guest title="Home">
    <div class="">
         <!-- Main content section -->
          <!-- Header section with image -->
        <div class="h-4">
            <img src="{{asset('img/ankara_nav.png')}}" alt="Header Image" class="w-100 h-4">
        </div>
        <div class="flex justify-center">
             <!-- Left side image -->
             <div class="w-1/2">
                 <img src="{{asset('img/boy_farming.png')}}" alt="Left Image" class="w-60">
             </div>
             <!-- Right side question and options -->
            <div class="w-1/2">
                <h2 class="text-xl font-bold mb-4">Quiz Question</h2>
                <p class="mb-4">Kunle has practiced sustainable farming on his father’s farmland and it has been fertile. What do you think made the farmland fertile?</p>
                <!-- Option buttons -->
                <div class="flex flex-col space-y-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Option 1</button>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Option 2</button>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Option 3</button>
                </div>
            </div>
        </div>
         <!-- Bottom navigation bar -->
        <div class="h-8">
            <img src="{{asset('img/ankara_nav.png')}}" alt="Header Image" class="w-full">
        </div>
     </div>
 </x-guest>
 