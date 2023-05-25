<x-layout>
    <!-- Hero Section -->
    <section id="hero" class="h-1/3">
        <div class="absolute flex flex-col justify-center items-center w-full space-y-2 mt-24 md:top-32 md:mt-5 lg:top-1/4">
            <h2 class="text-5xl font-bold lg:text-7xl">Job<span class="text-white">Hunt</span></h2>
            <p class="lg:text-2xl">Find a job or find a developer all in one place</p><br>
            <!-- Button -->
            <a href="register.html" class="hidden text-1xl bg-veryLightBlue rounded-full py-2 px-4 shadow-md hover:bg-hover hover:text-white transition-all duration-300 md:block">Get Started</a>
        </div>
    </section>
    <!-- Search section -->
    <section id="search" class="bg-platinum">
        <form action="#">
            <div class="p-6 text-center">
              <input type="text" class="w-full rounded-full p-3 focus:outline-none md:w-3/4" placeholder="Search jobs...">  
            </div>
        </form>  
    </section>
    <!-- Listings Section -->
    <section id="listings" class="w-full">
        <h2 class="text-3xl text-center pl-2 font-bold mt-6 lg:text-left lg:ml-8">Browse Current Listings</h2>
        <!-- Listing Container -->
        <div class="grid mx-6 my-2 lg:grid-cols-4 md:grid-cols-2 md:gap-4 lg:mx-10">
            <!-- Left button -->
                <button class="hidden bg-veryLightBlue py-4 px-6 rounded-full absolute right-2 mt-36 lg:block shadow-md hover:bg-hover active:shadow-none transition-all duration-300">></button>
                <!-- right button -->
                <button class="hidden bg-veryLightBlue py-4 px-6 rounded-full absolute left-2 mt-36 shadow-md hover:bg-hover active:shadow-none transition-all duration-300"><</button>
        <!-- Listings Group -->
        <x-listing-card />
        <x-listing-card />
        <x-listing-card />
        <x-listing-card />
        </div>
        <a href="#" class="float-right mr-10 text-lg hover:text-hover">View all ></a>
    </section>
    <section id="developer-listing">
        
    </section>
    
</x-layout>
    
